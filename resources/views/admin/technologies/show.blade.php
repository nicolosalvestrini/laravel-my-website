@extends('admin.layouts.app')
@section('title', 'Dettaglio tecnologia')
@section('section', 'technologies')
@section('content')
{{-- scrivere qui la logica --}}
<a href="{{ ($adminBasePath ?? '/admin') . '/technologies' }}" class="back-link">
    <svg class="icon " aria-hidden="true">
        <use href="/admin-ui/icons.svg#back">
        </use>
    </svg>
    Torna all’elenco
</a>
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            React
        </h1>
        <p>
            Una competenza che prende forma nei tuoi progetti.
        </p>
    </div>
    {{-- scrivere qui la logica --}}
    <a class="btn btn-primary" href="{{ ($adminBasePath ?? '/admin') . '/technologies/1/edit' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#edit">
            </use>
        </svg>
        Modifica
    </a>
</div>
<div class="form-grid">
    <div>
        <section class="card mb-4">
            <div class="card-body">
                <h2 class="form-section-title">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#code">
                        </use>
                    </svg>
                    La tecnologia
                </h2>
                <span class="icon-box mb-4">
                    <svg class="icon icon-lg" aria-hidden="true">
                        <use href="/admin-ui/icons.svg#atom">
                        </use>
                    </svg>
                </span>
                <h2>
                    React
                </h2>
                <div class="d-flex gap-2 mt-3">
                    <span class="badge badge-blue">
                        Frontend
                    </span>
                    <span class="badge badge-green">
                        Visibile nelle competenze
                    </span>
                </div>
            </div>
        </section>
        <div class="section-heading">
            <h2 class="section-title">
                Progetti associati
            </h2>
        </div>
        <div class="row g-3">
            {{-- scrivere qui la logica --}}
            <div class="col-md-6">
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
            <div class="col-md-6">
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
        </div>
    </div>
    <aside>
        <section class="card mb-4">
            <div class="card-body">
                <h2 class="form-section-title">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#settings">
                        </use>
                    </svg>
                    Dettagli
                </h2>
                <dl class="detail-list">
                    <dt>
                        Nome
                    </dt>
                    <dd>
                        React
                    </dd>
                    <dt>
                        Tipo
                    </dt>
                    <dd>
                        Frontend
                    </dd>
                    <dt>
                        Ordine
                    </dt>
                    <dd>
                        1
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina tecnologia
                    </h3>
                    <p>
                        Rimuovi questo contenuto dal tuo sito.
                    </p>
                    {{-- scrivere qui la logica --}}
                    <button class="btn btn-outline-danger" type="button" disabled title="Anteprima grafica">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#trash">
                            </use>
                        </svg>
                        Elimina tecnologia
                    </button>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
