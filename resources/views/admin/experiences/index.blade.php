@extends('admin.layouts.app')
@section('title', 'Esperienze')
@section('section', 'experiences')
@section('content')
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            Il tuo percorso
        </h1>
        <p>
            Formazione ed esperienze che raccontano la tua crescita.
        </p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.experiences.create') }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#plus">
            </use>
        </svg>
        Nuova esperienza
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
                        Titolo
                    </th>
                    <th scope="col">
                        Tipo
                    </th>
                    <th scope="col">
                        Periodo
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
                @forelse ($experiences as $experience)
                    <tr>
                        <td>
                            <strong>
                                {{ $experience->title }}
                            </strong>
                        </td>
                        <td>
                            <span class="badge {{ $experience->type === 'formazione' ? 'badge-purple' : 'badge-blue' }}">
                                {{ ucfirst($experience->type) }}
                            </span>
                        </td>
                        <td>
                            {{ $experience->period_start->format('Y') }}{{ $experience->period_end ? ' – ' . $experience->period_end->format('Y') : ' – oggi' }}
                        </td>
                        <td>
                            {{ str_pad($experience->sort_order, 2, '0', STR_PAD_LEFT) }}
                        </td>
                        <td>
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('admin.experiences.show', $experience) }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                    <svg class="icon " aria-hidden="true">
                                        <use href="/admin-ui/icons.svg#eye">
                                        </use>
                                    </svg>
                                </a>
                                <a href="{{ route('admin.experiences.edit', $experience) }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                                    <svg class="icon " aria-hidden="true">
                                        <use href="/admin-ui/icons.svg#edit">
                                        </use>
                                    </svg>
                                </a>
                                <form method="POST" action="{{ route('admin.experiences.destroy', $experience) }}" onsubmit="return confirm('Eliminare questa esperienza?');">
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
                            Nessuna esperienza ancora.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-footer">
        <span>
            {{ $experiences->count() }} elementi
        </span>
    </div>
</div>
@endsection
