@extends('admin.layouts.app')
@section('title', 'Messaggi')
@section('section', 'contact-messages')
@section('content')
{{-- scrivere qui la logica --}}
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            Nuove conversazioni
        </h1>
        <p>
            Progetti, collaborazioni e opportunità: tutto parte da un messaggio.
        </p>
    </div>
    <span class="badge badge-blue">
        3 da leggere
    </span>
</div>
<div class="toolbar">
    {{-- scrivere qui la logica --}}
    <div class="search-box">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#search">
            </use>
        </svg>
        <input class="form-control" type="search" aria-label="Cerca per nome o email…" placeholder="Cerca per nome o email…">
    </div>
    <select class="form-select" aria-label="Filtra elenco">
        <option>
            Tutti i messaggi
        </option>
        <option>
            Da leggere
        </option>
        <option>
            Letti
        </option>
    </select>
</div>
<div class="card">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        Mittente
                    </th>
                    <th scope="col">
                        Messaggio
                    </th>
                    <th scope="col">
                        Richiesta
                    </th>
                    <th scope="col">
                        Ricevuto
                    </th>
                    <th scope="col">
                        Stato
                    </th>
                    <th scope="col">
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- scrivere qui la logica --}}
                <tr>
                    <td>
                        <strong>
                            Marco Rossi
                        </strong>
                        <small>
                            marco@example.com
                        </small>
                    </td>
                    <td>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/contact-messages/1' }}">
                            Un nuovo sito per la mia attività
                        </a>
                        <small>
                            Vorrei raccontarti il mio progetto…
                        </small>
                    </td>
                    <td>
                        <span class="badge badge-purple">
                            Preventivo
                        </span>
                    </td>
                    <td>
                        10:42
                    </td>
                    <td>
                        <span class="badge badge-blue">
                            Da leggere
                        </span>
                    </td>
                    <td>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/contact-messages/1' }}" class="btn btn-outline-light btn-icon" aria-label="Leggi messaggio di Marco Rossi">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#arrow">
                                </use>
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>
                            Laura Bianchi
                        </strong>
                        <small>
                            laura@example.com
                        </small>
                    </td>
                    <td>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/contact-messages/1' }}">
                            Una possibile collaborazione
                        </a>
                        <small>
                            Ho visto il tuo portfolio e mi piacerebbe…
                        </small>
                    </td>
                    <td>
                        <span class="badge badge-purple">
                            Collaborazione
                        </span>
                    </td>
                    <td>
                        Ieri
                    </td>
                    <td>
                        <span class="badge badge-blue">
                            Da leggere
                        </span>
                    </td>
                    <td>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/contact-messages/1' }}" class="btn btn-outline-light btn-icon" aria-label="Leggi messaggio di Laura Bianchi">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#arrow">
                                </use>
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>
                            Andrea Verdi
                        </strong>
                        <small>
                            andrea@example.com
                        </small>
                    </td>
                    <td>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/contact-messages/1' }}">
                            Informazioni sui tuoi servizi
                        </a>
                        <small>
                            Ciao Nicolò, avrei bisogno di una landing…
                        </small>
                    </td>
                    <td>
                        <span class="badge badge-purple">
                            Informazioni
                        </span>
                    </td>
                    <td>
                        Ieri
                    </td>
                    <td>
                        <span class="badge badge-blue">
                            Da leggere
                        </span>
                    </td>
                    <td>
                        <a href="{{ ($adminBasePath ?? '/admin') . '/contact-messages/1' }}" class="btn btn-outline-light btn-icon" aria-label="Leggi messaggio di Andrea Verdi">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#arrow">
                                </use>
                            </svg>
                        </a>
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
@endsection
