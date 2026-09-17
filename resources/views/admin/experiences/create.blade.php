@extends('admin.layouts.app')
@section('title', 'Nuova esperienza')
@section('section', 'experiences')
@section('content')
<a href="{{ route('admin.experiences.index') }}" class="back-link">
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
            Nuova esperienza
        </h1>
        <p>
            Un nuovo contenuto per raccontare il tuo lavoro.
        </p>
    </div>
</div>

<form class="admin-form" method="POST" action="{{ route('admin.experiences.store') }}">
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
                        <label class="form-label" for="type">
                            Tipo di esperienza
                        </label>
                        <select class="form-select" id="type" name="type">
                            <option value="formazione" @selected(old('type') === 'formazione')>
                                Formazione
                            </option>
                            <option value="esperienza" @selected(old('type') === 'esperienza')>
                                Esperienza
                            </option>
                        </select>
                        @error('type')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="title">
                            Titolo
                        </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="description">
                            Descrizione
                        </label>
                        <textarea class="form-control" id="description" name="description" rows="6">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label" for="period_start">
                                    Data di inizio
                                </label>
                                <input type="date" class="form-control" id="period_start" name="period_start" value="{{ old('period_start') }}">
                                @error('period_start')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label" for="period_end">
                                    Data di fine
                                </label>
                                <input type="date" class="form-control" id="period_end" name="period_end" value="{{ old('period_end') }}">
                                <div class="form-text">
                                    Lascia vuoto se l’esperienza è ancora in corso.
                                </div>
                                @error('period_end')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
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
                            <use href="/admin-ui/icons.svg#briefcase">
                            </use>
                        </svg>
                        Nel tuo curriculum
                    </h2>
                    <div class="mb-4">
                        <label class="form-label" for="sort_order">
                            Ordine di visualizzazione
                        </label>
                        <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" step="1">
                        @error('sort_order')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <p class="small mb-0">
                        Questa esperienza farà parte del percorso raccontato sul tuo sito.
                    </p>
                </div>
            </section>
        </aside>
    </div>
    <div class="form-actions">
        <a class="btn btn-outline-light" href="{{ route('admin.experiences.index') }}">
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
            Salva esperienza
        </button>
    </div>
</form>
@endsection
