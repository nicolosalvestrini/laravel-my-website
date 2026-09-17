<h2 class="form-section-title">
    <svg class="icon " aria-hidden="true">
        <use href="/admin-ui/icons.svg#lock">
        </use>
    </svg>
    Cambia password
</h2>
<p class="form-text mb-4">
    Usa una password lunga e casuale per proteggere il tuo accesso.
</p>

@if (session('status') === 'password-updated')
    <div class="alert alert-success">
        Salvato.
    </div>
@endif

<form method="post" action="{{ route('password.update') }}">
    @csrf
    @method('put')

    <div class="mb-4">
        <label class="form-label" for="update_password_current_password">
            Password attuale
        </label>
        <input type="password" class="form-control" id="update_password_current_password" name="current_password" autocomplete="current-password">
        @error('current_password', 'updatePassword')
            <div class="form-text text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-4">
        <label class="form-label" for="update_password_password">
            Nuova password
        </label>
        <input type="password" class="form-control" id="update_password_password" name="password" autocomplete="new-password">
        @error('password', 'updatePassword')
            <div class="form-text text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-4">
        <label class="form-label" for="update_password_password_confirmation">
            Conferma nuova password
        </label>
        <input type="password" class="form-control" id="update_password_password_confirmation" name="password_confirmation" autocomplete="new-password">
        @error('password_confirmation', 'updatePassword')
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
