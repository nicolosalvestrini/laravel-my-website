@extends('admin.layouts.app')
@section('title', 'Modifica tecnologia')
@section('section', 'technologies')
@section('content')
<a href="{{ route('admin.technologies.index') }}" class="back-link">
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
            Modifica tecnologia
        </h1>
        <p>
            Dai una nuova forma ai tuoi contenuti.
        </p>
    </div>
</div>

<form class="admin-form" method="POST" action="{{ route('admin.technologies.update', $technology) }}">
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
                        <label class="form-label" for="name">
                            Nome della tecnologia
                        </label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $technology->name) }}">
                        @error('name')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="icon">
                            Icona
                        </label>
                        <input type="text" class="form-control" id="icon" name="icon" value="{{ old('icon', $technology->icon) }}">
                        <div class="form-text">
                            Nome dell’icona (es. code, database, globe).
                        </div>
                        @error('icon')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="type">
                            Tipo
                        </label>
                        <select class="form-select" id="type" name="type">
                            <option value="frontend" @selected(old('type', $technology->type) === 'frontend')>
                                Frontend
                            </option>
                            <option value="backend" @selected(old('type', $technology->type) === 'backend')>
                                Backend
                            </option>
                            <option value="database" @selected(old('type', $technology->type) === 'database')>
                                Database
                            </option>
                            <option value="devops" @selected(old('type', $technology->type) === 'devops')>
                                DevOps
                            </option>
                            <option value="other" @selected(old('type', $technology->type) === 'other')>
                                Altro
                            </option>
                        </select>
                        @error('type')
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
                            <use href="/admin-ui/icons.svg#eye">
                            </use>
                        </svg>
                        Visibilità
                    </h2>
                    <input type="hidden" name="show_in_skills" value="0">
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" role="switch" type="checkbox" name="show_in_skills" value="1" id="show_in_skills" @checked(old('show_in_skills', $technology->show_in_skills))>
                        <label class="form-check-label" for="show_in_skills">
                            Mostra nelle competenze
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="sort_order">
                            Ordine di visualizzazione
                        </label>
                        <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $technology->sort_order) }}" step="1">
                        @error('sort_order')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </section>
        </aside>
    </div>
    <div class="form-actions">
        <a class="btn btn-outline-light" href="{{ route('admin.technologies.index') }}">
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
