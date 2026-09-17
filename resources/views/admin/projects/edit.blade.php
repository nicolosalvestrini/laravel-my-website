@extends('admin.layouts.app')
@section('title', 'Modifica progetto')
@section('section', 'projects')
@section('content')
<a href="{{ route('admin.projects.index') }}" class="back-link">
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
            Modifica progetto
        </h1>
        <p>
            Dai una nuova forma ai tuoi contenuti.
        </p>
    </div>
</div>

@php
$selectedTechIds = collect(old('technologies', $project->technologies->pluck('id')->all()));
@endphp

<form class="admin-form" method="POST" action="{{ route('admin.projects.update', $project) }}" enctype="multipart/form-data">
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
                            Titolo del progetto
                        </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
                        @error('title')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="slug">
                            Slug
                        </label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $project->slug) }}">
                        <div class="form-text">
                            Il nome del progetto nel suo indirizzo web.
                        </div>
                        @error('slug')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="description">
                            Descrizione
                        </label>
                        <textarea class="form-control" id="description" name="description" rows="6">{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label" for="demo_url">
                                    Link demo
                                </label>
                                <input type="url" class="form-control" id="demo_url" name="demo_url" value="{{ old('demo_url', $project->demo_url) }}">
                                @error('demo_url')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label" for="github_url">
                                    Link GitHub
                                </label>
                                <input type="url" class="form-control" id="github_url" name="github_url" value="{{ old('github_url', $project->github_url) }}">
                                @error('github_url')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="card mb-4">
                <div class="card-body">
                    <h2 class="form-section-title">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#code">
                            </use>
                        </svg>
                        Tecnologie utilizzate
                    </h2>
                    <p class="small">
                        Seleziona le tecnologie da associare al progetto.
                    </p>
                    <div class="tech-options">
                        @foreach ($technologies as $technology)
                            <label class="tech-option" for="tech-{{ $technology->id }}">
                                <input class="form-check-input m-0" type="checkbox" id="tech-{{ $technology->id }}" name="technologies[]" value="{{ $technology->id }}" @checked($selectedTechIds->contains($technology->id))>
                                {{ $technology->name }}
                            </label>
                        @endforeach
                    </div>
                    @error('technologies')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </section>
        </div>
        <aside class="form-aside">
            <section class="card mb-4">
                <div class="card-body">
                    <h2 class="form-section-title">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#upload">
                            </use>
                        </svg>
                        Immagine di copertina
                    </h2>
                    @if ($project->image_path)
                        <div class="file-preview mb-3">
                            <img src="{{ $project->image_url }}" alt="{{ $project->title }}" style="width:64px;height:48px;object-fit:cover;border-radius:6px">
                            <div>
                                <strong>
                                    Immagine attuale
                                </strong>
                                <p>
                                    Scegli un nuovo file per sostituirla.
                                </p>
                            </div>
                        </div>
                    @endif
                    <div class="upload-box">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#upload">
                            </use>
                        </svg>
                        <p>
                            Scegli la copertina del progetto
                            <br>
                            <span class="form-text">
                                JPG, PNG o GIF · massimo 2 MB
                            </span>
                        </p>
                        <label class="visually-hidden" for="image_path">
                            Scegli la copertina del progetto
                        </label>
                        <input class="form-control" type="file" id="image_path" name="image_path" accept="image/jpeg,image/png,image/gif">
                        @error('image_path')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </section>
            <section class="card mb-4">
                <div class="card-body">
                    <h2 class="form-section-title">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#settings">
                            </use>
                        </svg>
                        Organizzazione
                    </h2>
                    <div class="mb-4">
                        <label class="form-label" for="category">
                            Categoria
                        </label>
                        <select class="form-select" id="category" name="category">
                            <option value="frontend" @selected(old('category', $project->category) === 'frontend')>
                                Frontend
                            </option>
                            <option value="backend" @selected(old('category', $project->category) === 'backend')>
                                Backend
                            </option>
                            <option value="fullstack" @selected(old('category', $project->category) === 'fullstack')>
                                Full Stack
                            </option>
                            <option value="database" @selected(old('category', $project->category) === 'database')>
                                Database
                            </option>
                        </select>
                        @error('category')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="hidden" name="is_featured" value="0">
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" role="switch" type="checkbox" name="is_featured" value="1" id="is_featured" @checked(old('is_featured', $project->is_featured))>
                        <label class="form-check-label" for="is_featured">
                            Progetto in evidenza
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="sort_order">
                            Ordine di visualizzazione
                        </label>
                        <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $project->sort_order) }}" step="1">
                        @error('sort_order')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </section>
        </aside>
    </div>
    <div class="form-actions">
        <a class="btn btn-outline-light" href="{{ route('admin.projects.index') }}">
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
