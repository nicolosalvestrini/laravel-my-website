@extends('admin.layouts.app')
@section('title', 'Messaggi')
@section('section', 'contact-messages')
@section('content')
@php
$requestTypeLabels = ['preventivo' => 'Preventivo', 'collaborazione' => 'Collaborazione', 'lavoro' => 'Lavoro', 'informazioni' => 'Informazioni', 'altro' => 'Altro'];
$unreadCount = $contactMessages->where('is_read', false)->count();
@endphp
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
        {{ $unreadCount }} da leggere
    </span>
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
                @forelse ($contactMessages as $contactMessage)
                    <tr>
                        <td>
                            <strong>
                                {{ $contactMessage->name }}
                            </strong>
                            <small>
                                {{ $contactMessage->email }}
                            </small>
                        </td>
                        <td>
                            <a href="{{ route('admin.contact-messages.show', $contactMessage) }}">
                                {{ Str::limit($contactMessage->message, 40) }}
                            </a>
                        </td>
                        <td>
                            <span class="badge badge-purple">
                                {{ $requestTypeLabels[$contactMessage->request_type] ?? $contactMessage->request_type }}
                            </span>
                        </td>
                        <td>
                            {{ $contactMessage->created_at->diffForHumans() }}
                        </td>
                        <td>
                            @if ($contactMessage->is_read)
                                <span class="badge badge-muted">
                                    Letto
                                </span>
                            @else
                                <span class="badge badge-blue">
                                    Da leggere
                                </span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.contact-messages.show', $contactMessage) }}" class="btn btn-outline-light btn-icon" aria-label="Leggi messaggio di {{ $contactMessage->name }}">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#arrow">
                                    </use>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            Nessun messaggio ancora.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-footer">
        <span>
            {{ $contactMessages->count() }} elementi
        </span>
    </div>
</div>
@endsection
