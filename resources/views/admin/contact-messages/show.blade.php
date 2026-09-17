@extends('admin.layouts.app')
@section('title', 'Dettaglio messaggio')
@section('section', 'contact-messages')
@section('content')
{{-- scrivere qui la logica --}}
<a href="{{ ($adminBasePath ?? '/admin') . '/contact-messages' }}" class="back-link">
    <svg class="icon " aria-hidden="true">
        <use href="/admin-ui/icons.svg#back">
        </use>
    </svg>
    Torna ai messaggi
</a>
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            Un nuovo sito per la mia attività
        </h1>
        <p>
            Una nuova opportunità da conoscere.
        </p>
    </div>
    <span class="badge badge-blue">
        Da leggere
    </span>
</div>
<div class="form-grid">
    <section class="card">
        <div class="card-header d-flex align-items-center gap-3">
            <span class="avatar">
                MR
            </span>
            <div>
                <strong>
                    Marco Rossi
                </strong>
                <div class="text-muted small">
                    marco@example.com
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="detail-copy">
                Ciao Nicolò,
                <br>
                <br>
                ho visto il tuo portfolio e mi piacerebbe realizzare un nuovo sito per la mia attività. Cerco una soluzione moderna, semplice da consultare anche da smartphone, che presenti i servizi e permetta ai clienti di contattarmi.
                <br>
                <br>
                Mi farebbe piacere confrontarmi con te sui tempi e sulle possibilità.
                <br>
                <br>
                Grazie,
                <br>
                Marco
            </p>
            <div class="form-actions">
                {{-- scrivere qui la logica --}}
                <button class="btn btn-primary" type="button" disabled title="Anteprima grafica">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#mail">
                        </use>
                    </svg>
                    Rispondi via email
                </button>
            </div>
        </div>
    </section>
    <aside>
        <section class="card mb-4">
            <div class="card-body">
                <h2 class="form-section-title">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#mail">
                        </use>
                    </svg>
                    Informazioni sul contatto
                </h2>
                <dl class="detail-list">
                    <dt>
                        Nome e cognome
                    </dt>
                    <dd>
                        Marco Rossi
                    </dd>
                    <dt>
                        Email
                    </dt>
                    <dd>
                        marco@example.com
                    </dd>
                    <dt>
                        Tipo di richiesta
                    </dt>
                    <dd>
                        <span class="badge badge-purple">
                            Preventivo
                        </span>
                    </dd>
                    <dt>
                        Ricevuto
                    </dt>
                    <dd>
                        8 settembre 2026, 10:42
                    </dd>
                    <dt>
                        Stato
                    </dt>
                    <dd>
                        {{-- scrivere qui la logica --}}
                        <span class="badge badge-blue">
                            Da leggere
                        </span>
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina messaggio
                    </h3>
                    <p>
                        Rimuovi questo contenuto dal tuo sito.
                    </p>
                    {{-- scrivere qui la logica --}}
                    <button class="btn btn-outline-danger" type="button" disabled title="Anteprima grafica">
                        <svg class="icon " aria-hidden="true">
                            <use href="/admin-ui/icons.svg#trash">
                            </use>
                        </svg>
                        Elimina messaggio
                    </button>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
