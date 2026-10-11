function startRouteFlight(signal) {
    const routeStops = document.querySelectorAll('#route-stops li');
    const routePath = document.querySelector('#route-path');
    const routeFlight = document.querySelector('#route-flight');
    const routeCard = document.querySelector('#route-flight-card');
    const routeName = document.querySelector('#route-flight-name');
    const routePlane = document.querySelector('#route-flight-plane');
    const routeFlow = document.querySelector('.flow');
    const routeReady = document.querySelector('#itinerary-ready');
    const routeLead = document.querySelector('#route-lead');
    const routeLeadPath = document.querySelector('#route-lead-path');

    if (! routeStops.length || ! routePath || ! routeFlight || ! routeCard || ! routeName || ! routePlane || ! routeFlow || ! routeReady || ! routeLead || ! routeLeadPath) {
        return;
    }
    const stops = Array.from(routeStops, (stop) => stop.textContent.trim());
    const pathLength = routePath.getTotalLength();
    const sampleCount = 480;
    const samples = [];

    for (let index = 0; index <= sampleCount; index += 1) {
        const distance = (pathLength * index) / sampleCount;
        const point = routePath.getPointAtLength(distance);
        const next = routePath.getPointAtLength(Math.min(pathLength, distance + 12));

        samples.push({
            x: point.x,
            y: point.y,
            distance,
            dx: next.x - point.x,
            dy: next.y - point.y,
        });
    }

    let shownStop = -1;
    let swapTimer = 0;
    let frame = 0;
    let lastPointIndex = 0;

    const showStop = (index) => {
        if (index === shownStop) {
            return;
        }

        if (shownStop === -1) {
            shownStop = index;
            routeName.textContent = stops[index];

            return;
        }

        shownStop = index;
        routeCard.classList.add('is-leaving');
        window.clearTimeout(swapTimer);
        swapTimer = window.setTimeout(() => {
            routeName.textContent = stops[shownStop];
            routeCard.classList.remove('is-leaving');
        }, 180);
    };

    const placeRouteFlight = () => {
        if (window.innerWidth <= 1024) {
            routeFlight.classList.add('is-hidden');
            return;
        }

        const flowRect = routeFlow.getBoundingClientRect();
        const readyRect = routeReady.getBoundingClientRect();
        const nav = document.querySelector('.nav');
        const navBottom = nav ? nav.getBoundingClientRect().bottom : 0;
        const anchor = Math.max(navBottom + 48, window.innerHeight * 0.38);

        if (flowRect.height === 0 || readyRect.height === 0) {
            return;
        }

        const pathPoints = samples.map((sample, index) => ({
            x: flowRect.left + (sample.x / 1000) * flowRect.width,
            y: flowRect.top + (sample.y / 4000) * flowRect.height,
            onPath: true,
            progress: index / samples.length,
        }));
        const pathStart = pathPoints[0];
        const pathEnd = pathPoints[pathPoints.length - 1];
        const launch = {
            x: readyRect.right - 6,
            y: readyRect.top + (readyRect.height / 2),
        };
        const routePoints = [];

        for (let step = 0; step <= 24; step += 1) {
            const amount = step / 24;
            const controlX = launch.x + 70;
            const controlY = launch.y + ((pathStart.y - launch.y) * 0.45);
            const inverse = 1 - amount;

            routePoints.push({
                x: (inverse * inverse * launch.x) + (2 * inverse * amount * controlX) + (amount * amount * pathStart.x),
                y: (inverse * inverse * launch.y) + (2 * inverse * amount * controlY) + (amount * amount * pathStart.y),
                onPath: false,
                progress: 0,
            });
        }

        pathPoints.forEach((point) => {
            routePoints.push(point);
        });

        let bestIndex = 0;
        let bestScore = Number.POSITIVE_INFINITY;

        routePoints.forEach((point, index) => {
            const distance = Math.abs(point.y - anchor);
            const jump = Math.abs(index - lastPointIndex);
            const score = distance + (distance < 28 ? jump * 0.03 : 0);

            if (score < bestScore) {
                bestScore = score;
                bestIndex = index;
            }
        });

        lastPointIndex = bestIndex;

        const placed = routePoints[bestIndex];
        const ahead = routePoints[Math.min(routePoints.length - 1, bestIndex + 1)];
        const behind = routePoints[Math.max(0, bestIndex - 1)];
        const onPath = placed.onPath;

        const leadTop = launch.y - flowRect.top;
        const leadHeight = Math.max(pathStart.y - launch.y, 1);

        routeLead.style.top = `${leadTop}px`;
        routeLead.style.width = `${flowRect.width}px`;
        routeLead.style.height = `${leadHeight}px`;
        routeLead.setAttribute('viewBox', `0 0 ${flowRect.width} ${leadHeight}`);

        const leadStartX = launch.x - flowRect.left;
        const leadEndX = pathStart.x - flowRect.left;
        const leadControlX = leadStartX + 70;
        const leadControlY = leadHeight * 0.45;

        routeLeadPath.setAttribute('d', `M ${leadStartX} 0 Q ${leadControlX} ${leadControlY} ${leadEndX} ${leadHeight}`);

        const endFade = 120;
        let opacity = 1;

        if (pathEnd.y - placed.y < endFade) {
            opacity = Math.max(0, (pathEnd.y - placed.y) / endFade);
        }

        const directionX = (ahead.x - placed.x) || (placed.x - behind.x) || 0;
        const directionY = (ahead.y - placed.y) || (placed.y - behind.y) || 1;
        const angle = Math.atan2(directionY, directionX) * (180 / Math.PI);

        routeFlight.style.left = `${placed.x}px`;
        routeFlight.style.top = `${placed.y}px`;
        routeFlight.style.opacity = String(opacity);
        routeFlight.classList.toggle('is-hidden', opacity <= 0.02);
        routeFlight.classList.toggle('is-parked', !onPath);
        routePlane.style.transform = `rotate(${angle + 90}deg)`;
        routeCard.dataset.side = placed.x > (window.innerWidth * 0.5) ? 'right' : 'left';

        if (onPath) {
            const stopIndex = Math.min(stops.length - 1, Math.floor(Math.min(0.999, placed.progress) * stops.length));
            showStop(stopIndex);
        }
    };

    const requestPlace = () => {
        if (frame) {
            return;
        }

        frame = window.requestAnimationFrame(() => {
            frame = 0;
            placeRouteFlight();
        });
    };

    placeRouteFlight();
    window.addEventListener('scroll', requestPlace, { passive: true, signal });
    window.addEventListener('resize', requestPlace, { signal });
}

let routeFlightController = null;

function bootRouteFlight() {
    routeFlightController?.abort();
    routeFlightController = new AbortController();
    startRouteFlight(routeFlightController.signal);
}

bootRouteFlight();
document.addEventListener('page:loaded', bootRouteFlight);

let pageVisitController = null;
let pageIntervals = [];

function clearPageIntervals() {
    pageIntervals.forEach((id) => window.clearInterval(id));
    pageIntervals = [];
}

function executePageScripts(root) {
    const originalSetInterval = window.setInterval;

    window.setInterval = (...args) => {
        const id = originalSetInterval(...args);
        pageIntervals.push(id);

        return id;
    };

    try {
        root.querySelectorAll('script').forEach((oldScript) => {
            const script = document.createElement('script');

            Array.from(oldScript.attributes).forEach((attribute) => {
                script.setAttribute(attribute.name, attribute.value);
            });

            script.textContent = oldScript.textContent;
            oldScript.replaceWith(script);
        });
    } finally {
        window.setInterval = originalSetInterval;
    }
}

function canVisitLink(anchor, event) {
    if (! anchor || event.defaultPrevented || event.button !== 0) {
        return false;
    }

    if (event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) {
        return false;
    }

    if (anchor.target && anchor.target !== '_self') {
        return false;
    }

    if (anchor.hasAttribute('download') || anchor.dataset.fullLoad !== undefined) {
        return false;
    }

    if (anchor.classList.contains('start-exploring')) {
        return false;
    }

    let url;

    try {
        url = new URL(anchor.href, window.location.href);
    } catch {
        return false;
    }

    if (url.origin !== window.location.origin) {
        return false;
    }

    if (url.pathname === window.location.pathname && url.search === window.location.search) {
        return false;
    }

    return true;
}

async function visitPage(url, { replace = false } = {}) {
    const nextUrl = new URL(url, window.location.href);

    pageVisitController?.abort();
    pageVisitController = new AbortController();
    clearPageIntervals();
    document.body.classList.remove('drawer-open', 'drawer-locked');

    try {
        const response = await fetch(nextUrl.href, {
            headers: {
                Accept: 'text/html',
                'X-Requested-With': 'XMLHttpRequest',
            },
            credentials: 'same-origin',
            signal: pageVisitController.signal,
        });
        const contentType = response.headers.get('content-type') || '';

        if (! response.ok || ! contentType.includes('text/html')) {
            window.location.assign(nextUrl.href);

            return;
        }

        const html = await response.text();
        const parsed = new DOMParser().parseFromString(html, 'text/html');
        const nextShell = parsed.querySelector('#page-shell');
        const currentShell = document.querySelector('#page-shell');

        if (! nextShell || ! currentShell) {
            window.location.assign(response.url || nextUrl.href);

            return;
        }

        const finalUrl = new URL(response.url, window.location.href);

        if (nextUrl.hash) {
            finalUrl.hash = nextUrl.hash;
        }

        currentShell.replaceWith(nextShell);
        document.title = parsed.title;

        if (replace) {
            window.history.replaceState({}, '', finalUrl.href);
        } else {
            window.history.pushState({}, '', finalUrl.href);
        }

        executePageScripts(document.querySelector('#page-shell'));

        const target = finalUrl.hash ? document.querySelector(finalUrl.hash) : null;

        if (target) {
            target.scrollIntoView();
        } else {
            window.scrollTo(0, 0);
        }

        document.dispatchEvent(new Event('page:loaded'));
    } catch (error) {
        if (error.name === 'AbortError') {
            return;
        }

        window.location.assign(nextUrl.href);
    }
}

window.visitPage = visitPage;

document.addEventListener('click', (event) => {
    const anchor = event.target.closest('a');

    if (! canVisitLink(anchor, event)) {
        return;
    }

    event.preventDefault();
    visitPage(anchor.href);
});

document.addEventListener('submit', (event) => {
    const form = event.target;

    if (event.defaultPrevented || ! (form instanceof HTMLFormElement) || form.method.toLowerCase() !== 'get' || (form.target && form.target !== '_self')) {
        return;
    }

    event.preventDefault();

    const action = new URL(form.action || window.location.href, window.location.href);
    const fields = new FormData(form);
    const params = new URLSearchParams();

    fields.forEach((value, key) => {
        if (typeof value === 'string') {
            params.append(key, value);
        }
    });

    action.search = params.toString();
    visitPage(action.href);
});

window.addEventListener('popstate', () => {
    visitPage(window.location.href, { replace: true });
});

