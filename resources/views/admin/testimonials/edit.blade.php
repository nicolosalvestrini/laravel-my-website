@extends('admin.layouts.app')
@section('title', 'Modifica testimonianza')
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
            Modifica testimonianza
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                {{-- scrivere qui la logica --}}
                                <label class="form-label" for="author_name">
                                    Nome dell’autore
                                </label>
                                <input type="text" class="form-control" id="author_name" name="author_name" value="Marco Rossi">
                                <div class="form-text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                {{-- scrivere qui la logica --}}
                                <label class="form-label" for="author_role">
                                    Ruolo o attività
                                </label>
                                <input type="text" class="form-control" id="author_role" name="author_role" value="Cliente · Progetto web">
                                <div class="form-text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        {{-- scrivere qui la logica --}}
                        <label class="form-label" for="message">
                            Testimonianza
                        </label>
                        <textarea class="form-control" id="message" name="message" rows="6">Un esempio di testimonianza: qui potrai raccontare l’esperienza di chi ha lavorato con te.</textarea>
                        <div class="form-text">
                        </div>
                    </div>
                    <div class="mb-4">
                        {{-- scrivere qui la logica --}}
                        <label class="form-label" for="rating">
                            Valutazione
                        </label>
                        <select class="form-select" id="rating" name="rating">
                            <option value="">
                                Nessuna valutazione
                            </option>
                            <option value="1">
                                1 stella
                            </option>
                            <option value="2">
                                2 stelle
                            </option>
                            <option value="3">
                                3 stelle
                            </option>
                            <option value="4">
                                4 stelle
                            </option>
                            <option value="5" selected>
                                5 stelle
                            </option>
                        </select>
                    </div>
                </div>
            </section>
        </div>
        <aside class="form-aside">
            <section class="card mb-4">
                <div class="card-body">
                    <h2 class="form-section-title">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#user">
                            </use>
                        </svg>
                        Foto dell’autore
                    </h2>
                    <div class="file-preview mb-3">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#user">
                            </use>
                        </svg>
                        <div>
                            <strong>
                                Immagine attuale
                            </strong>
                            <p>
                                Anteprima dimostrativa
                            </p>
                        </div>
                    </div>
                    <div class="upload-box">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#upload">
                            </use>
                        </svg>
                        <p>
                            Scegli una foto per la testimonianza
                            <br>
                            <span class="form-text">
                                JPG, PNG o GIF · massimo 2 MB
                            </span>
                        </p>
                        {{-- scrivere qui la logica --}}
                        <label class="visually-hidden" for="avatar_path">
                            Scegli una foto per la testimonianza
                        </label>
                        <input class="form-control" type="file" id="avatar_path" name="avatar_path" accept="image/jpeg,image/png,image/gif">
                    </div>
                </div>
            </section>
            <section class="card mb-4">
                <div class="card-body">
                    <h2 class="form-section-title">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#eye">
                            </use>
                        </svg>
                        Pubblicazione
                    </h2>
                    {{-- scrivere qui la logica --}}
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" role="switch" type="checkbox" name="is_published" value="1" id="is_published" checked>
                        <label class="form-check-label" for="is_published">
                            Pubblica sul sito
                        </label>
                    </div>
                    <p class="form-text mb-0">
                        Le testimonianze in bozza restano nell’area admin.
                    </p>
                </div>
            </section>
        </aside>
    </div>
    {{-- scrivere qui la logica --}}
    <div class="form-actions">
        {{-- scrivere qui la logica --}}
        <a class="btn btn-outline-light" href="{{ ($adminBasePath ?? '/admin') . '/testimonials' }}">
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
