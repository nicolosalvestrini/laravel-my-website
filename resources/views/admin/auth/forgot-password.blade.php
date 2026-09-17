@extends('admin.layouts.guest')

@section('title', 'Recupera password')

@section('content')
    <span class="icon-box purple mb-4">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#mail">
            </use>
        </svg>
    </span>
    <div class="eyebrow">
        RECUPERO ACCESSO
    </div>
    <h1>
        Password dimenticata?
    </h1>
    <p class="small mb-4">
        Inserisci la tua email: ti invieremo un link per scegliere una nuova password.
    </p>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
        <div class="mb-4">
            <label class="form-label" for="email">
                Email
            </label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        <button class="btn btn-primary w-100" type="submit">
            Invia link di reset
            <svg class="icon " aria-hidden="true">
                <use href="/admin-ui/icons.svg#arrow">
                </use>
            </svg>
        </button>
    </form>
    <p class="text-center form-text mt-3 mb-0">
        <a href="{{ route('login') }}">
            Torna al login
        </a>
    </p>
@endsection
