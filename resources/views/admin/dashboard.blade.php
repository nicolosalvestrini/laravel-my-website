@extends('admin.layouts.app')
@section('title', 'Panoramica')
@section('section', 'dashboard')
@section('content')
<div class="page-heading">
    <div>
        <div class="eyebrow">
            PANNELLO DI CONTROLLO
        </div>
        <h1 class="mb-0">
            Bentornato, Nicolò.
        </h1>
        <p>
            Tutto quello che serve per dare forma al tuo spazio online.
        </p>
    </div>
    {{-- scrivere qui la logica --}}
    <a class="btn btn-primary" href="{{ ($adminBasePath ?? '/admin') . '/projects/create' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#plus">
            </use>
        </svg>
        Nuovo progetto
    </a>
</div>
<section class="card welcome mb-4">
    <div class="eyebrow">
        NS WEB CRAFT · IL TUO PORTFOLIO
    </div>
    <h2>
        Le tue idee, sempre
        <br>
        al centro.
    </h2>
    <p>
        Progetti, competenze e nuove opportunità.
        <br>
        Gestisci i contenuti che raccontano chi sei.
    </p>
    <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings' }}" class="btn btn-outline-light btn-sm mt-1">
        Personalizza il sito
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#arrow">
            </use>
        </svg>
    </a>
    <div class="welcome-art" aria-hidden="true">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#code">
            </use>
        </svg>
    </div>
</section>
{{-- scrivere qui la logica --}}
<div class="row g-3">
    <div class="col-6 col-xl-3">
        <div class="card stat-card h-100">
            <div>
                <div class="stat-label">
                    Progetti
                </div>
                <div class="stat-value">
                    4
                </div>
                <div class="stat-note">
                    Il tuo lavoro, in evidenza
                </div>
            </div>
            <span class="icon-box ">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#folder">
                    </use>
                </svg>
            </span>
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <div class="card stat-card h-100">
            <div>
                <div class="stat-label">
                    Servizi
                </div>
                <div class="stat-value">
                    5
                </div>
                <div class="stat-note">
                    Soluzioni che puoi offrire
                </div>
            </div>
            <span class="icon-box purple">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#globe">
                    </use>
                </svg>
            </span>
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <div class="card stat-card h-100">
            <div>
                <div class="stat-label">
                    Tecnologie
                </div>
                <div class="stat-value">
                    10
                </div>
                <div class="stat-note">
                    Competenze da raccontare
                </div>
            </div>
            <span class="icon-box ">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#code">
                    </use>
                </svg>
            </span>
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <div class="card stat-card h-100">
            <div>
                <div class="stat-label">
                    Messaggi
                </div>
                <div class="stat-value">
                    3
                </div>
                <div class="stat-note">
                    Nuove conversazioni
                </div>
            </div>
            <span class="icon-box purple">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#mail">
                    </use>
                </svg>
            </span>
        </div>
    </div>
</div>
<div class="section-heading">
    <h2 class="section-title">
        Progetti in evidenza
    </h2>
    <a href="{{ ($adminBasePath ?? '/admin') . '/projects' }}">
        Vedi tutti &nbsp;
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#arrow">
            </use>
        </svg>
    </a>
</div>
<div class="row g-3">
    <div class="col-md-4">
        <div class="card project-card h-100">
            <div class="project-cover nexus">
                <span class="badge badge-purple">
                    Full Stack
                </span>
                <span class="cover-word">
                    NEXUS
                </span>
            </div>
            <div class="card-body">
                <h3>
                    Nexus Games
                </h3>
                <p>
                    Una piattaforma completa per una community di giocatori.
                </p>
                <div class="tags">
                    <span class="badge badge-purple">
                        Laravel
                    </span>
                    <span class="badge badge-blue">
                        React
                    </span>
                    <span class="badge badge-purple">
                        MySQL
                    </span>
                </div>
                <div class="card-actions">
                    <a class="btn btn-outline-light btn-sm" href="{{ ($adminBasePath ?? '/admin') . '/projects/1' }}">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#eye">
                            </use>
                        </svg>
                        Dettaglio
                    </a>
                    <a class="btn btn-outline-light btn-icon" href="{{ ($adminBasePath ?? '/admin') . '/projects/1/edit' }}" aria-label="Modifica Nexus Games">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#edit">
                            </use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card project-card h-100">
            <div class="project-cover react">
                <span class="badge badge-blue">
                    Frontend
                </span>
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#atom">
                    </use>
                </svg>
            </div>
            <div class="card-body">
                <h3>
                    React Application
                </h3>
                <p>
                    Un’interfaccia moderna, veloce e responsive.
                </p>
                <div class="tags">
                    <span class="badge badge-purple">
                        React
                    </span>
                    <span class="badge badge-blue">
                        JavaScript
                    </span>
                    <span class="badge badge-purple">
                        Bootstrap
                    </span>
                </div>
                <div class="card-actions">
                    <a class="btn btn-outline-light btn-sm" href="{{ ($adminBasePath ?? '/admin') . '/projects/1' }}">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#eye">
                            </use>
                        </svg>
                        Dettaglio
                    </a>
                    <a class="btn btn-outline-light btn-icon" href="{{ ($adminBasePath ?? '/admin') . '/projects/1/edit' }}" aria-label="Modifica React Application">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#edit">
                            </use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card project-card h-100">
            <div class="project-cover node">
                <span class="badge badge-blue">
                    Backend
                </span>
                <span class="cover-word">
                    node.js
                </span>
            </div>
            <div class="card-body">
                <h3>
                    Express API
                </h3>
                <p>
                    API REST per connettere dati ed esperienze.
                </p>
                <div class="tags">
                    <span class="badge badge-purple">
                        Node.js
                    </span>
                    <span class="badge badge-blue">
                        Express
                    </span>
                    <span class="badge badge-purple">
                        JavaScript
                    </span>
                </div>
                <div class="card-actions">
                    <a class="btn btn-outline-light btn-sm" href="{{ ($adminBasePath ?? '/admin') . '/projects/1' }}">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#eye">
                            </use>
                        </svg>
                        Dettaglio
                    </a>
                    <a class="btn btn-outline-light btn-icon" href="{{ ($adminBasePath ?? '/admin') . '/projects/1/edit' }}" aria-label="Modifica Express API">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#edit">
                            </use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row g-4">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">
                Ultimi messaggi
            </h2>
            <a href="{{ ($adminBasePath ?? '/admin') . '/contact-messages' }}">
                Apri la casella &nbsp;
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#arrow">
                    </use>
                </svg>
            </a>
        </div>
        <div class="card">
            {{-- scrivere qui la logica --}}
            <a class="message-row" href="{{ ($adminBasePath ?? '/admin') . '/contact-messages/1' }}">
                <span class="avatar">
                    MR
                </span>
                <div class="message-content">
                    <div class="d-flex justify-content-between gap-2">
                        <h3>
                            Marco Rossi
                        </h3>
                        <time>
                            10:42
                        </time>
                    </div>
                    <p class="text-truncate">
                        Un nuovo sito per la mia attività
                    </p>
                    <small class="text-muted">
                        Vorrei raccontarti il mio progetto…
                    </small>
                </div>
            </a>
            <a class="message-row" href="{{ ($adminBasePath ?? '/admin') . '/contact-messages/1' }}">
                <span class="avatar">
                    LB
                </span>
                <div class="message-content">
                    <div class="d-flex justify-content-between gap-2">
                        <h3>
                            Laura Bianchi
                        </h3>
                        <time>
                            Ieri
                        </time>
                    </div>
                    <p class="text-truncate">
                        Una possibile collaborazione
                    </p>
                    <small class="text-muted">
                        Ho visto il tuo portfolio e mi piacerebbe…
                    </small>
                </div>
            </a>
            <a class="message-row" href="{{ ($adminBasePath ?? '/admin') . '/contact-messages/1' }}">
                <span class="avatar">
                    AV
                </span>
                <div class="message-content">
                    <div class="d-flex justify-content-between gap-2">
                        <h3>
                            Andrea Verdi
                        </h3>
                        <time>
                            Ieri
                        </time>
                    </div>
                    <p class="text-truncate">
                        Informazioni sui tuoi servizi
                    </p>
                    <small class="text-muted">
                        Ciao Nicolò, avrei bisogno di una landing…
                    </small>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="section-heading">
            <h2 class="section-title">
                Dai spazio alle tue idee
            </h2>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="{{ ($adminBasePath ?? '/admin') . '/experiences/create' }}" class="quick-link">
                    <span class="icon-box purple">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#briefcase">
                            </use>
                        </svg>
                    </span>
                    <span>
                        Aggiungi un’esperienza
                        <small>
                            Arricchisci il tuo percorso
                        </small>
                    </span>
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#arrow">
                        </use>
                    </svg>
                </a>
                <a href="{{ ($adminBasePath ?? '/admin') . '/services/create' }}" class="quick-link">
                    <span class="icon-box purple">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#globe">
                            </use>
                        </svg>
                    </span>
                    <span>
                        Racconta un nuovo servizio
                        <small>
                            Metti in luce ciò che sai fare
                        </small>
                    </span>
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#arrow">
                        </use>
                    </svg>
                </a>
                <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1/edit' }}" class="quick-link">
                    <span class="icon-box purple">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#settings">
                            </use>
                        </svg>
                    </span>
                    <span>
                        Aggiorna le impostazioni
                        <small>
                            Rendi il sito ancora più tuo
                        </small>
                    </span>
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#arrow">
                        </use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
