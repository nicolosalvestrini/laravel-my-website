@extends('admin.layouts.app')

@section('title', 'Il tuo account')
@section('section', 'profile')

@section('content')
<a href="{{ route('admin.dashboard') }}" class="back-link">
    <svg class="icon " aria-hidden="true">
        <use href="/admin-ui/icons.svg#back">
        </use>
    </svg>
    Torna alla panoramica
</a>
<div class="page-heading">
    <div>
        <div class="eyebrow">
            IL TUO ACCOUNT
        </div>
        <h1 class="mb-0">
            Il tuo account
        </h1>
        <p>
            Gestisci i dati di accesso al pannello.
        </p>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-6">
        <section class="card mb-4">
            <div class="card-body">
                @include('profile.partials.update-profile-information-form')
            </div>
        </section>

        <section class="card mb-4">
            <div class="card-body">
                @include('profile.partials.delete-user-form')
            </div>
        </section>
    </div>

    <div class="col-lg-6">
        <section class="card mb-4">
            <div class="card-body">
                @include('profile.partials.update-password-form')
            </div>
        </section>
    </div>
</div>
@endsection
