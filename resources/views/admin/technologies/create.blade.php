@extends('admin.layouts.app')
@section('title', 'Nuova tecnologia')
@section('section', 'technologies')
@section('content')
{{-- scrivere qui la logica --}}
<a href="{{ ($adminBasePath ?? '/admin') . '/technologies' }}" class="back-link">
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
            Nuova tecnologia
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
                        <label class="form-label" for="name">
                            Nome della tecnologia
                        </label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                        <div class="form-text">
                        </div>
                    </div>
                    <div class="mb-4">
                        {{-- scrivere qui la logica --}}
                        <label class="form-label" for="icon">
                            Icona
                        </label>
                        <input type="text" class="form-control" id="icon" name="icon" value="">
                        <div class="form-text">
                            Nome della classe o percorso dell’icona.
                        </div>
                    </div>
                    <div class="mb-4">
                        {{-- scrivere qui la logica --}}
                        <label class="form-label" for="type">
                            Tipo
                        </label>
                        <select class="form-select" id="type" name="type">
                            <option value="frontend">
                                Frontend
                            </option>
                            <option value="backend">
                                Backend
                            </option>
                            <option value="database">
                                Database
                            </option>
                            <option value="devops">
                                DevOps
                            </option>
                            <option value="other">
                                Altro
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
                            <use href="/admin-ui/icons.svg#eye">
                            </use>
                        </svg>
                        Visibilità
                    </h2>
                    {{-- scrivere qui la logica --}}
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" role="switch" type="checkbox" name="show_in_skills" value="1" id="show_in_skills">
                        <label class="form-check-label" for="show_in_skills">
                            Mostra nelle competenze
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
        <a class="btn btn-outline-light" href="{{ ($adminBasePath ?? '/admin') . '/technologies' }}">
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
            Salva tecnologia
        </button>
    </div>
</form>
@endsection
