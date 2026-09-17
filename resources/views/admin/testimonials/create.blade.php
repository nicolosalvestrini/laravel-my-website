@extends('admin.layouts.app')
@section('title', 'Nuova testimonianza')
@section('section', 'testimonials')
@section('content')
<a href="{{ route('admin.testimonials.index') }}" class="back-link">
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
            Nuova testimonianza
        </h1>
        <p>
            Un nuovo contenuto per raccontare il tuo lavoro.
        </p>
    </div>
</div>

<form class="admin-form" method="POST" action="{{ route('admin.testimonials.store') }}" enctype="multipart/form-data">
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label" for="author_name">
                                    Nome dell’autore
                                </label>
                                <input type="text" class="form-control" id="author_name" name="author_name" value="{{ old('author_name') }}">
                                @error('author_name')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label" for="author_role">
                                    Ruolo o attività
                                </label>
                                <input type="text" class="form-control" id="author_role" name="author_role" value="{{ old('author_role') }}">
                                @error('author_role')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="message">
                            Testimonianza
                        </label>
                        <textarea class="form-control" id="message" name="message" rows="6">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="rating">
                            Valutazione
                        </label>
                        <select class="form-select" id="rating" name="rating">
                            <option value="" @selected(old('rating') === null)>
                                Nessuna valutazione
                            </option>
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}" @selected((int) old('rating') === $i)>
                                    {{ $i }} {{ $i === 1 ? 'stella' : 'stelle' }}
                                </option>
                            @endfor
                        </select>
                        @error('rating')
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
                            <use href="/admin-ui/icons.svg#user">
                            </use>
                        </svg>
                        Foto dell’autore
                    </h2>
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
                        <label class="visually-hidden" for="avatar_path">
                            Scegli una foto per la testimonianza
                        </label>
                        <input class="form-control" type="file" id="avatar_path" name="avatar_path" accept="image/jpeg,image/png,image/gif">
                        @error('avatar_path')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
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
                    <input type="hidden" name="is_published" value="0">
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" role="switch" type="checkbox" name="is_published" value="1" id="is_published" @checked(old('is_published'))>
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
    <div class="form-actions">
        <a class="btn btn-outline-light" href="{{ route('admin.testimonials.index') }}">
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
            Salva testimonianza
        </button>
    </div>
</form>
@endsection
