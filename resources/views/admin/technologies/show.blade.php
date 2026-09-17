@extends('admin.layouts.app')
@section('title', 'Dettaglio tecnologia')
@section('section', 'technologies')
@section('content')
<a href="{{ route('admin.technologies.index') }}" class="back-link">
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
            {{ $technology->name }}
        </h1>
        <p>
            Una competenza che prende forma nei tuoi progetti.
        </p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.technologies.edit', $technology) }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#edit">
            </use>
        </svg>
        Modifica
    </a>
</div>
<div class="form-grid">
    <div>
        <section class="card mb-4">
            <div class="card-body">
                <h2 class="form-section-title">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#code">
                        </use>
                    </svg>
                    La tecnologia
                </h2>
                <span class="icon-box mb-4">
                    <svg class="icon icon-lg" aria-hidden="true">
                        <use href="/admin-ui/icons.svg#{{ $technology->icon ?: 'code' }}">
                        </use>
                    </svg>
                </span>
                <h2>
                    {{ $technology->name }}
                </h2>
                <div class="d-flex gap-2 mt-3">
                    <span class="badge badge-blue">
                        {{ ucfirst($technology->type) }}
                    </span>
                    @if ($technology->show_in_skills)
                        <span class="badge badge-green">
                            Visibile nelle competenze
                        </span>
                    @endif
                </div>
            </div>
        </section>
        <div class="section-heading">
            <h2 class="section-title">
                Progetti associati
            </h2>
        </div>
        <div class="row g-3">
            @forelse ($technology->projects as $project)
                <div class="col-md-6">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <h3>
                                {{ $project->title }}
                            </h3>
                            <p>
                                {{ Str::limit($project->description, 90) }}
                            </p>
                            <div class="card-actions">
                                <a class="btn btn-outline-light btn-sm" href="{{ route('admin.projects.show', $project) }}">
                                    <svg class="icon " aria-hidden="true">
                                        <use href="/admin-ui/icons.svg#eye">
                                        </use>
                                    </svg>
                                    Dettaglio
                                </a>
                                <a class="btn btn-outline-light btn-icon" href="{{ route('admin.projects.edit', $project) }}" aria-label="Modifica {{ $project->title }}">
                                    <svg class="icon " aria-hidden="true">
                                        <use href="/admin-ui/icons.svg#edit">
                                        </use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-muted">
                        Nessun progetto usa ancora questa tecnologia.
                    </p>
                </div>
            @endforelse
        </div>
    </div>
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
                        Nome
                    </dt>
                    <dd>
                        {{ $technology->name }}
                    </dd>
                    <dt>
                        Tipo
                    </dt>
                    <dd>
                        {{ ucfirst($technology->type) }}
                    </dd>
                    <dt>
                        Ordine
                    </dt>
                    <dd>
                        {{ $technology->sort_order }}
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina tecnologia
                    </h3>
                    <p>
                        Rimuovi questo contenuto dal tuo sito.
                    </p>
                    <form method="POST" action="{{ route('admin.technologies.destroy', $technology) }}" onsubmit="return confirm('Eliminare questa tecnologia?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#trash">
                                </use>
                            </svg>
                            Elimina tecnologia
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
