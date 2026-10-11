<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title', 'Dashboard') – Admin | Explore Trekora</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --primary: #0a3736;
            --primary-hover: #0f4f4c;
            --accent: #0f8b86;
            --accent-light: #e6f7f5;
            --accent-dark: #0a5f5c;
            --sidebar-w: 230px;
            --navbar-h: 58px;
            --bottom-nav-h: 60px;
            --text: #111827;
            --text-muted: #6b7280;
            --border: #e5e7eb;
            --border-light: #f3f4f6;
            --bg: #f8fafc;
            --white: #ffffff;
            --radius: 12px;
        }

        html, body {
            width: 100%;
            max-width: 100%;
            overflow-x: hidden;
            background: var(--bg);
            color: var(--text);
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }

        /* ── Top Navbar ── */
        .admin-navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: var(--navbar-h);
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            z-index: 100;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15), 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .navbar-left {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 0;
        }

        /* Mobile Hamburger Button */
        .btn-menu-toggle {
            display: none;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            cursor: pointer;
            flex-shrink: 0;
            transition: background 0.15s;
        }

        .btn-menu-toggle:hover,
        .btn-menu-toggle:active {
            background: rgba(255, 255, 255, 0.22);
        }

        .btn-menu-toggle svg {
            width: 20px;
            height: 20px;
        }

        /* Navbar Brand (Left Aligned) */
        .navbar-brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: #ffffff;
            min-width: 0;
        }

        .navbar-brand img {
            height: 28px;
            max-width: 110px;
            object-fit: contain;
            filter: brightness(0) invert(1);
            display: block;
        }

        .navbar-brand-text {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: -0.01em;
            color: #ffffff;
            white-space: nowrap;
        }

        .navbar-brand-badge {
            display: inline-block;
            background: rgba(15, 139, 134, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: #ffffff;
            font-size: 10.5px;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 4px;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        /* Navbar Right */
        .navbar-right {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-shrink: 0;
        }

        .navbar-user {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13.5px;
            color: rgba(255, 255, 255, 0.9);
            white-space: nowrap;
        }

        .navbar-user-avatar {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: var(--accent);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
            border: 1.5px solid rgba(255, 255, 255, 0.3);
        }

        .btn-logout {
            background: rgba(255, 255, 255, 0.12);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 6px 12px;
            border-radius: 7px;
            font-size: 12.5px;
            font-family: inherit;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.15s, border-color 0.15s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            white-space: nowrap;
        }

        .btn-logout:hover {
            background: rgba(255, 255, 255, 0.22);
            border-color: rgba(255, 255, 255, 0.35);
        }

        /* ── Sidebar (Desktop) ── */
        .admin-sidebar {
            position: fixed;
            top: var(--navbar-h);
            left: 0;
            width: var(--sidebar-w);
            bottom: 0;
            background: var(--white);
            border-right: 1px solid var(--border);
            padding: 20px 12px;
            overflow-y: auto;
            z-index: 95;
            transition: transform 0.25s ease;
        }

        .sidebar-header {
            display: none; /* Only inside mobile drawer */
        }

        .sidebar-label {
            font-size: 10.5px;
            font-weight: 700;
            color: var(--text-muted);
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 0 10px;
            margin-bottom: 8px;
        }

        .sidebar-nav {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 12px;
            border-radius: 8px;
            text-decoration: none;
            color: var(--text);
            font-size: 13.5px;
            font-weight: 500;
            transition: background 0.15s, color 0.15s;
        }

        .sidebar-link:hover {
            background: var(--accent-light);
            color: var(--accent);
        }

        .sidebar-link.active {
            background: var(--accent-light);
            color: var(--accent);
            font-weight: 600;
        }

        .sidebar-link svg {
            width: 18px;
            height: 18px;
            flex-shrink: 0;
            opacity: 0.75;
        }

        .sidebar-link.active svg,
        .sidebar-link:hover svg {
            opacity: 1;
        }

        .sidebar-link-badge {
            margin-left: auto;
            font-size: 11px;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 9999px;
            background: var(--accent);
            color: #fff;
        }

        .sidebar-divider {
            border: none;
            border-top: 1px solid var(--border-light);
            margin: 16px 8px;
        }

        .sidebar-website-link {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 12px;
            border-radius: 8px;
            text-decoration: none;
            color: var(--text-muted);
            font-size: 13px;
            font-weight: 500;
            transition: background 0.15s, color 0.15s;
        }

        .sidebar-website-link:hover {
            background: #f1f5f9;
            color: var(--text);
        }

        .sidebar-website-link svg {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
        }

        /* Drawer Backdrop Overlay */
        .sidebar-backdrop {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(2px);
            z-index: 1040;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.25s ease, visibility 0.25s ease;
        }

        .sidebar-backdrop.active {
            opacity: 1;
            visibility: visible;
        }

        /* ── Main Content Area ── */
        .admin-content {
            margin-left: var(--sidebar-w);
            margin-top: var(--navbar-h);
            padding: 28px 32px;
            min-height: calc(100vh - var(--navbar-h));
            max-width: 100%;
            overflow-x: hidden;
        }

        /* ── Mobile Bottom Navigation Bar (App-like thumb access) ── */
        .mobile-bottom-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: var(--bottom-nav-h);
            background: var(--white);
            border-top: 1px solid var(--border);
            z-index: 90;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
            align-items: center;
            justify-content: space-around;
            padding: 0 4px;
        }

        .bottom-nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 3px;
            flex: 1;
            height: 100%;
            text-decoration: none;
            color: var(--text-muted);
            font-size: 11px;
            font-weight: 600;
            transition: color 0.15s;
            position: relative;
            background: transparent;
            border: none;
            cursor: pointer;
            font-family: inherit;
        }

        .bottom-nav-item svg {
            width: 20px;
            height: 20px;
            stroke-width: 2;
        }

        .bottom-nav-item.active {
            color: var(--accent);
        }

        .bottom-nav-item.active svg {
            color: var(--accent);
        }

        /* ── Typography & Header ── */
        .page-header-row {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .page-title {
            font-size: 22px;
            font-weight: 700;
            color: var(--text);
            letter-spacing: -0.01em;
            line-height: 1.25;
            margin-bottom: 4px;
        }

        .page-subtitle {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.4;
        }

        /* ── Dashboard Stats Grid (Mobile 340px-440px friendly) ── */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-bottom: 24px;
        }

        .stat-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 18px 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-width: 0;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--accent);
            opacity: 0;
            transition: opacity 0.2s;
        }

        .stat-card:hover::before {
            opacity: 1;
        }

        .stat-label {
            font-size: 11.5px;
            font-weight: 700;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 6px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .stat-value {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
            line-height: 1.1;
            margin-bottom: 4px;
            letter-spacing: -0.02em;
        }

        .stat-note {
            font-size: 11.5px;
            color: var(--text-muted);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* ── 2-Column Grid (Dashboard) ── */
        .grid-2col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            width: 100%;
        }

        /* ── Section Cards ── */
        .card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
            width: 100%;
            max-width: 100%;
        }

        .card-header {
            padding: 14px 18px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
            background: #fafbfd;
        }

        .card-title {
            font-size: 14.5px;
            font-weight: 700;
            color: var(--text);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        /* ── Responsive Table & Horizontal Scroll Protection ── */
        .table-wrap {
            width: 100%;
            max-width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            background: var(--white);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13.5px;
            text-align: left;
        }

        thead tr {
            background: #f8fafc;
        }

        th {
            padding: 10px 14px;
            font-size: 11px;
            font-weight: 700;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid var(--border);
            white-space: nowrap;
        }

        td {
            padding: 12px 14px;
            border-bottom: 1px solid var(--border-light);
            color: var(--text);
            vertical-align: middle;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover td {
            background: #fbfcfd;
        }

        /* ── Badges ── */
        .badge {
            display: inline-flex;
            align-items: center;
            padding: 3px 9px;
            border-radius: 9999px;
            font-size: 11.5px;
            font-weight: 600;
            white-space: nowrap;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .badge-teal {
            background: var(--accent-light);
            color: var(--accent);
            border: 1px solid rgba(15, 139, 134, 0.2);
        }

        .badge-gray {
            background: #f1f5f9;
            color: #64748b;
        }

        /* ── Search Bar ── */
        .search-bar {
            display: flex;
            align-items: center;
            gap: 8px;
            min-width: 0;
            flex-wrap: nowrap;
        }

        .search-input {
            padding: 8px 12px;
            border: 1.5px solid var(--border);
            border-radius: 8px;
            font-size: 13px;
            font-family: inherit;
            outline: none;
            transition: border-color 0.2s, background 0.2s;
            width: 240px;
            background: #f8fafc;
            color: var(--text);
        }

        .search-input:focus {
            border-color: var(--accent);
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(15, 139, 134, 0.1);
        }

        .btn-search {
            padding: 8px 14px;
            background: var(--primary);
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            font-family: inherit;
            cursor: pointer;
            transition: background 0.15s;
            white-space: nowrap;
            flex-shrink: 0;
        }

        .btn-search:hover {
            background: var(--primary-hover);
        }

        .link-view {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .link-view:hover {
            text-decoration: underline;
        }

        /* ── Detail Page Styles ── */
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            color: var(--text-muted);
            text-decoration: none;
            margin-bottom: 14px;
            font-weight: 600;
            padding: 4px 8px;
            border-radius: 6px;
            background: #f1f5f9;
            width: fit-content;
        }

        .btn-back:hover {
            color: var(--text);
            background: #e2e8f0;
        }

        .btn-wa {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            background: #22c55e;
            color: #ffffff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            transition: background 0.15s;
            white-space: nowrap;
        }

        .btn-wa:hover {
            background: #16a34a;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: 200px 1fr;
            width: 100%;
        }

        .detail-label {
            padding: 12px 18px;
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.04em;
            background: #fafbfd;
            border-bottom: 1px solid var(--border-light);
            display: flex;
            align-items: center;
        }

        .detail-value {
            padding: 12px 18px;
            font-size: 13.5px;
            color: var(--text);
            border-bottom: 1px solid var(--border-light);
            word-break: break-word;
            overflow-wrap: anywhere;
        }

        /* ── Empty State ── */
        .empty-state {
            padding: 48px 16px;
            text-align: center;
            color: var(--text-muted);
            font-size: 13.5px;
        }

        .empty-state svg {
            width: 36px;
            height: 36px;
            color: #cbd5e1;
            margin: 0 auto 10px;
            display: block;
        }

        /* ── Pagination ── */
        .pagination-wrap {
            padding: 12px 16px;
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 12.5px;
            color: var(--text-muted);
            flex-wrap: wrap;
            gap: 10px;
        }

        .pagination-wrap nav {
            display: flex;
            align-items: center;
            gap: 4px;
            flex-wrap: wrap;
        }

        .pagination-wrap a,
        .pagination-wrap span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 30px;
            height: 30px;
            padding: 0 8px;
            border-radius: 6px;
            font-size: 12.5px;
            text-decoration: none;
            color: var(--text);
            border: 1px solid var(--border);
            transition: background 0.15s;
        }

        .pagination-wrap span[aria-current="page"] {
            background: var(--accent);
            color: #ffffff;
            border-color: var(--accent);
            font-weight: 600;
        }

        .pagination-wrap a:hover {
            background: var(--accent-light);
        }

        /* ═══════════════════════════════════════════════════════
           RESPONSIVE BREAKPOINTS (Tablets, Mobiles & Small Phones)
           ═══════════════════════════════════════════════════════ */

        /* ── Tablets & Mobile (<= 768px) ── */
        @media (max-width: 768px) {
            .btn-menu-toggle {
                display: inline-flex;
            }

            .admin-navbar {
                padding: 0 14px;
            }

            /* Transform desktop sidebar into mobile drawer */
            .admin-sidebar {
                top: 0;
                bottom: 0;
                left: 0;
                width: 270px;
                max-width: 82vw;
                z-index: 1050;
                box-shadow: 4px 0 24px rgba(0, 0, 0, 0.25);
                transform: translateX(-105%);
                transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
                display: flex;
                flex-direction: column;
                padding: 0;
            }

            .admin-sidebar.open {
                transform: translateX(0);
            }

            .sidebar-backdrop {
                display: block;
            }

            /* Drawer Header */
            .sidebar-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 16px;
                background: var(--primary);
                color: #ffffff;
            }

            .sidebar-header-brand {
                display: flex;
                align-items: center;
                gap: 8px;
                font-size: 14px;
                font-weight: 700;
                color: #ffffff;
            }

            .sidebar-header-brand img {
                height: 24px;
                filter: brightness(0) invert(1);
            }

            .btn-sidebar-close {
                background: rgba(255, 255, 255, 0.15);
                border: none;
                color: #ffffff;
                width: 30px;
                height: 30px;
                border-radius: 6px;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
            }

            .sidebar-body {
                padding: 16px 12px;
                flex: 1;
                overflow-y: auto;
            }

            /* Content adjustments */
            .admin-content {
                margin-left: 0;
                margin-top: var(--navbar-h);
                padding: 18px 16px calc(var(--bottom-nav-h) + 20px) 16px;
                width: 100%;
            }

            .mobile-bottom-nav {
                display: flex;
            }

            .stats-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 12px;
            }

            .grid-2col {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .card-header {
                flex-direction: column;
                align-items: stretch;
                gap: 10px;
            }

            .search-bar {
                width: 100%;
            }

            .search-input {
                flex: 1;
                width: auto;
                min-width: 0;
            }

            .detail-grid {
                grid-template-columns: 1fr;
            }

            .detail-label {
                padding: 10px 14px 2px 14px;
                background: transparent;
                border-bottom: none;
                font-size: 11px;
            }

            .detail-value {
                padding: 2px 14px 12px 14px;
                border-bottom: 1px solid var(--border-light);
                font-size: 13.5px;
            }
        }

        /* ── Mobiles & Small Phones (340px to 440px) ── */
        @media (max-width: 480px) {
            .admin-navbar {
                padding: 0 10px;
            }

            .navbar-left {
                gap: 8px;
            }

            .btn-menu-toggle {
                width: 32px;
                height: 32px;
            }

            .navbar-brand img {
                height: 24px;
                max-width: 80px;
            }

            .navbar-brand-text span:first-child {
                display: none; /* Hide 'Explore' text if cramped, keep badge */
            }

            .navbar-brand-badge {
                font-size: 10px;
                padding: 1px 5px;
            }

            .navbar-user-name {
                display: none; /* Hide 'Welcome, Admin' text on small mobile */
            }

            .btn-logout {
                padding: 5px 8px;
                font-size: 11.5px;
                gap: 4px;
            }

            .btn-logout span {
                display: none; /* Icon only on ultra compact or keep small */
            }

            .admin-content {
                padding: 14px 10px calc(var(--bottom-nav-h) + 16px) 10px;
            }

            .page-title {
                font-size: 19px;
            }

            .page-subtitle {
                font-size: 12px;
                margin-bottom: 14px;
            }

            /* Keep 2-column stats for optimal screen utilization */
            .stats-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 8px;
                margin-bottom: 16px;
            }

            .stat-card {
                padding: 12px 10px;
                border-radius: 10px;
            }

            .stat-label {
                font-size: 10px;
                margin-bottom: 4px;
            }

            .stat-value {
                font-size: 22px;
                margin-bottom: 2px;
            }

            .stat-note {
                font-size: 10.5px;
            }

            .card-header {
                padding: 12px 14px;
            }

            .card-title {
                font-size: 13.5px;
            }

            /* Ensure table wraps neatly and scrolls smoothly on phones */
            .table-wrap {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-wrap table {
                min-width: 480px;
            }

            .pagination-wrap {
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 8px;
            }

            .btn-wa {
                width: 100%;
                padding: 10px;
            }
        }

        /* ── Ultra Small Phones (< 360px down to 340px) ── */
        @media (max-width: 360px) {
            .navbar-brand-badge {
                display: none;
            }

            .stats-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 6px;
            }

            .stat-card {
                padding: 10px 8px;
            }

            .stat-value {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    {{-- Top Navbar: Logo and Admin Panel placed strictly on the LEFT --}}
    <nav class="admin-navbar">
        <div class="navbar-left">
            <button type="button" class="btn-menu-toggle" id="menuToggleBtn" aria-label="Toggle menu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>

            <a href="{{ route('admin.dashboard') }}" class="navbar-brand">
                <img src="{{ asset('images/explore-trekora.png') }}" alt="Explore Trekora" onerror="this.style.display='none'">
                <div class="navbar-brand-text">
                    <span>Explore Trekora</span>
                    <span class="navbar-brand-badge">Admin Panel</span>
                </div>
            </a>
        </div>

        <div class="navbar-right">
            <div class="navbar-user">
                <div class="navbar-user-avatar">A</div>
                <span class="navbar-user-name">Welcome, <strong>Admin</strong></span>
            </div>

            <form method="POST" action="{{ route('admin.logout') }}" style="margin:0">
                @csrf
                <button type="submit" class="btn-logout" title="Logout">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:14px;height:14px">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </nav>

    {{-- Backdrop for mobile drawer --}}
    <div class="sidebar-backdrop" id="sidebarBackdrop"></div>

    {{-- Sidebar (Desktop side navigation & Mobile slide-out drawer) --}}
    <aside class="admin-sidebar" id="adminSidebar">
        {{-- Drawer header only visible on mobile --}}
        <div class="sidebar-header">
            <div class="sidebar-header-brand">
                <img src="{{ asset('images/explore-trekora.png') }}" alt="Explore Trekora" onerror="this.style.display='none'">
                <span>Admin Menu</span>
            </div>
            <button type="button" class="btn-sidebar-close" id="sidebarCloseBtn" aria-label="Close menu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:18px;height:18px">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <div class="sidebar-body">
            <p class="sidebar-label">Navigation</p>
            <ul class="sidebar-nav">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.inquiries') }}" class="sidebar-link {{ request()->routeIs('admin.inquiries*') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span>Inquiries</span>
                    </a>
                </li>
            </ul>

            <hr class="sidebar-divider">

            <p class="sidebar-label">Shortcuts</p>
            <a href="{{ route('home') }}" target="_blank" class="sidebar-website-link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                </svg>
                <span>View Website ↗</span>
            </a>
        </div>
    </aside>

    {{-- Mobile Bottom Bar for 1-Tap Thumb Navigation --}}
    <nav class="mobile-bottom-nav">
        <a href="{{ route('admin.dashboard') }}" class="bottom-nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('admin.inquiries') }}" class="bottom-nav-item {{ request()->routeIs('admin.inquiries*') ? 'active' : '' }}">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
            <span>Inquiries</span>
        </a>
        <a href="{{ route('home') }}" target="_blank" class="bottom-nav-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
            </svg>
            <span>Website</span>
        </a>
        <form method="POST" action="{{ route('admin.logout') }}" style="display:contents">
            @csrf
            <button type="submit" class="bottom-nav-item" title="Logout">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </nav>

    {{-- Main Content --}}
    <main class="admin-content">
        @yield('content')
    </main>

    {{-- Drawer Toggle JS --}}
    <script>
        (function() {
            const sidebar = document.getElementById('adminSidebar');
            const backdrop = document.getElementById('sidebarBackdrop');
            const openBtn = document.getElementById('menuToggleBtn');
            const closeBtn = document.getElementById('sidebarCloseBtn');

            function openSidebar() {
                sidebar.classList.add('open');
                backdrop.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeSidebar() {
                sidebar.classList.remove('open');
                backdrop.classList.remove('active');
                document.body.style.overflow = '';
            }

            if (openBtn) openBtn.addEventListener('click', openSidebar);
            if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
            if (backdrop) backdrop.addEventListener('click', closeSidebar);

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && sidebar.classList.contains('open')) {
                    closeSidebar();
                }
            });
        })();
    </script>
</body>
</html>
