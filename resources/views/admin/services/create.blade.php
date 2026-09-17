@extends('admin.layouts.app')
@section('title', 'Nuovo servizio')
@section('section', 'services')
@section('content')
{{-- scrivere qui la logica --}}
<a href="{{ ($adminBasePath ?? '/admin') . '/services' }}" class="back-link">
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
            Nuovo servizio
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
                            Titolo del servizio
                        </label>
                        <input type="text" class="form-control" id="title" name="title" value="">
                        <div class="form-text">
                        </div>
                    </div>
                    <div class="mb-4">
                        {{-- scrivere qui la logica --}}
                        <label class="form-label" for="description">
                            Descrizione
                        </label>
                        <textarea class="form-control" id="description" name="description" rows="6"></textarea>
                        <div class="form-text">
                            Descrivi in modo chiaro cosa puoi offrire.
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
                        Aspetto e posizione
                    </h2>
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
        <a class="btn btn-outline-light" href="{{ ($adminBasePath ?? '/admin') . '/services' }}">
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
            Salva servizio
        </button>
    </div>
</form>
@endsection
