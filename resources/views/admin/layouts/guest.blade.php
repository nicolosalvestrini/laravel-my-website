<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="robots" content="noindex,nofollow">
        <title>
            @yield('title', 'Accedi') · Nicolò Salvestrini
        </title>
        <link rel="stylesheet" href="{{ asset('admin-ui/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-ui/admin.css') }}">
    </head>
    <body class="login-page">
        <main class="login-shell">
            <a href="/" class="brand">
                <strong>
                    NS
                </strong>
                Nicolò Salvestrini
            </a>
            <div class="card">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
            <p class="text-center form-text mt-4">
                © 2026 Nicolò Salvestrini
            </p>
        </main>
    </body>
</html>
