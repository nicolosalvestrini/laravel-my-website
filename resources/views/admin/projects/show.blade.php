@extends('admin.layouts.app')
@section('title', 'Dettaglio progetto')
@section('section', 'projects')
@section('content')
<a href="{{ route('admin.projects.index') }}" class="back-link">
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
            {{ $project->title }}
        </h1>
        <p>
            Un progetto, tutte le sue informazioni.
        </p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.projects.edit', $project) }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#edit">
            </use>
        </svg>
        Modifica
    </a>
</div>

@php
$categoryLabels = ['frontend' => 'Frontend', 'backend' => 'Backend', 'fullstack' => 'Full Stack', 'database' => 'Database'];
@endphp

<div class="form-grid">
    <div>
        <div class="card mb-4">
            <div class="project-cover">
                @if ($project->image_path)
                    <img src="{{ $project->image_url }}" alt="{{ $project->title }}" style="width:100%;height:100%;object-fit:cover">
                @endif
            </div>
            <div class="card-body">
                <div class="d-flex gap-2 mb-3">
                    <span class="badge badge-purple">
                        {{ $categoryLabels[$project->category] ?? $project->category }}
                    </span>
                    @if ($project->is_featured)
                        <span class="badge badge-green">
                            In evidenza
                        </span>
                    @endif
                </div>
                <p class="detail-copy mt-3">
                    {{ $project->description }}
                </p>
                <div class="tags">
                    @foreach ($project->technologies as $technology)
                        <span class="badge badge-blue">
                            {{ $technology->name }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <aside>
        <section class="card mb-4">
            <div class="card-body">
                <h2 class="form-section-title">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#folder">
                        </use>
                    </svg>
                    Dettagli del progetto
                </h2>
                <dl class="detail-list">
                    <dt>
                        Slug
                    </dt>
                    <dd>
                        {{ $project->slug }}
                    </dd>
                    <dt>
                        Categoria
                    </dt>
                    <dd>
                        {{ $categoryLabels[$project->category] ?? $project->category }}
                    </dd>
                    <dt>
                        Ordine
                    </dt>
                    <dd>
                        {{ $project->sort_order }}
                    </dd>
                    <dt>
                        Demo
                    </dt>
                    <dd>
                        @if ($project->demo_url)
                            <a href="{{ $project->demo_url }}" target="_blank" rel="noopener">{{ $project->demo_url }}</a>
                        @else
                            —
                        @endif
                    </dd>
                    <dt>
                        Repository
                    </dt>
                    <dd>
                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" rel="noopener">{{ $project->github_url }}</a>
                        @else
                            —
                        @endif
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina progetto
                    </h3>
                    <p>
                        Rimuovi questo contenuto dal tuo sito.
                    </p>
                    <form method="POST" action="{{ route('admin.projects.destroy', $project) }}" onsubmit="return confirm('Eliminare questo progetto?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#trash">
                                </use>
                            </svg>
                            Elimina progetto
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
