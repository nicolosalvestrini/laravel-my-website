<h2 class="form-section-title">
    <svg class="icon " aria-hidden="true">
        <use href="/admin-ui/icons.svg#user">
        </use>
    </svg>
    Informazioni account
</h2>
<p class="form-text mb-4">
    Aggiorna il nome e l'email con cui accedi al pannello.
</p>

@if (session('status') === 'profile-updated')
    <div class="alert alert-success">
        Salvato.
    </div>
@endif

<form method="post" action="{{ route('profile.update') }}">
    @csrf
    @method('patch')

    <div class="mb-4">
        <label class="form-label" for="name">
            Nome
        </label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
        @error('name')
            <div class="form-text text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-4">
        <label class="form-label" for="email">
            Email
        </label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="username">
        @error('email')
            <div class="form-text text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">
        <svg class="icon " aria-hidden="true">
            <use href="/admin-ui/icons.svg#save">
            </use>
        </svg>
        Salva
    </button>
</form>
