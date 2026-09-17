@extends('admin.layouts.app')
@section('title', 'Modifica impostazione')
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
            Modifica impostazione
        </h1>
        <p>
            Dai una nuova forma ai tuoi contenuti.
        </p>
    </div>
</div>
<div class="preview-notice">
    Anteprima grafica · I campi sono dimostrativi e il salvataggio non è attivo.
</div>
{{-- scrivere qui la logica --}}
<form class="admin-form" onsubmit="return false" enctype="multipart/form-data">
    {{-- scrivere qui la logica --}}
    <div class="form-grid">
        <div>
            <section class="card mb-4">
                <div class="card-body">
                    <h2 class="form-section-title">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#edit">
                            </use>
                        </svg>
                        Informazioni principali
                    </h2>
                    <div class="mb-4">
                        {{-- scrivere qui la logica --}}
                        <label class="form-label" for="key">
                            Chiave dell’impostazione
                        </label>
                        <input type="text" class="form-control" id="key" name="key" value="hero_title">
                        <div class="form-text">
                            Identificativo usato dal sito per leggere il contenuto.
                        </div>
                    </div>
                    <div class="mb-4">
                        {{-- scrivere qui la logica --}}
                        <label class="form-label" for="value">
                            Valore
                        </label>
                        <textarea class="form-control" id="value" name="value" rows="6">Ciao, sono Nicolò. Creo esperienze web moderne e funzionali.</textarea>
                        <div class="form-text">
                            Testo, indirizzo web o percorso del contenuto.
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <aside class="form-aside">
            <section class="card mb-4">
                <div class="card-body">
                    <h2 class="form-section-title">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#settings">
                            </use>
                        </svg>
                        La tua identità online
                    </h2>
                    <span class="icon-box purple mb-3">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#code">
                            </use>
                        </svg>
                    </span>
                    <p class="small mb-0">
                        Ogni dettaglio contribuisce a raccontare chi sei. Mantieni testi e contatti chiari e aggiornati.
                    </p>
                </div>
            </section>
        </aside>
    </div>
    {{-- scrivere qui la logica --}}
    <div class="form-actions">
        {{-- scrivere qui la logica --}}
        <a class="btn btn-outline-light" href="{{ ($adminBasePath ?? '/admin') . '/site-settings' }}">
            <svg class="icon " aria-hidden="true">
                <use href="/admin-ui/icons.svg#back">
                </use>
            </svg>
            Annulla
        </a>
        {{-- scrivere qui la logica --}}
        <button class="btn btn-primary" type="button" disabled title="Anteprima grafica">
            <svg class="icon " aria-hidden="true">
                <use href="/admin-ui/icons.svg#save">
                </use>
            </svg>
            Salva modifiche
        </button>
    </div>
</form>
@endsection
