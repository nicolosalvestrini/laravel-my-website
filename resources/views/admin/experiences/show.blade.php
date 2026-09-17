@extends('admin.layouts.app')
@section('title', 'Dettaglio esperienza')
@section('section', 'experiences')
@section('content')
{{-- scrivere qui la logica --}}
<a href="{{ ($adminBasePath ?? '/admin') . '/experiences' }}" class="back-link">
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
            Corso Full Stack Web Development
        </h1>
        <p>
            Un capitolo del tuo percorso professionale.
        </p>
    </div>
    {{-- scrivere qui la logica --}}
    <a class="btn btn-primary" href="{{ ($adminBasePath ?? '/admin') . '/experiences/1/edit' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#edit">
            </use>
        </svg>
        Modifica
    </a>
</div>
<div class="form-grid">
    <section class="card mb-4">
        <div class="card-body">
            <h2 class="form-section-title">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#briefcase">
                    </use>
                </svg>
                Il percorso
            </h2>
            <span class="badge badge-purple">
                Formazione
            </span>
            <h2 class="mt-4">
                Corso Full Stack Web Development — Boolean
            </h2>
            <p class="detail-copy mt-3">
                Percorso di formazione in sviluppo web: HTML, CSS, JavaScript, React, PHP, Laravel e database relazionali. Un’esperienza dedicata alla realizzazione di applicazioni complete.
            </p>
        </div>
    </section>
    <aside>
        <section class="card mb-4">
            <div class="card-body">
                <h2 class="form-section-title">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#file">
                        </use>
                    </svg>
                    Periodo e posizione
                </h2>
                <dl class="detail-list">
                    <dt>
                        Data di inizio
                    </dt>
                    <dd>
                        1 gennaio 2024
                    </dd>
                    <dt>
                        Data di fine
                    </dt>
                    <dd>
                        1 gennaio 2025
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
                        Elimina esperienza
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
                        Elimina esperienza
                    </button>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
