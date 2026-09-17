@extends('admin.layouts.app')
@section('title', 'Progetti')
@section('section', 'projects')
@section('content')
{{-- scrivere qui la logica --}}
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            I tuoi progetti
        </h1>
        <p>
            Le esperienze digitali che raccontano il tuo lavoro.
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
<div class="toolbar">
    {{-- scrivere qui la logica --}}
    <div class="search-box">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#search">
            </use>
        </svg>
        <input class="form-control" type="search" aria-label="Cerca un progetto…" placeholder="Cerca un progetto…">
    </div>
    <select class="form-select" aria-label="Filtra elenco">
        <option>
            Tutte le categorie
        </option>
        <option>
            Frontend
        </option>
        <option>
            Backend
        </option>
        <option>
            Full Stack
        </option>
        <option>
            Database
        </option>
    </select>
</div>
{{-- scrivere qui la logica --}}
<div class="row g-4">
    <div class="col-md-6 col-xl-4">
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
    <div class="col-md-6 col-xl-4">
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
    <div class="col-md-6 col-xl-4">
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
    <div class="col-md-6 col-xl-4">
        <div class="card project-card h-100">
            <div class="project-cover database">
                <span class="badge badge-blue">
                    Database
                </span>
                <span class="cover-word">
                    MySQL
                </span>
            </div>
            <div class="card-body">
                <h3>
                    Database MySQL
                </h3>
                <p>
                    Dati organizzati per applicazioni affidabili.
                </p>
                <div class="tags">
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
                    <a class="btn btn-outline-light btn-icon" href="{{ ($adminBasePath ?? '/admin') . '/projects/1/edit' }}" aria-label="Modifica Database MySQL">
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
@endsection
