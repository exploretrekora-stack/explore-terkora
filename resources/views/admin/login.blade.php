<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Admin Login – Explore Trekora</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html, body {
            width: 100%;
            max-width: 100%;
            overflow-x: hidden;
        }

        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: #0a3736;
            background: linear-gradient(135deg, #072a29 0%, #0a3736 50%, #0f4f4c 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 14px;
        }

        .login-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 36px 30px;
            width: 100%;
            max-width: 390px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.25);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .login-logo {
            text-align: center;
            margin-bottom: 24px;
        }

        .login-logo img {
            height: 38px;
            max-width: 130px;
            object-fit: contain;
            margin: 0 auto;
            display: block;
        }

        .login-logo h1 {
            font-size: 19px;
            font-weight: 700;
            color: #0a3736;
            margin-top: 10px;
            letter-spacing: -0.01em;
        }

        .login-logo p {
            font-size: 13px;
            color: #64748b;
            margin-top: 3px;
        }

        .divider {
            border: none;
            border-top: 1px solid #e2e8f0;
            margin: 20px 0;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            font-size: 12.5px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px 14px;
            border: 1.5px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            color: #111827;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
            background: #f9fafb;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #0f8b86;
            box-shadow: 0 0 0 3px rgba(15,139,134,0.12);
            background: #fff;
        }

        .error-msg {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #dc2626;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 16px;
        }

        .btn-login {
            width: 100%;
            padding: 11px 20px;
            background: #0a3736;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 14.5px;
            font-weight: 600;
            font-family: inherit;
            cursor: pointer;
            transition: background 0.15s, transform 0.1s;
            margin-top: 4px;
        }

        .btn-login:hover {
            background: #0f4f4c;
        }

        .btn-login:active {
            transform: scale(0.99);
        }

        .back-link {
            text-align: center;
            margin-top: 18px;
            font-size: 13px;
            color: #64748b;
        }

        .back-link a {
            color: #0f8b86;
            text-decoration: none;
            font-weight: 600;
        }

        .back-link a:hover { text-decoration: underline; }

        @media (max-width: 440px) {
            body {
                padding: 14px 10px;
            }

            .login-card {
                padding: 26px 18px;
                border-radius: 14px;
            }

            .login-logo h1 {
                font-size: 18px;
            }

            .login-logo img {
                height: 32px;
            }
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-logo">
            <img src="{{ asset('images/explore-trekora.png') }}" alt="Explore Trekora" onerror="this.style.display='none'">
            <h1>Explore Trekora</h1>
            <p>Admin Panel</p>
        </div>

        <hr class="divider">

        @if (isset($errors) && $errors->has('credentials'))
            <div class="error-msg">{{ $errors->first('credentials') }}</div>
        @endif

        @if (session('error'))
            <div class="error-msg">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    value="{{ old('username') }}"
                    autocomplete="username"
                    required
                    autofocus
                    placeholder="Enter username"
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    autocomplete="current-password"
                    required
                    placeholder="Enter password"
                >
            </div>

            <button type="submit" class="btn-login">Login to Admin</button>
        </form>

        <div class="back-link">
            <a href="{{ route('home') }}">← Back to website</a>
        </div>
    </div>
</body>
</html>
