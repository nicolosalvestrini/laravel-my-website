@extends('admin.layouts.app')
@section('title', 'Servizi')
@section('section', 'services')
@section('content')
{{-- scrivere qui la logica --}}
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            I tuoi servizi
        </h1>
        <p>
            Mostra come puoi trasformare un’idea in un progetto concreto.
        </p>
    </div>
    {{-- scrivere qui la logica --}}
    <a class="btn btn-primary" href="{{ ($adminBasePath ?? '/admin') . '/services/create' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#plus">
            </use>
        </svg>
        Nuovo servizio
    </a>
</div>
<div class="toolbar">
    {{-- scrivere qui la logica --}}
    <div class="search-box">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#search">
            </use>
        </svg>
        <input class="form-control" type="search" aria-label="Cerca un servizio…" placeholder="Cerca un servizio…">
    </div>
    <select class="form-select" aria-label="Filtra elenco">
        <option>
            Tutti
        </option>
    </select>
</div>
{{-- scrivere qui la logica --}}
<div class="row g-4">
    <div class="col-md-6 col-xl-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <span class="icon-box purple">
                        <svg class="icon icon-lg" aria-hidden="true">
                            <use href="/admin-ui/icons.svg#globe">
                            </use>
                        </svg>
                    </span>
                    <small class="text-muted">
                        01
                    </small>
                </div>
                <h3>
                    Creazione siti web
                </h3>
                <p class="small mt-3">
                    Siti web moderni, veloci e responsive su misura.
                </p>
                <div class="card-actions">
                    <span class="text-muted small">
                        Ordine 1
                    </span>
                    <div class="d-flex gap-2 justify-content-end">
                        {{-- scrivere qui la logica --}}
                        <a href="{{ ($adminBasePath ?? '/admin') . '/services/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#eye">
                                </use>
                            </svg>
                        </a>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/services/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#edit">
                                </use>
                            </svg>
                        </a>
                        <button type="button" class="btn btn-outline-danger btn-icon" disabled aria-label="Elimina (anteprima)">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#trash">
                                </use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <span class="icon-box purple">
                        <svg class="icon icon-lg" aria-hidden="true">
                            <use href="/admin-ui/icons.svg#monitor">
                            </use>
                        </svg>
                    </span>
                    <small class="text-muted">
                        02
                    </small>
                </div>
                <h3>
                    Landing page
                </h3>
                <p class="small mt-3">
                    Pagine efficaci e orientate alla conversione.
                </p>
                <div class="card-actions">
                    <span class="text-muted small">
                        Ordine 2
                    </span>
                    <div class="d-flex gap-2 justify-content-end">
                        {{-- scrivere qui la logica --}}
                        <a href="{{ ($adminBasePath ?? '/admin') . '/services/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#eye">
                                </use>
                            </svg>
                        </a>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/services/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#edit">
                                </use>
                            </svg>
                        </a>
                        <button type="button" class="btn btn-outline-danger btn-icon" disabled aria-label="Elimina (anteprima)">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#trash">
                                </use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <span class="icon-box purple">
                        <svg class="icon icon-lg" aria-hidden="true">
                            <use href="/admin-ui/icons.svg#briefcase">
                            </use>
                        </svg>
                    </span>
                    <small class="text-muted">
                        03
                    </small>
                </div>
                <h3>
                    Siti per ristoranti e attività locali
                </h3>
                <p class="small mt-3">
                    Soluzioni dedicate alla tua attività.
                </p>
                <div class="card-actions">
                    <span class="text-muted small">
                        Ordine 3
                    </span>
                    <div class="d-flex gap-2 justify-content-end">
                        {{-- scrivere qui la logica --}}
                        <a href="{{ ($adminBasePath ?? '/admin') . '/services/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#eye">
                                </use>
                            </svg>
                        </a>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/services/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#edit">
                                </use>
                            </svg>
                        </a>
                        <button type="button" class="btn btn-outline-danger btn-icon" disabled aria-label="Elimina (anteprima)">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#trash">
                                </use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <span class="icon-box purple">
                        <svg class="icon icon-lg" aria-hidden="true">
                            <use href="/admin-ui/icons.svg#settings">
                            </use>
                        </svg>
                    </span>
                    <small class="text-muted">
                        04
                    </small>
                </div>
                <h3>
                    Manutenzione e aggiornamenti
                </h3>
                <p class="small mt-3">
                    Supporto continuo per mantenere il sito al meglio.
                </p>
                <div class="card-actions">
                    <span class="text-muted small">
                        Ordine 4
                    </span>
                    <div class="d-flex gap-2 justify-content-end">
                        {{-- scrivere qui la logica --}}
                        <a href="{{ ($adminBasePath ?? '/admin') . '/services/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#eye">
                                </use>
                            </svg>
                        </a>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/services/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#edit">
                                </use>
                            </svg>
                        </a>
                        <button type="button" class="btn btn-outline-danger btn-icon" disabled aria-label="Elimina (anteprima)">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#trash">
                                </use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <span class="icon-box purple">
                        <svg class="icon icon-lg" aria-hidden="true">
                            <use href="/admin-ui/icons.svg#code">
                            </use>
                        </svg>
                    </span>
                    <small class="text-muted">
                        05
                    </small>
                </div>
                <h3>
                    Applicazioni web personalizzate
                </h3>
                <p class="small mt-3">
                    Soluzioni digitali per esigenze specifiche.
                </p>
                <div class="card-actions">
                    <span class="text-muted small">
                        Ordine 5
                    </span>
                    <div class="d-flex gap-2 justify-content-end">
                        {{-- scrivere qui la logica --}}
                        <a href="{{ ($adminBasePath ?? '/admin') . '/services/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#eye">
                                </use>
                            </svg>
                        </a>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/services/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#edit">
                                </use>
                            </svg>
                        </a>
                        <button type="button" class="btn btn-outline-danger btn-icon" disabled aria-label="Elimina (anteprima)">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#trash">
                                </use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
