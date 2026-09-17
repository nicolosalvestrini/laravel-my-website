@extends('admin.layouts.app')
@section('title', 'Modifica servizio')
@section('section', 'services')
@section('content')
<a href="{{ route('admin.services.index') }}" class="back-link">
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
            Modifica servizio
        </h1>
        <p>
            Dai una nuova forma ai tuoi contenuti.
        </p>
    </div>
</div>

<form class="admin-form" method="POST" action="{{ route('admin.services.update', $service) }}">
    @csrf
    @method('PUT')
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
                        <label class="form-label" for="title">
                            Titolo del servizio
                        </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $service->title) }}">
                        @error('title')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="description">
                            Descrizione
                        </label>
                        <textarea class="form-control" id="description" name="description" rows="6">{{ old('description', $service->description) }}</textarea>
                        <div class="form-text">
                            Descrivi in modo chiaro cosa puoi offrire.
                        </div>
                        @error('description')
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
                        Aspetto e posizione
                    </h2>
                    <div class="mb-4">
                        <label class="form-label" for="icon">
                            Icona
                        </label>
                        <input type="text" class="form-control" id="icon" name="icon" value="{{ old('icon', $service->icon) }}">
                        <div class="form-text">
                            Nome dell’icona (es. globe, monitor, star, settings, code).
                        </div>
                        @error('icon')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="sort_order">
                            Ordine di visualizzazione
                        </label>
                        <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $service->sort_order) }}" step="1">
                        @error('sort_order')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </section>
        </aside>
    </div>
    <div class="form-actions">
        <a class="btn btn-outline-light" href="{{ route('admin.services.index') }}">
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
            Salva modifiche
        </button>
    </div>
</form>
@endsection
