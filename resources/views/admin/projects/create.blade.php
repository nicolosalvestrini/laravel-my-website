@extends('admin.layouts.app')
@section('title', 'Nuovo progetto')
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
            Nuovo progetto
        </h1>
        <p>
            Un nuovo contenuto per raccontare il tuo lavoro.
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
                        <label class="form-label" for="title">
                            Titolo del progetto
                        </label>
                        <input type="text" class="form-control" id="title" name="title" value="">
                        <div class="form-text">
                        </div>
                    </div>
                    <div class="mb-4">
                        {{-- scrivere qui la logica --}}
                        <label class="form-label" for="slug">
                            Slug
                        </label>
                        <input type="text" class="form-control" id="slug" name="slug" value="">
                        <div class="form-text">
                            Il nome del progetto nel suo indirizzo web.
                        </div>
                    </div>
                    <div class="mb-4">
                        {{-- scrivere qui la logica --}}
                        <label class="form-label" for="description">
                            Descrizione
                        </label>
                        <textarea class="form-control" id="description" name="description" rows="6"></textarea>
                        <div class="form-text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                {{-- scrivere qui la logica --}}
                                <label class="form-label" for="demo_url">
                                    Link demo
                                </label>
                                <input type="url" class="form-control" id="demo_url" name="demo_url" value="">
                                <div class="form-text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                {{-- scrivere qui la logica --}}
                                <label class="form-label" for="github_url">
                                    Link GitHub
                                </label>
                                <input type="url" class="form-control" id="github_url" name="github_url" value="">
                                <div class="form-text">
                                </div>
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
                    {{-- scrivere qui la logica --}}
                    <div class="tech-options">
                        <label class="tech-option" for="tech-0">
                            <input class="form-check-input m-0" type="checkbox" id="tech-0" name="technologies[]" value="1">
                            Laravel
                        </label>
                        <label class="tech-option" for="tech-1">
                            <input class="form-check-input m-0" type="checkbox" id="tech-1" name="technologies[]" value="2">
                            React
                        </label>
                        <label class="tech-option" for="tech-2">
                            <input class="form-check-input m-0" type="checkbox" id="tech-2" name="technologies[]" value="3">
                            MySQL
                        </label>
                        <label class="tech-option" for="tech-3">
                            <input class="form-check-input m-0" type="checkbox" id="tech-3" name="technologies[]" value="4">
                            Bootstrap
                        </label>
                        <label class="tech-option" for="tech-4">
                            <input class="form-check-input m-0" type="checkbox" id="tech-4" name="technologies[]" value="5">
                            JavaScript
                        </label>
                        <label class="tech-option" for="tech-5">
                            <input class="form-check-input m-0" type="checkbox" id="tech-5" name="technologies[]" value="6">
                            Node.js
                        </label>
                    </div>
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
                        {{-- scrivere qui la logica --}}
                        <label class="visually-hidden" for="image_path">
                            Scegli la copertina del progetto
                        </label>
                        <input class="form-control" type="file" id="image_path" name="image_path" accept="image/jpeg,image/png,image/gif">
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
                        {{-- scrivere qui la logica --}}
                        <label class="form-label" for="category">
                            Categoria
                        </label>
                        <select class="form-select" id="category" name="category">
                            <option value="frontend" selected>
                                Frontend
                            </option>
                            <option value="backend">
                                Backend
                            </option>
                            <option value="fullstack">
                                Full Stack
                            </option>
                            <option value="database">
                                Database
                            </option>
                        </select>
                    </div>
                    {{-- scrivere qui la logica --}}
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" role="switch" type="checkbox" name="is_featured" value="1" id="is_featured">
                        <label class="form-check-label" for="is_featured">
                            Progetto in evidenza
                        </label>
                    </div>
                    <div class="mb-4">
                        {{-- scrivere qui la logica --}}
                        <label class="form-label" for="sort_order">
                            Ordine di visualizzazione
                        </label>
                        <input type="number" class="form-control" id="sort_order" name="sort_order" value="0" step="1">
                        <div class="form-text">
                        </div>
                    </div>
                </div>
            </section>
        </aside>
    </div>
    {{-- scrivere qui la logica --}}
    <div class="form-actions">
        {{-- scrivere qui la logica --}}
        <a class="btn btn-outline-light" href="{{ ($adminBasePath ?? '/admin') . '/projects' }}">
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
            Salva progetto
        </button>
    </div>
</form>
@endsection
