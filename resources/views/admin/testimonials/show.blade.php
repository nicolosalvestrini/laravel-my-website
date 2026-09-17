@extends('admin.layouts.app')
@section('title', 'Dettaglio testimonianza')
@section('section', 'testimonials')
@section('content')
<a href="{{ route('admin.testimonials.index') }}" class="back-link">
    <svg class="icon " aria-hidden="true">
        <use href="/admin-ui/icons.svg#back">
        </use>
    </svg>
    Torna all’elenco
</a>
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO SITO, UN PASSO ALLA VOLTA
        </div>
        <h1 class="mb-0">
            La testimonianza di {{ $testimonial->author_name }}
        </h1>
        <p>
            Le parole che raccontano una collaborazione.
        </p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.testimonials.edit', $testimonial) }}">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#edit">
            </use>
        </svg>
        Modifica
    </a>
</div>
<div class="form-grid">
    <section class="card mb-4">
        <div class="card-body">
            <h2 class="form-section-title">
                <svg class="icon " aria-hidden="true">
                    <use href="/admin-ui/icons.svg#message">
                    </use>
                </svg>
                Testimonianza
            </h2>
            <div class="d-flex align-items-center gap-3 mb-4">
                @if ($testimonial->avatar_path)
                    <img src="{{ $testimonial->avatar_url }}" alt="{{ $testimonial->author_name }}" style="width:48px;height:48px;border-radius:50%;object-fit:cover">
                @else
                    <span class="avatar">
                        {{ Str::of($testimonial->author_name)->explode(' ')->map(fn ($p) => Str::substr($p, 0, 1))->take(2)->implode('') }}
                    </span>
                @endif
                <div>
                    <h3 class="mb-1">
                        {{ $testimonial->author_name }}
                    </h3>
                    <span class="text-muted small">
                        {{ $testimonial->author_role ?: '—' }}
                    </span>
                </div>
            </div>
            @if ($testimonial->rating)
                <div class="rating" aria-label="{{ $testimonial->rating }} su 5">
                    {{ str_repeat('★', $testimonial->rating) }}{{ str_repeat('☆', 5 - $testimonial->rating) }}
                </div>
            @endif
            <blockquote class="quote mt-3">
                “{{ $testimonial->message }}”
            </blockquote>
        </div>
    </section>
    <aside>
        <section class="card mb-4">
            <div class="card-body">
                <h2 class="form-section-title">
                    <svg class="icon " aria-hidden="true">
                        <use href="/admin-ui/icons.svg#eye">
                        </use>
                    </svg>
                    Pubblicazione
                </h2>
                @if ($testimonial->is_published)
                    <span class="badge badge-green">
                        Pubblicata
                    </span>
                @else
                    <span class="badge badge-muted">
                        Bozza
                    </span>
                @endif
                <dl class="detail-list mt-4">
                    <dt>
                        Valutazione
                    </dt>
                    <dd>
                        {{ $testimonial->rating ? $testimonial->rating . ' su 5' : 'Nessuna' }}
                    </dd>
                    <dt>
                        Autore
                    </dt>
                    <dd>
                        {{ $testimonial->author_name }}
                    </dd>
                </dl>
                <div class="danger-zone">
                    <h3 class="fs-6">
                        Elimina testimonianza
                    </h3>
                    <p>
                        Rimuovi questo contenuto dal tuo sito.
                    </p>
                    <form method="POST" action="{{ route('admin.testimonials.destroy', $testimonial) }}" onsubmit="return confirm('Eliminare questa testimonianza?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">
                            <svg class="icon " aria-hidden="true">
                                <use href="/admin-ui/icons.svg#trash">
                                </use>
                            </svg>
                            Elimina testimonianza
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection
