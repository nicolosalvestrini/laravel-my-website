@extends('admin.layouts.app')
@section('title', 'Nuova impostazione')
@section('section', 'site-settings')
@section('content')
<a href="{{ route('admin.site-settings.index') }}" class="back-link">
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
            Nuova impostazione
        </h1>
        <p>
            Un nuovo contenuto per raccontare il tuo lavoro.
        </p>
    </div>
</div>

<form class="admin-form" method="POST" action="{{ route('admin.site-settings.store') }}">
    @csrf
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
                        <label class="form-label" for="key">
                            Chiave dell’impostazione
                        </label>
                        <input type="text" class="form-control" id="key" name="key" value="{{ old('key') }}">
                        <div class="form-text">
                            Identificativo usato dal sito per leggere il contenuto (es. hero_title).
                        </div>
                        @error('key')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="value">
                            Valore
                        </label>
                        <textarea class="form-control" id="value" name="value" rows="6">{{ old('value') }}</textarea>
                        <div class="form-text">
                            Testo, indirizzo web o percorso del contenuto.
                        </div>
                        @error('value')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
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
    <div class="form-actions">
        <a class="btn btn-outline-light" href="{{ route('admin.site-settings.index') }}">
            <svg class="icon " aria-hidden="true">
                <use href="/admin-ui/icons.svg#back">
                </use>
            </svg>
            Annulla
        </a>
        <button class="btn btn-primary" type="submit">
            <svg class="icon " aria-hidden="true">
                <use href="/admin-ui/icons.svg#save">
                </use>
            </svg>
            Salva impostazione
        </button>
    </div>
</form>
@endsection
