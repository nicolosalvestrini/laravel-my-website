@extends('admin.layouts.app')
@section('title', 'Dettaglio impostazione')
@section('section', 'site-settings')
@section('content')
{{-- scrivere qui la logica --}}
<a href="{{ ($adminBasePath ?? '/admin') . '/site-settings' }}" class="back-link">
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
            Titolo principale
        </h1>
        <p>
            La prima frase che accoglie chi visita il tuo sito.
        </p>
    </div>
    {{-- scrivere qui la logica --}}
    <a class="btn btn-primary" href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1/edit' }}">
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
                    <use href="/admin-ui/icons.svg#edit">
                    </use>
                </svg>
                Contenuto
            </h2>
            <div class="settings-key mb-4">
                hero_title
            </div>
            <h2 style="font-size:28px;line-height:1.4">
                Ciao, sono Nicolò.
                <br>
                Creo esperienze web moderne e funzionali.
            </h2>
        </div>
    </section>
    <aside>
        <section class="card mb-4">
            <div class="card-body">
                <h2 class="form-section-title">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#settings">
                        </use>
                    </svg>
                    Impostazione
                </h2>
                <dl class="detail-list">
                    <dt>
                        Chiave
                    </dt>
                    <dd class="settings-key">
                        hero_title
                    </dd>
                    <dt>
                        Sezione
                    </dt>
                    <dd>
                        Homepage · Presentazione
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina impostazione
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
                        Elimina impostazione
                    </button>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
