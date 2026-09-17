<h2 class="form-section-title">
    <svg class="icon " aria-hidden="true">
        <use href="/admin-ui/icons.svg#trash">
        </use>
    </svg>
    Elimina account
</h2>
<p class="form-text mb-4">
    Una volta eliminato, l'accesso al pannello non sarà più possibile. Questa azione è irreversibile.
</p>

<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
    Elimina account
</button>

<div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')
                <div class="modal-header">
                    <h2 class="modal-title fs-6" id="deleteAccountModalLabel">
                        Confermi l'eliminazione dell'account?
                    </h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
                </div>
                <div class="modal-body">
                    <p class="form-text">
                        Inserisci la password per confermare. L'operazione non può essere annullata.
                    </p>
                    <label class="form-label" for="delete_password">
                        Password
                    </label>
                    <input type="password" class="form-control" id="delete_password" name="password" placeholder="Password">
                    @error('password', 'userDeletion')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">
                        Annulla
                    </button>
                    <button type="submit" class="btn btn-danger">
                        Elimina definitivamente
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
