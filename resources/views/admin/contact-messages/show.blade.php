@extends('admin.layouts.app')
@section('title', 'Dettaglio messaggio')
@section('section', 'contact-messages')
@section('content')
@php
$requestTypeLabels = ['preventivo' => 'Preventivo', 'collaborazione' => 'Collaborazione', 'lavoro' => 'Lavoro', 'informazioni' => 'Informazioni', 'altro' => 'Altro'];
@endphp
<a href="{{ route('admin.contact-messages.index') }}" class="back-link">
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
            {{ $contactMessage->name }}
        </h1>
        <p>
            Una nuova opportunità da conoscere.
        </p>
    </div>
    @if ($contactMessage->is_read)
        <span class="badge badge-muted">
            Letto
        </span>
    @else
        <span class="badge badge-blue">
            Da leggere
        </span>
    @endif
</div>
<div class="form-grid">
    <section class="card">
        <div class="card-header d-flex align-items-center gap-3">
            <span class="avatar">
                {{ Str::of($contactMessage->name)->explode(' ')->map(fn ($p) => Str::substr($p, 0, 1))->take(2)->implode('') }}
            </span>
            <div>
                <strong>
                    {{ $contactMessage->name }}
                </strong>
                <div class="text-muted small">
                    {{ $contactMessage->email }}
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="detail-copy">
                {{ $contactMessage->message }}
            </p>
            <div class="form-actions">
                <a class="btn btn-primary" href="mailto:{{ $contactMessage->email }}">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#mail">
                        </use>
                    </svg>
                    Rispondi via email
                </a>
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
                        {{ $contactMessage->name }}
                    </dd>
                    <dt>
                        Email
                    </dt>
                    <dd>
                        {{ $contactMessage->email }}
                    </dd>
                    <dt>
                        Tipo di richiesta
                    </dt>
                    <dd>
                        <span class="badge badge-purple">
                            {{ $requestTypeLabels[$contactMessage->request_type] ?? $contactMessage->request_type }}
                        </span>
                    </dd>
                    <dt>
                        Ricevuto
                    </dt>
                    <dd>
                        {{ $contactMessage->created_at->translatedFormat('j F Y, H:i') }}
                    </dd>
                    <dt>
                        Stato
                    </dt>
                    <dd>
                        @if ($contactMessage->is_read)
                            <span class="badge badge-muted">
                                Letto
                            </span>
                        @else
                            <span class="badge badge-blue">
                                Da leggere
                            </span>
                        @endif
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina messaggio
                    </h3>
                    <p>
                        Rimuovi questo contenuto dal tuo sito.
                    </p>
                    <form method="POST" action="{{ route('admin.contact-messages.destroy', $contactMessage) }}" onsubmit="return confirm('Eliminare questo messaggio?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#trash">
                                </use>
                            </svg>
                            Elimina messaggio
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
