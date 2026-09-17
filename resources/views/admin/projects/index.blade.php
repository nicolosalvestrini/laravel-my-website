@extends('admin.layouts.app')
@section('title', 'Progetti')
@section('section', 'projects')
@section('content')
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            I tuoi progetti
        </h1>
        <p>
            Le esperienze digitali che raccontano il tuo lavoro.
        </p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#plus">
            </use>
        </svg>
        Nuovo progetto
    </a>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@php
$categoryLabels = ['frontend' => 'Frontend', 'backend' => 'Backend', 'fullstack' => 'Full Stack', 'database' => 'Database'];
@endphp

<div class="row g-4">
    @forelse ($projects as $project)
        <div class="col-md-6 col-xl-4">
            <div class="card project-card h-100">
                <div class="project-cover">
                    @if ($project->image_path)
                        <img src="{{ $project->image_url }}" alt="{{ $project->title }}" style="width:100%;height:100%;object-fit:cover">
                    @endif
                    <span class="badge badge-purple">
                        {{ $categoryLabels[$project->category] ?? $project->category }}
                    </span>
                </div>
                <div class="card-body">
                    <h3>
                        {{ $project->title }}
                    </h3>
                    <p>
                        {{ Str::limit($project->description, 90) }}
                    </p>
                    <div class="tags">
                        @foreach ($project->technologies as $technology)
                            <span class="badge badge-purple">
                                {{ $technology->name }}
                            </span>
                        @endforeach
                    </div>
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
                        <form method="POST" action="{{ route('admin.projects.destroy', $project) }}" onsubmit="return confirm('Eliminare questo progetto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-icon" aria-label="Elimina {{ $project->title }}">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#trash">
                                    </use>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="empty-state">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#folder">
                    </use>
                </svg>
                <h3>
                    Nessun progetto ancora.
                </h3>
                <p>
                    Aggiungi il primo progetto da mostrare nel portfolio.
                </p>
            </div>
        </div>
    @endforelse
</div>
@endsection
