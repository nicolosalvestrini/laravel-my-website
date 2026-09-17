@extends('admin.layouts.app')
@section('title', 'Dettaglio esperienza')
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
            {{ $experience->title }}
        </h1>
        <p>
            Un capitolo del tuo percorso professionale.
        </p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.experiences.edit', $experience) }}">
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
                    <use href="/admin-ui/icons.svg#briefcase">
                    </use>
                </svg>
                Il percorso
            </h2>
            <span class="badge {{ $experience->type === 'formazione' ? 'badge-purple' : 'badge-blue' }}">
                {{ ucfirst($experience->type) }}
            </span>
            <h2 class="mt-4">
                {{ $experience->title }}
            </h2>
            <p class="detail-copy mt-3">
                {{ $experience->description }}
            </p>
        </div>
    </section>
    <aside>
        <section class="card mb-4">
            <div class="card-body">
                <h2 class="form-section-title">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#file">
                        </use>
                    </svg>
                    Periodo e posizione
                </h2>
                <dl class="detail-list">
                    <dt>
                        Data di inizio
                    </dt>
                    <dd>
                        {{ $experience->period_start->translatedFormat('j F Y') }}
                    </dd>
                    <dt>
                        Data di fine
                    </dt>
                    <dd>
                        {{ $experience->period_end ? $experience->period_end->translatedFormat('j F Y') : 'In corso' }}
                    </dd>
                    <dt>
                        Ordine
                    </dt>
                    <dd>
                        {{ $experience->sort_order }}
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina esperienza
                    </h3>
                    <p>
                        Rimuovi questo contenuto dal tuo sito.
                    </p>
                    <form method="POST" action="{{ route('admin.experiences.destroy', $experience) }}" onsubmit="return confirm('Eliminare questa esperienza?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#trash">
                                </use>
                            </svg>
                            Elimina esperienza
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
