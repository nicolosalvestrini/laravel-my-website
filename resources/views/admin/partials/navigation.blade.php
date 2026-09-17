<a class="brand" href="{{ ($adminBasePath ?? '/admin') }}">
    <strong>
        NS
    </strong>
    Web Craft
    <small>
        ADMIN PANEL
    </small>
</a>
<div class="nav-caption">
    IL TUO SPAZIO DI LAVORO
</div>
<nav aria-label="Navigazione amministrazione">
    {{-- scrivere qui la logica --}}
    <a class="side-link" data-nav="dashboard" href="{{ ($adminBasePath ?? '/admin') }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#dashboard">
            </use>
        </svg>
        <span>
            Panoramica
        </span>
    </a>
    <a class="side-link" data-nav="projects" href="{{ ($adminBasePath ?? '/admin') . '/projects' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#folder">
            </use>
        </svg>
        <span>
            Progetti
        </span>
    </a>
    <a class="side-link" data-nav="services" href="{{ ($adminBasePath ?? '/admin') . '/services' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#globe">
            </use>
        </svg>
        <span>
            Servizi
        </span>
    </a>
    <a class="side-link" data-nav="technologies" href="{{ ($adminBasePath ?? '/admin') . '/technologies' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#code">
            </use>
        </svg>
        <span>
            Tecnologie
        </span>
    </a>
    <a class="side-link" data-nav="experiences" href="{{ ($adminBasePath ?? '/admin') . '/experiences' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#briefcase">
            </use>
        </svg>
        <span>
            Esperienze
        </span>
    </a>
    <a class="side-link" data-nav="testimonials" href="{{ ($adminBasePath ?? '/admin') . '/testimonials' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#message">
            </use>
        </svg>
        <span>
            Testimonianze
        </span>
    </a>
    <div class="nav-caption">
        GESTIONE
    </div>
    <a class="side-link" data-nav="contact-messages" href="{{ ($adminBasePath ?? '/admin') . '/contact-messages' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#mail">
            </use>
        </svg>
        <span>
            Messaggi
        </span>
        <span class="nav-count">
            3
        </span>
    </a>
    <a class="side-link" data-nav="site-settings" href="{{ ($adminBasePath ?? '/admin') . '/site-settings' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#settings">
            </use>
        </svg>
        <span>
            Impostazioni sito
        </span>
    </a>
</nav>
<div class="sidebar-bottom">
    {{-- scrivere qui la logica --}}
    <div class="profile">
        <span class="avatar">
            NS
        </span>
        <div>
            <strong>
                Nicolò Salvestrini
            </strong>
            <small>
                Amministratore
            </small>
        </div>
    </div>
    {{-- scrivere qui la logica --}}
    <button type="button" class="side-link w-100" disabled>
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#logout">
            </use>
        </svg>
        Esci dall’account
    </button>
</div>
