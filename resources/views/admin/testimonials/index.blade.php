@extends('admin.layouts.app')
@section('title', 'Testimonianze')
@section('section', 'testimonials')
@section('content')
{{-- scrivere qui la logica --}}
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            Le parole di chi ti sceglie
        </h1>
        <p>
            Raccogli le testimonianze e scegli quali mostrare sul sito.
        </p>
    </div>
    {{-- scrivere qui la logica --}}
    <a class="btn btn-primary" href="{{ ($adminBasePath ?? '/admin') . '/testimonials/create' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#plus">
            </use>
        </svg>
        Nuova testimonianza
    </a>
</div>
<div class="toolbar">
    {{-- scrivere qui la logica --}}
    <div class="search-box">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#search">
            </use>
        </svg>
        <input class="form-control" type="search" aria-label="Cerca una testimonianza…" placeholder="Cerca una testimonianza…">
    </div>
    <select class="form-select" aria-label="Filtra elenco">
        <option>
            Tutti gli stati
        </option>
        <option>
            Pubblicata
        </option>
        <option>
            Bozza
        </option>
    </select>
</div>
{{-- scrivere qui la logica --}}
<div class="row g-4">
    <div class="col-lg-6">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center gap-3">
                        <span class="avatar">
                            MR
                        </span>
                        <div>
                            <h3 class="mb-1">
                                Marco Rossi
                            </h3>
                            <small class="text-muted">
                                Cliente · Progetto web
                            </small>
                        </div>
                    </div>
                    <span class="badge badge-green">
                        Pubblicata
                    </span>
                </div>
                <div class="rating" aria-label="5 su 5">
                    ★★★★★
                </div>
                <p class="quote mt-3">
                    “Un esempio di testimonianza: qui potrai raccontare l’esperienza di chi ha lavorato con te.”
                </p>
                <div class="card-actions">
                    <span class="text-muted small">
                        Contenuto dimostrativo
                    </span>
                    <div class="d-flex gap-2 justify-content-end">
                        {{-- scrivere qui la logica --}}
                        <a href="{{ ($adminBasePath ?? '/admin') . '/testimonials/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#eye">
                                </use>
                            </svg>
                        </a>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/testimonials/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
    <div class="col-lg-6">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center gap-3">
                        <span class="avatar">
                            LB
                        </span>
                        <div>
                            <h3 class="mb-1">
                                Laura Bianchi
                            </h3>
                            <small class="text-muted">
                                Collaboratrice · Design
                            </small>
                        </div>
                    </div>
                    <span class="badge badge-muted">
                        Bozza
                    </span>
                </div>
                <div class="rating" aria-label="5 su 5">
                    ★★★★★
                </div>
                <p class="quote mt-3">
                    “Un esempio di testimonianza: qui potrai raccontare l’esperienza di chi ha lavorato con te.”
                </p>
                <div class="card-actions">
                    <span class="text-muted small">
                        Contenuto dimostrativo
                    </span>
                    <div class="d-flex gap-2 justify-content-end">
                        {{-- scrivere qui la logica --}}
                        <a href="{{ ($adminBasePath ?? '/admin') . '/testimonials/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#eye">
                                </use>
                            </svg>
                        </a>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/testimonials/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
<div class="empty-state mt-4">
    <svg class="icon " aria-hidden="true">
        <use href="/admin-ui/icons.svg#message">
        </use>
    </svg>
    <h3>
        Ogni collaborazione ha una storia.
    </h3>
    <p>
        Le testimonianze pubblicate troveranno spazio nella sezione “Cosa dicono di me”.
    </p>
</div>
@endsection
