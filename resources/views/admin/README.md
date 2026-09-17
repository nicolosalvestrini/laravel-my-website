# Grafica admin NS Web Craft

Viste Blade statiche in stile NS Web Craft: blu notte, bordi sottili, accenti blu e viola. Bootstrap locale per griglia responsive, form, tabelle e menu mobile. Nessun servizio esterno, CDN, database o controller richiesto dall'anteprima.

## Pagine

- `dashboard.blade.php`: panoramica.
- `auth/login.blade.php`: grafica di accesso.
- `projects`, `technologies`, `services`, `experiences`, `testimonials`, `site-settings`: index, create, show, edit.
- `contact-messages`: index e show.
- `layouts/app.blade.php`: layout condiviso.
- `partials/navigation.blade.php`: navigazione desktop e mobile.

Le directory delle viste corrispondono ai nomi già richiamati dai controller. Tutti i dati presenti sono dimostrativi. Le associazioni e i conteggi non sono reali.

## Collegamento della logica

Ogni punto da implementare è indicato dal commento Blade esatto:

```blade
{{-- scrivere qui la logica --}}
```

I commenti precedono contenuti da sostituire con dati reali, elenchi da trasformare in cicli, valori dei form, link, filtri, paginazione e azioni. `@extends`, `@section`, `@yield`, `@include` e `asset()` servono soltanto alla presentazione.

I form non inviano dati (`onsubmit="return false"`); salvataggi, eliminazioni, login, logout e risposta ai messaggi sono disabilitati. Per integrarli, aggiungere action, method, CSRF, eventuale method spoofing, errori di validazione, `old()` e valori del modello. Rimuovere il blocco di invio e abilitare i pulsanti solo quando le azioni sono pronte. Per le checkbox booleane aggiungere la gestione del valore non selezionato. I campi e gli ID delle tecnologie sono segnaposto.

I collegamenti usano il prefisso `$adminBasePath` (predefinito `/admin`, oppure `/admin-preview` nell'anteprima Laravel), con `/1` come ID dimostrativo: sostituirli con le proprie rotte e gli ID reali quando si collega la logica. Il menu evidenzia la sezione tramite `@section('section')` e CSS. Filtri e ricerca mostrano solo l'interfaccia. Il menu mobile usa il componente offcanvas di Bootstrap.

Controller e modelli non sono stati modificati. Le rotte operative `/admin` mantengono i middleware `auth` e `admin` già impostati dall'utente; sono state aggiunte dashboard, esperienze e messaggi. Login e middleware `admin` devono ancora essere implementati: l'accesso qui presente è una semplice vista.

## Anteprima con Laravel

Con `APP_ENV=local`, avviare `php artisan serve` e aprire `http://127.0.0.1:8000/admin-preview`. Tutte le pagine sono registrate con `Route::view`, senza controller o dati reali. L'anteprima non usa la sessione del database e non espone salvataggi o eliminazioni. La grafica di accesso è disponibile su `/admin-preview/auth/login`.

Le rotte `/admin-preview` non vengono registrate in produzione. Le rotte operative `/admin` restano separate e protette.

## Anteprima locale senza logica applicativa

Dalla cartella Laravel:

```powershell
php tools/admin-preview/render.php
php -S 127.0.0.1:8085 -t public tools/admin-preview/router.php
```

Aprire `http://127.0.0.1:8085/admin`. Il renderer compila le Blade in HTML statico e il router di anteprima serve soltanto quei file e gli asset: non aggiunge rotte pubbliche all'applicazione e non esegue operazioni sul database. Ripetere il render dopo aver modificato le viste. Interrompere il server con Ctrl+C.

## Stile

- CSS del tema: `public/admin-ui/admin.css`.
- Icone SVG locali: `public/admin-ui/icons.svg`.
- Bootstrap CSS e bundle JS: `public/admin-ui/vendor/`, copiati dalla versione già installata in `node_modules/bootstrap` (licenza MIT nei file distribuiti).

Il tema non dipende da Vite. Non vengono caricate immagini esterne: copertine e avatar sono dimostrativi e sostituibili. L'immagine di riferimento ha guidato colori, tipografia, bordi, pulsanti e pannelli; la composizione è adattata alle funzioni dell'admin.
