@extends('admin.layouts.app')
@section('title', 'Impostazioni sito')
@section('section', 'site-settings')
@section('content')
{{-- scrivere qui la logica --}}
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
    {{-- scrivere qui la logica --}}
    <a class="btn btn-primary" href="{{ ($adminBasePath ?? '/admin') . '/site-settings/create' }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#plus">
            </use>
        </svg>
        Nuova impostazione
    </a>
</div>
<div class="toolbar">
    {{-- scrivere qui la logica --}}
    <div class="search-box">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#search">
            </use>
        </svg>
        <input class="form-control" type="search" aria-label="Cerca un’impostazione…" placeholder="Cerca un’impostazione…">
    </div>
    <select class="form-select" aria-label="Filtra elenco">
        <option>
            Tutti
        </option>
    </select>
</div>
<div class="card">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        Impostazione
                    </th>
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
                {{-- scrivere qui la logica --}}
                <tr>
                    <td>
                        <strong>
                            Titolo principale
                        </strong>
                    </td>
                    <td>
                        <span class="settings-key">
                            hero_title
                        </span>
                    </td>
                    <td>
                        <div style="max-width:320px" class="text-truncate">
                            Ciao, sono Nicolò. Creo esperienze web moderne e funzionali.
                        </div>
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
                            Sottotitolo
                        </strong>
                    </td>
                    <td>
                        <span class="settings-key">
                            hero_subtitle
                        </span>
                    </td>
                    <td>
                        <div style="max-width:320px" class="text-truncate">
                            Sono un Junior Full Stack Web Developer.
                        </div>
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
                            Disponibilità
                        </strong>
                    </td>
                    <td>
                        <span class="settings-key">
                            availability_status
                        </span>
                    </td>
                    <td>
                        <div style="max-width:320px" class="text-truncate">
                            Disponibile per opportunità lavorative e progetti freelance
                        </div>
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
                            Chi sono
                        </strong>
                    </td>
                    <td>
                        <span class="settings-key">
                            about_text
                        </span>
                    </td>
                    <td>
                        <div style="max-width:320px" class="text-truncate">
                            Il mio percorso, la mia curiosità e la passione per il web.
                        </div>
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
                            LinkedIn
                        </strong>
                    </td>
                    <td>
                        <span class="settings-key">
                            linkedin_url
                        </span>
                    </td>
                    <td>
                        <div style="max-width:320px" class="text-truncate">
                            https://www.linkedin.com/in/esempio
                        </div>
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
                            GitHub
                        </strong>
                    </td>
                    <td>
                        <span class="settings-key">
                            github_url
                        </span>
                    </td>
                    <td>
                        <div style="max-width:320px" class="text-truncate">
                            https://github.com/esempio
                        </div>
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
                            Email di contatto
                        </strong>
                    </td>
                    <td>
                        <span class="settings-key">
                            contact_email
                        </span>
                    </td>
                    <td>
                        <div style="max-width:320px" class="text-truncate">
                            ciao@example.com
                        </div>
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
                            Curriculum PDF
                        </strong>
                    </td>
                    <td>
                        <span class="settings-key">
                            cv_file_path
                        </span>
                    </td>
                    <td>
                        <div style="max-width:320px" class="text-truncate">
                            curriculum/cv.pdf
                        </div>
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
                            Aggiornamento CV
                        </strong>
                    </td>
                    <td>
                        <span class="settings-key">
                            cv_updated_at
                        </span>
                    </td>
                    <td>
                        <div style="max-width:320px" class="text-truncate">
                            Settembre 2026
                        </div>
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            {{-- scrivere qui la logica --}}
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1' }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ ($adminBasePath ?? '/admin') . '/site-settings/1/edit' }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
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
            9 elementi · pagina 1 di 1
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
