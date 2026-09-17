@extends('admin.layouts.app')
@section('title', 'Tecnologie')
@section('section', 'technologies')
@section('content')
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            Le tue tecnologie
        </h1>
        <p>
            Le competenze che danno vita ai tuoi progetti.
        </p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.technologies.create') }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#plus">
            </use>
        </svg>
        Nuova tecnologia
    </a>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        Tecnologia
                    </th>
                    <th scope="col">
                        Tipo
                    </th>
                    <th scope="col">
                        Nelle competenze
                    </th>
                    <th scope="col">
                        Ordine
                    </th>
                    <th scope="col">
                        <span class="visually-hidden">
                            Azioni
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($technologies as $technology)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <span class="icon-box">
                                    <svg class="icon " aria-hidden="true">
                                        <use href="/admin-ui/icons.svg#{{ $technology->icon ?: 'code' }}">
                                        </use>
                                    </svg>
                                </span>
                                <strong>
                                    {{ $technology->name }}
                                </strong>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-purple">
                                {{ ucfirst($technology->type) }}
                            </span>
                        </td>
                        <td>
                            @if ($technology->show_in_skills)
                                <span class="badge badge-green">
                                    Sì
                                </span>
                            @else
                                <span class="badge badge-muted">
                                    No
                                </span>
                            @endif
                        </td>
                        <td>
                            {{ str_pad($technology->sort_order, 2, '0', STR_PAD_LEFT) }}
                        </td>
                        <td>
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('admin.technologies.show', $technology) }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                    <svg class="icon " aria-hidden="true">
                                        <use href="/admin-ui/icons.svg#eye">
                                        </use>
                                    </svg>
                                </a>
                                <a href="{{ route('admin.technologies.edit', $technology) }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                                    <svg class="icon " aria-hidden="true">
                                        <use href="/admin-ui/icons.svg#edit">
                                        </use>
                                    </svg>
                                </a>
                                <form method="POST" action="{{ route('admin.technologies.destroy', $technology) }}" onsubmit="return confirm('Eliminare questa tecnologia?');">
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
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            Nessuna tecnologia ancora.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-footer">
        <span>
            {{ $technologies->count() }} elementi
        </span>
    </div>
</div>
@endsection
