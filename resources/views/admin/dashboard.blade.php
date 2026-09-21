@extends('admin.layouts.app')
@section('title', 'Panoramica')
@section('section', 'dashboard')
@section('content')
<div class="page-heading">
    <div>
        <div class="eyebrow">
            PANNELLO DI CONTROLLO
        </div>
        <h1 class="mb-0">
            Bentornato, {{ auth()->user()->name }}.
        </h1>
        <p>
            Tutto quello che serve per dare forma al tuo spazio online.
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
<section class="card welcome mb-4">
    <div class="eyebrow">
        IL TUO PORTFOLIO
    </div>
    <h2>
        Le tue idee, sempre
        <br>
        al centro.
    </h2>
    <p>
        Progetti, competenze e nuove opportunità.
        <br>
        Gestisci i contenuti che raccontano chi sei.
    </p>
    <a href="{{ route('admin.site-settings.index') }}" class="btn btn-outline-light btn-sm mt-1">
        Personalizza il sito
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#arrow">
            </use>
        </svg>
    </a>
    <div class="welcome-art" aria-hidden="true">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#code">
            </use>
        </svg>
    </div>
</section>
<div class="row g-3">
    <div class="col-6 col-xl-3">
        <div class="card stat-card h-100">
            <div>
                <div class="stat-label">
                    Progetti
                </div>
                <div class="stat-value">
                    {{ $projectsCount }}
                </div>
                <div class="stat-note">
                    Il tuo lavoro, in evidenza
                </div>
            </div>
            <span class="icon-box ">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#folder">
                    </use>
                </svg>
            </span>
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <div class="card stat-card h-100">
            <div>
                <div class="stat-label">
                    Servizi
                </div>
                <div class="stat-value">
                    {{ $servicesCount }}
                </div>
                <div class="stat-note">
                    Soluzioni che puoi offrire
                </div>
            </div>
            <span class="icon-box purple">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#globe">
                    </use>
                </svg>
            </span>
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <div class="card stat-card h-100">
            <div>
                <div class="stat-label">
                    Tecnologie
                </div>
                <div class="stat-value">
                    {{ $technologiesCount }}
                </div>
                <div class="stat-note">
                    Competenze da raccontare
                </div>
            </div>
            <span class="icon-box ">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#code">
                    </use>
                </svg>
            </span>
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <div class="card stat-card h-100">
            <div>
                <div class="stat-label">
                    Messaggi
                </div>
                <div class="stat-value">
                    {{ $unreadMessagesCount }}
                </div>
                <div class="stat-note">
                    Nuove conversazioni
                </div>
            </div>
            <span class="icon-box purple">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#mail">
                    </use>
                </svg>
            </span>
        </div>
    </div>
</div>
<div class="section-heading">
    <h2 class="section-title">
        Progetti in evidenza
    </h2>
    <a href="{{ route('admin.projects.index') }}">
        Vedi tutti &nbsp;
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#arrow">
            </use>
        </svg>
    </a>
</div>
<div class="row g-3">
    @forelse ($featuredProjects as $project)
        <div class="col-md-4">
            <div class="card project-card h-100">
                <div class="project-cover">
                    @if ($project->image_path)
                        <img src="{{ $project->image_url }}" alt="{{ $project->title }}" style="width:100%;height:100%;object-fit:cover">
                    @endif
                </div>
                <div class="card-body">
                    <h3>
                        {{ $project->title }}
                    </h3>
                    <p>
                        {{ Str::limit($project->description, 70) }}
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
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <p class="text-muted">
                Nessun progetto in evidenza ancora. Contrassegnane uno per mostrarlo qui.
            </p>
        </div>
    @endforelse
</div>
<div class="row g-4">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">
                Ultimi messaggi
            </h2>
            <a href="{{ route('admin.contact-messages.index') }}">
                Apri la casella &nbsp;
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#arrow">
                    </use>
                </svg>
            </a>
        </div>
        <div class="card">
            @forelse ($latestMessages as $message)
                <a class="message-row" href="{{ route('admin.contact-messages.show', $message) }}">
                    <span class="avatar">
                        {{ Str::of($message->name)->explode(' ')->map(fn ($p) => Str::substr($p, 0, 1))->take(2)->implode('') }}
                    </span>
                    <div class="message-content">
                        <div class="d-flex justify-content-between gap-2">
                            <h3>
                                {{ $message->name }}
                            </h3>
                            <time>
                                {{ $message->created_at->diffForHumans() }}
                            </time>
                        </div>
                        <p class="text-truncate">
                            {{ Str::limit($message->message, 60) }}
                        </p>
                    </div>
                </a>
            @empty
                <div class="card-body">
                    <p class="text-muted mb-0">
                        Nessun messaggio ricevuto ancora.
                    </p>
                </div>
            @endforelse
        </div>
    </div>
    <div class="col-lg-5">
        <div class="section-heading">
            <h2 class="section-title">
                Dai spazio alle tue idee
            </h2>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.experiences.create') }}" class="quick-link">
                    <span class="icon-box purple">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#briefcase">
                            </use>
                        </svg>
                    </span>
                    <span>
                        Aggiungi un’esperienza
                        <small>
                            Arricchisci il tuo percorso
                        </small>
                    </span>
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#arrow">
                        </use>
                    </svg>
                </a>
                <a href="{{ route('admin.services.create') }}" class="quick-link">
                    <span class="icon-box purple">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#globe">
                            </use>
                        </svg>
                    </span>
                    <span>
                        Racconta un nuovo servizio
                        <small>
                            Metti in luce ciò che sai fare
                        </small>
                    </span>
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#arrow">
                        </use>
                    </svg>
                </a>
                <a href="{{ route('admin.site-settings.index') }}" class="quick-link">
                    <span class="icon-box purple">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#settings">
                            </use>
                        </svg>
                    </span>
                    <span>
                        Aggiorna le impostazioni
                        <small>
                            Rendi il sito ancora più tuo
                        </small>
                    </span>
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#arrow">
                        </use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
