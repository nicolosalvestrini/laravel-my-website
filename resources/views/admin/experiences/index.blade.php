@extends('admin.layouts.app')
@section('title', 'Esperienze')
@section('section', 'experiences')
@section('content')
{{-- scrivere qui la logica --}}
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
    {{-- scrivere qui la logica --}}
    <a class="btn btn-primary" href="{{ ($adminBasePath ?? '/admin') . '/experiences/create' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#plus">
            </use>
        </svg>
        Nuova esperienza
    </a>
</div>
<div class="toolbar">
    {{-- scrivere qui la logica --}}
    <div class="search-box">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#search">
            </use>
        </svg>
        <input class="form-control" type="search" aria-label="Cerca un’esperienza…" placeholder="Cerca un’esperienza…">
    </div>
    <select class="form-select" aria-label="Filtra elenco">
        <option>
            Tutti i tipi
        </option>
        <option>
            Formazione
        </option>
        <option>
            Esperienza
        </option>
    </select>
</div>
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
                {{-- scrivere qui la logica --}}
                <tr>
                    <td>
                        <strong>
                            Corso Full Stack Web Development
                        </strong>
                        <small>
                            Boolean · Formazione
                        </small>
                    </td>
                    <td>
                        <span class="badge badge-purple">
                            Formazione
                        </span>
                    </td>
                    <td>
                        2024 – 2025
                    </td>
                    <td>
                        01
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/experiences/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/experiences/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
                        <strong>
                            Responsabile bar / Bartender
                        </strong>
                        <small>
                            Coordinamento e gestione del servizio
                        </small>
                    </td>
                    <td>
                        <span class="badge badge-blue">
                            Esperienza
                        </span>
                    </td>
                    <td>
                        2025
                    </td>
                    <td>
                        02
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/experiences/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/experiences/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
                        <strong>
                            Esperienze nella ristorazione
                        </strong>
                        <small>
                            Accoglienza clienti e lavoro in team
                        </small>
                    </td>
                    <td>
                        <span class="badge badge-blue">
                            Esperienza
                        </span>
                    </td>
                    <td>
                        2021 – 2024
                    </td>
                    <td>
                        03
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/experiences/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/experiences/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
            3 elementi · pagina 1 di 1
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
<div class="section-heading">
    <h2 class="section-title">
        Il percorso sul tuo sito
    </h2>
</div>
<div class="card">
    <div class="card-body">
        <div class="timeline">
            <div class="timeline-item">
                <small>
                    2024 – 2025
                </small>
                <h3 class="mt-2">
                    Corso Full Stack Web Development
                </h3>
                <p>
                    Boolean · Formazione
                </p>
            </div>
            <div class="timeline-item">
                <small>
                    2025
                </small>
                <h3 class="mt-2">
                    Responsabile bar / Bartender
                </h3>
                <p>
                    Coordinamento e gestione del servizio
                </p>
            </div>
            <div class="timeline-item">
                <small>
                    2021 – 2024
                </small>
                <h3 class="mt-2">
                    Esperienze nella ristorazione
                </h3>
                <p>
                    Accoglienza clienti e lavoro in team
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
