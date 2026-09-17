@extends('admin.layouts.app')
@section('title', 'Servizi')
@section('section', 'services')
@section('content')
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            I tuoi servizi
        </h1>
        <p>
            Mostra come puoi trasformare un’idea in un progetto concreto.
        </p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.services.create') }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#plus">
            </use>
        </svg>
        Nuovo servizio
    </a>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="row g-4">
    @forelse ($services as $service)
        <div class="col-md-6 col-xl-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-4">
                        <span class="icon-box purple">
                            <svg class="icon icon-lg" aria-hidden="true">
                                <use href="/admin-ui/icons.svg#{{ $service->icon ?: 'globe' }}">
                                </use>
                            </svg>
                        </span>
                        <small class="text-muted">
                            {{ str_pad($service->sort_order, 2, '0', STR_PAD_LEFT) }}
                        </small>
                    </div>
                    <h3>
                        {{ $service->title }}
                    </h3>
                    <p class="small mt-3">
                        {{ Str::limit($service->description, 100) }}
                    </p>
                    <div class="card-actions">
                        <span class="text-muted small">
                            Ordine {{ $service->sort_order }}
                        </span>
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="{{ route('admin.services.show', $service) }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#edit">
                                    </use>
                                </svg>
                            </a>
                            <form method="POST" action="{{ route('admin.services.destroy', $service) }}" onsubmit="return confirm('Eliminare questo servizio?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-icon" aria-label="Elimina">
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
        </div>
    @empty
        <div class="col-12">
            <div class="empty-state">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#globe">
                    </use>
                </svg>
                <h3>
                    Nessun servizio ancora.
                </h3>
                <p>
                    Aggiungi il primo servizio che offri ai tuoi clienti.
                </p>
            </div>
        </div>
    @endforelse
</div>
@endsection
