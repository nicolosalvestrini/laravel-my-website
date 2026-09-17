<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="robots" content="noindex,nofollow">
        <title>
            Accedi · NS Web Craft
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
                Web Craft
            </a>
            <div class="card">
                <div class="card-body">
                    <span class="icon-box purple mb-4">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#lock">
                            </use>
                        </svg>
                    </span>
                    <div class="eyebrow">
                        IL TUO SPAZIO DI LAVORO
                    </div>
                    <h1>
                        Bentornato.
                    </h1>
                    <p class="small mb-4">
                        Accedi per dare forma al tuo sito.
                    </p>
                    {{-- scrivere qui la logica --}}
                    <form onsubmit="return false">
                        {{-- scrivere qui la logica --}}
                        <div class="mb-4">
                            {{-- scrivere qui la logica --}}
                            <label class="form-label" for="email">
                                Email
                            </label>
                            <input type="email" class="form-control" id="email" name="email" value="">
                            <div class="form-text">
                            </div>
                        </div>
                        <div class="mb-4">
                            {{-- scrivere qui la logica --}}
                            <label class="form-label" for="password">
                                Password
                            </label>
                            <input type="password" class="form-control" id="password" name="password" value="">
                            <div class="form-text">
                            </div>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label" for="remember">
                                Ricordami
                            </label>
                        </div>
                        {{-- scrivere qui la logica --}}
                        <button class="btn btn-primary w-100" type="button" disabled>
                            Accedi
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#arrow">
                                </use>
                            </svg>
                        </button>
                    </form>
                    <p class="text-center form-text mt-3 mb-0">
                        Anteprima grafica · Accesso non attivo
                    </p>
                </div>
            </div>
            <p class="text-center form-text mt-4">
                © 2026 NS Web Craft
            </p>
        </main>
    </body>
</html>
