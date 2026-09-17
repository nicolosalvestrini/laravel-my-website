@extends('admin.layouts.app')
@section('title', 'Dettaglio progetto')
@section('section', 'projects')
@section('content')
{{-- scrivere qui la logica --}}
<a href="{{ ($adminBasePath ?? '/admin') . '/projects' }}" class="back-link">
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
            Nexus Games
        </h1>
        <p>
            Un progetto, tutte le sue informazioni.
        </p>
    </div>
    {{-- scrivere qui la logica --}}
    <a class="btn btn-primary" href="{{ ($adminBasePath ?? '/admin') . '/projects/1/edit' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#edit">
            </use>
        </svg>
        Modifica
    </a>
</div>
<div class="form-grid">
    <div>
        <div class="card mb-4">
            <div class="project-cover nexus">
                <span class="badge badge-purple">
                    Full Stack
                </span>
                <span class="cover-word">
                    NEXUS
                </span>
            </div>
            <div class="card-body">
                <div class="d-flex gap-2 mb-3">
                    <span class="badge badge-purple">
                        Full Stack
                    </span>
                    <span class="badge badge-green">
                        In evidenza
                    </span>
                </div>
                <h2>
                    Un punto d’incontro per chi ama giocare.
                </h2>
                <p class="detail-copy mt-3">
                    Piattaforma completa con backoffice Laravel e frontend React per la gestione di giochi, utenti, ordini e contenuti.
                </p>
                <div class="tags">
                    {{-- scrivere qui la logica --}}
                    <span class="badge badge-blue">
                        Laravel
                    </span>
                    <span class="badge badge-blue">
                        React
                    </span>
                    <span class="badge badge-blue">
                        MySQL
                    </span>
                </div>
            </div>
        </div>
    </div>
    <aside>
        <section class="card mb-4">
            <div class="card-body">
                <h2 class="form-section-title">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#folder">
                        </use>
                    </svg>
                    Dettagli del progetto
                </h2>
                <dl class="detail-list">
                    <dt>
                        Slug
                    </dt>
                    <dd>
                        nexus-games
                    </dd>
                    <dt>
                        Categoria
                    </dt>
                    <dd>
                        Full Stack
                    </dd>
                    <dt>
                        Ordine
                    </dt>
                    <dd>
                        1
                    </dd>
                    <dt>
                        Demo
                    </dt>
                    <dd>
                        https://example.com
                    </dd>
                    <dt>
                        Repository
                    </dt>
                    <dd>
                        github.com/esempio/progetto
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina progetto
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
                        Elimina progetto
                    </button>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
