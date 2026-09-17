@extends('admin.layouts.app')
@section('title', 'Dettaglio impostazione')
@section('section', 'site-settings')
@section('content')
<a href="{{ route('admin.site-settings.index') }}" class="back-link">
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
            {{ $siteSetting->key }}
        </h1>
        <p>
            Un contenuto che il sito legge direttamente da qui.
        </p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.site-settings.edit', $siteSetting) }}">
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
                    <use href="/admin-ui/icons.svg#edit">
                    </use>
                </svg>
                Contenuto
            </h2>
            <div class="settings-key mb-4">
                {{ $siteSetting->key }}
            </div>
            <p class="detail-copy">
                {{ $siteSetting->value }}
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
                    Impostazione
                </h2>
                <dl class="detail-list">
                    <dt>
                        Chiave
                    </dt>
                    <dd class="settings-key">
                        {{ $siteSetting->key }}
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina impostazione
                    </h3>
                    <p>
                        Rimuovi questo contenuto dal tuo sito.
                    </p>
                    <form method="POST" action="{{ route('admin.site-settings.destroy', $siteSetting) }}" onsubmit="return confirm('Eliminare questa impostazione?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#trash">
                                </use>
                            </svg>
                            Elimina impostazione
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
