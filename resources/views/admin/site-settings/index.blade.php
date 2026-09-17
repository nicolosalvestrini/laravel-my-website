@extends('admin.layouts.app')
@section('title', 'Impostazioni sito')
@section('section', 'site-settings')
@section('content')
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            Il sito, a modo tuo
        </h1>
        <p>
            Testi, contatti e collegamenti che danno voce alla tua identità.
        </p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.site-settings.create') }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#plus">
            </use>
        </svg>
        Nuova impostazione
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
                        Chiave
                    </th>
                    <th scope="col">
                        Valore
                    </th>
                    <th scope="col">
                        <span class="visually-hidden">
                            Azioni
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($siteSettings as $siteSetting)
                    <tr>
                        <td>
                            <span class="settings-key">
                                {{ $siteSetting->key }}
                            </span>
                        </td>
                        <td>
                            <div style="max-width:320px" class="text-truncate">
                                {{ $siteSetting->value }}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('admin.site-settings.show', $siteSetting) }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                    <svg class="icon " aria-hidden="true">
                                        <use href="/admin-ui/icons.svg#eye">
                                        </use>
                                    </svg>
                                </a>
                                <a href="{{ route('admin.site-settings.edit', $siteSetting) }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                                    <svg class="icon " aria-hidden="true">
                                        <use href="/admin-ui/icons.svg#edit">
                                        </use>
                                    </svg>
                                </a>
                                <form method="POST" action="{{ route('admin.site-settings.destroy', $siteSetting) }}" onsubmit="return confirm('Eliminare questa impostazione?');">
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
                        <td colspan="3" class="text-center text-muted py-4">
                            Nessuna impostazione ancora.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-footer">
        <span>
            {{ $siteSettings->count() }} elementi
        </span>
    </div>
</div>
@endsection
