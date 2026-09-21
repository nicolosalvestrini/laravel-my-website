<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <title>
            @yield('title', 'Panoramica') · Nicolò Salvestrini Admin
        </title>
        <link rel="stylesheet" href="{{ asset('admin-ui/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-ui/admin.css') }}">
    </head>
    <body data-section="@yield('section', 'dashboard')">
        <a href="#main-content" class="visually-hidden-focusable">
            Vai al contenuto
        </a>
        <aside class="sidebar">
            @include('admin.partials.navigation')
        </aside>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileNavigation" aria-labelledby="mobileNavTitle">
            <div class="offcanvas-header">
                <h2 class="offcanvas-title fs-6" id="mobileNavTitle">
                    Menu amministrazione
                </h2>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Chiudi menu">
                </button>
            </div>
            <div class="offcanvas-body">
                @include('admin.partials.navigation')
            </div>
        </div>
        <div class="workspace">
            <header class="topbar">
                <div class="d-flex align-items-center gap-3">
                    <button type="button" class="btn btn-outline-light btn-icon mobile-nav" data-bs-toggle="offcanvas" data-bs-target="#mobileNavigation" aria-controls="mobileNavigation" aria-label="Apri menu">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#menu">
                            </use>
                        </svg>
                    </button>
                    <div class="crumb">
                        Admin
                        <span>
                            / &nbsp; @yield('title', 'Panoramica')
                        </span>
                    </div>
                </div>
                <div class="top-actions">
                    <a class="btn btn-outline-light btn-sm" href="/" target="_blank" rel="noopener">
                        Visita il sito
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#external">
                            </use>
                        </svg>
                    </a>
                </div>
            </header>
            <main id="main-content" class="main-content">
                @yield('content')
            </main>
            <footer class="footer">
                <span class="brand">
                    <strong>
                        NS
                    </strong>
                    Nicolò Salvestrini
                </span>
                <span>
                    Il tuo sito. Il tuo spazio. &nbsp; © 2026 Nicolò Salvestrini
                </span>
            </footer>
        </div>
        <script src="{{ asset('admin-ui/vendor/bootstrap.bundle.min.js') }}">
        </script>
    </body>
</html>
