@extends('admin.layouts.app')
@section('title', 'Dettaglio servizio')
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
            {{ $service->title }}
        </h1>
        <p>
            Il servizio che presenterai ai tuoi prossimi clienti.
        </p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.services.edit', $service) }}">
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
                    <use href="/admin-ui/icons.svg#{{ $service->icon ?: 'globe' }}">
                    </use>
                </svg>
                Il servizio
            </h2>
            <span class="icon-box purple mb-4">
                <svg class="icon icon-lg" aria-hidden="true">
                    <use href="/admin-ui/icons.svg#{{ $service->icon ?: 'globe' }}">
                    </use>
                </svg>
            </span>
            <h2>
                {{ $service->title }}
            </h2>
            <p class="detail-copy mt-3">
                {{ $service->description }}
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
                        {{ $service->icon ?: '—' }}
                    </dd>
                    <dt>
                        Ordine di visualizzazione
                    </dt>
                    <dd>
                        {{ $service->sort_order }}
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina servizio
                    </h3>
                    <p>
                        Rimuovi questo contenuto dal tuo sito.
                    </p>
                    <form method="POST" action="{{ route('admin.services.destroy', $service) }}" onsubmit="return confirm('Eliminare questo servizio?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#trash">
                                </use>
                            </svg>
                            Elimina servizio
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
