@extends('admin.layouts.app')
@section('title', 'Dettaglio testimonianza')
@section('section', 'testimonials')
@section('content')
{{-- scrivere qui la logica --}}
<a href="{{ ($adminBasePath ?? '/admin') . '/testimonials' }}" class="back-link">
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
            La testimonianza di Marco
        </h1>
        <p>
            Le parole che raccontano una collaborazione.
        </p>
    </div>
    {{-- scrivere qui la logica --}}
    <a class="btn btn-primary" href="{{ ($adminBasePath ?? '/admin') . '/testimonials/1/edit' }}">
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
                    <use href="/admin-ui/icons.svg#message">
                    </use>
                </svg>
                Testimonianza
            </h2>
            <div class="d-flex align-items-center gap-3 mb-4">
                <span class="avatar">
                    MR
                </span>
                <div>
                    <h3 class="mb-1">
                        Marco Rossi
                    </h3>
                    <span class="text-muted small">
                        Cliente · Progetto web
                    </span>
                </div>
            </div>
            <div class="rating" aria-label="5 su 5">
                ★★★★★
            </div>
            <blockquote class="quote mt-3">
                “Un esempio di testimonianza: qui potrai raccontare l’esperienza di chi ha lavorato con te.”
            </blockquote>
        </div>
    </section>
    <aside>
        <section class="card mb-4">
            <div class="card-body">
                <h2 class="form-section-title">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#eye">
                        </use>
                    </svg>
                    Pubblicazione
                </h2>
                <span class="badge badge-green">
                    Pubblicata
                </span>
                <dl class="detail-list mt-4">
                    <dt>
                        Valutazione
                    </dt>
                    <dd>
                        5 su 5
                    </dd>
                    <dt>
                        Autore
                    </dt>
                    <dd>
                        Marco Rossi
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina testimonianza
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
                        Elimina testimonianza
                    </button>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
