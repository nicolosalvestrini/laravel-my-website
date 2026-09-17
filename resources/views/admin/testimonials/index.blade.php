@extends('admin.layouts.app')
@section('title', 'Testimonianze')
@section('section', 'testimonials')
@section('content')
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            Le parole di chi ti sceglie
        </h1>
        <p>
            Raccogli le testimonianze e scegli quali mostrare sul sito.
        </p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.testimonials.create') }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#plus">
            </use>
        </svg>
        Nuova testimonianza
    </a>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="row g-4">
    @forelse ($testimonials as $testimonial)
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <span class="avatar">
                                {{ Str::of($testimonial->author_name)->explode(' ')->map(fn ($p) => Str::substr($p, 0, 1))->take(2)->implode('') }}
                            </span>
                            <div>
                                <h3 class="mb-1">
                                    {{ $testimonial->author_name }}
                                </h3>
                                <small class="text-muted">
                                    {{ $testimonial->author_role ?: '—' }}
                                </small>
                            </div>
                        </div>
                        @if ($testimonial->is_published)
                            <span class="badge badge-green">
                                Pubblicata
                            </span>
                        @else
                            <span class="badge badge-muted">
                                Bozza
                            </span>
                        @endif
                    </div>
                    @if ($testimonial->rating)
                        <div class="rating" aria-label="{{ $testimonial->rating }} su 5">
                            {{ str_repeat('★', $testimonial->rating) }}{{ str_repeat('☆', 5 - $testimonial->rating) }}
                        </div>
                    @endif
                    <p class="quote mt-3">
                        “{{ Str::limit($testimonial->message, 140) }}”
                    </p>
                    <div class="card-actions">
                        <div class="d-flex gap-2 justify-content-end w-100">
                            <a href="{{ route('admin.testimonials.show', $testimonial) }}" class="btn btn-outline-light btn-icon" aria-label="Visualizza dettaglio">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#eye">
                                    </use>
                                </svg>
                            </a>
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-outline-light btn-icon" aria-label="Modifica">
                                <svg class="icon " aria-hidden="true">
                                    <use href="/admin-ui/icons.svg#edit">
                                    </use>
                                </svg>
                            </a>
                            <form method="POST" action="{{ route('admin.testimonials.destroy', $testimonial) }}" onsubmit="return confirm('Eliminare questa testimonianza?');">
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
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="empty-state">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#message">
                    </use>
                </svg>
                <h3>
                    Ogni collaborazione ha una storia.
                </h3>
                <p>
                    Le testimonianze pubblicate troveranno spazio nella sezione “Cosa dicono di me”.
                </p>
            </div>
        </div>
    @endforelse
</div>
@endsection
