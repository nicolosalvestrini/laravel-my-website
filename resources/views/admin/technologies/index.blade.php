@extends('admin.layouts.app')
@section('title', 'Tecnologie')
@section('section', 'technologies')
@section('content')
{{-- scrivere qui la logica --}}
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
    {{-- scrivere qui la logica --}}
    <a class="btn btn-primary" href="{{ ($adminBasePath ?? '/admin') . '/technologies/create' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#plus">
            </use>
        </svg>
        Nuova tecnologia
    </a>
</div>
<div class="toolbar">
    {{-- scrivere qui la logica --}}
    <div class="search-box">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#search">
            </use>
        </svg>
        <input class="form-control" type="search" aria-label="Cerca una tecnologia…" placeholder="Cerca una tecnologia…">
    </div>
    <select class="form-select" aria-label="Filtra elenco">
        <option>
            Tutti i tipi
        </option>
        <option>
            Frontend
        </option>
        <option>
            Backend
        </option>
        <option>
            Database
        </option>
        <option>
            DevOps
        </option>
        <option>
            Altro
        </option>
    </select>
</div>
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
                {{-- scrivere qui la logica --}}
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <span class="icon-box">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#atom">
                                    </use>
                                </svg>
                            </span>
                            <strong>
                                React
                            </strong>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-purple">
                            Frontend
                        </span>
                    </td>
                    <td>
                        <span class="badge badge-green">
                            Sì
                        </span>
                    </td>
                    <td>
                        01
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/technologies/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/technologies/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#edit">
                                    </use>
                                </svg>
                            </a>
                            <button type="button" class="btn btn-outline-danger btn-icon" disabled aria-label="Elimina (anteprima)">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#trash">
                                    </use>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <span class="icon-box">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#code">
                                    </use>
                                </svg>
                            </span>
                            <strong>
                                Laravel
                            </strong>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-purple">
                            Backend
                        </span>
                    </td>
                    <td>
                        <span class="badge badge-green">
                            Sì
                        </span>
                    </td>
                    <td>
                        02
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/technologies/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/technologies/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#edit">
                                    </use>
                                </svg>
                            </a>
                            <button type="button" class="btn btn-outline-danger btn-icon" disabled aria-label="Elimina (anteprima)">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#trash">
                                    </use>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <span class="icon-box">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#database">
                                    </use>
                                </svg>
                            </span>
                            <strong>
                                MySQL
                            </strong>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-purple">
                            Database
                        </span>
                    </td>
                    <td>
                        <span class="badge badge-green">
                            Sì
                        </span>
                    </td>
                    <td>
                        03
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/technologies/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/technologies/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#edit">
                                    </use>
                                </svg>
                            </a>
                            <button type="button" class="btn btn-outline-danger btn-icon" disabled aria-label="Elimina (anteprima)">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#trash">
                                    </use>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <span class="icon-box">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#code">
                                    </use>
                                </svg>
                            </span>
                            <strong>
                                JavaScript
                            </strong>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-purple">
                            Frontend
                        </span>
                    </td>
                    <td>
                        <span class="badge badge-green">
                            Sì
                        </span>
                    </td>
                    <td>
                        04
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/technologies/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/technologies/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#edit">
                                    </use>
                                </svg>
                            </a>
                            <button type="button" class="btn btn-outline-danger btn-icon" disabled aria-label="Elimina (anteprima)">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#trash">
                                    </use>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <span class="icon-box">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#monitor">
                                    </use>
                                </svg>
                            </span>
                            <strong>
                                Bootstrap
                            </strong>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-purple">
                            Frontend
                        </span>
                    </td>
                    <td>
                        <span class="badge badge-green">
                            Sì
                        </span>
                    </td>
                    <td>
                        05
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/technologies/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/technologies/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#edit">
                                    </use>
                                </svg>
                            </a>
                            <button type="button" class="btn btn-outline-danger btn-icon" disabled aria-label="Elimina (anteprima)">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#trash">
                                    </use>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <span class="icon-box">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#code">
                                    </use>
                                </svg>
                            </span>
                            <strong>
                                Git
                            </strong>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-purple">
                            DevOps
                        </span>
                    </td>
                    <td>
                        <span class="badge badge-muted">
                            No
                        </span>
                    </td>
                    <td>
                        06
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/technologies/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/technologies/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#edit">
                                    </use>
                                </svg>
                            </a>
                            <button type="button" class="btn btn-outline-danger btn-icon" disabled aria-label="Elimina (anteprima)">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#trash">
                                    </use>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="table-footer">
        <span>
            {{-- scrivere qui la logica --}}
            6 elementi · pagina 1 di 1
        </span>
        <nav aria-label="Paginazione">
            {{-- scrivere qui la logica --}}
            <ul class="pagination pagination-sm">
                <li class="page-item disabled">
                    <span class="page-link">
                        Precedente
                    </span>
                </li>
                <li class="page-item active" aria-current="page">
                    <span class="page-link">
                        1
                    </span>
                </li>
                <li class="page-item disabled">
                    <span class="page-link">
                        Successiva
                    </span>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
