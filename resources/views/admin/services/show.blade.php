@extends('admin.layouts.app')
@section('title', 'Dettaglio servizio')
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
            Creazione siti web
        </h1>
        <p>
            Il servizio che presenterai ai tuoi prossimi clienti.
        </p>
    </div>
    {{-- scrivere qui la logica --}}
    <a class="btn btn-primary" href="{{ ($adminBasePath ?? '/admin') . '/services/1/edit' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#edit">
            </use>
        </svg>
        Modifica
    </a>
</div>
<div class="form-grid">
    <section class="card mb-4">
        <div class="card-body">
            <h2 class="form-section-title">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#globe">
                    </use>
                </svg>
                Il servizio
            </h2>
            <span class="icon-box purple mb-4">
                <svg class="icon icon-lg" aria-hidden="true">
                    <use href="/admin-ui/icons.svg#globe">
                    </use>
                </svg>
            </span>
            <h2>
                Un sito che parla di te.
            </h2>
            <p class="detail-copy mt-3">
                Siti web moderni, veloci e responsive su misura per ogni esigenza. Dalla prima idea alla messa online, ogni dettaglio è pensato per valorizzare la tua attività.
            </p>
        </div>
    </section>
    <aside>
        <section class="card mb-4">
            <div class="card-body">
                <h2 class="form-section-title">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#settings">
                        </use>
                    </svg>
                    Dettagli
                </h2>
                <dl class="detail-list">
                    <dt>
                        Icona
                    </dt>
                    <dd>
                        globe
                    </dd>
                    <dt>
                        Ordine di visualizzazione
                    </dt>
                    <dd>
                        1
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina servizio
                    </h3>
                    <p>
                        Rimuovi questo contenuto dal tuo sito.
                    </p>
                    {{-- scrivere qui la logica --}}
                    <button class="btn btn-outline-danger" type="button" disabled title="Anteprima grafica">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#trash">
                            </use>
                        </svg>
                        Elimina servizio
                    </button>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
