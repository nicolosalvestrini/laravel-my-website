@extends('admin.layouts.guest')

@section('title', 'Nuova password')

@section('content')
    <span class="icon-box purple mb-4">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#lock">
            </use>
        </svg>
    </span>
    <div class="eyebrow">
        RECUPERO ACCESSO
    </div>
    <h1>
        Scegli una nuova password.
    </h1>
    <p class="small mb-4">
        Imposta la password che vuoi usare per accedere al pannello.
    </p>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="mb-4">
            <label class="form-label" for="email">
                Email
            </label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
        </div>
        <div class="mb-4">
            <label class="form-label" for="password">
                Nuova password
            </label>
            <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
        </div>
        <div class="mb-4">
            <label class="form-label" for="password_confirmation">
                Conferma password
            </label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
        </div>
        <button class="btn btn-primary w-100" type="submit">
            Reimposta password
            <svg class="icon " aria-hidden="true">
                <use href="/admin-ui/icons.svg#arrow">
                </use>
            </svg>
        </button>
    </form>
@endsection
