<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

/**
 * Descrizioni dettagliate, funzionalità e galleria screenshot dei progetti.
 * Le immagini devono trovarsi in storage/app/public/projects/gallery:
 * quelle mancanti vengono saltate.
 */
class ProjectDetailsSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->projects() as $slug => $content) {
            $project = Project::where('slug', $slug)->first();

            if (! $project) {
                continue;
            }

            $project->update([
                'details' => $content['details'],
                'features' => implode("\n", $content['features']),
            ]);

            $order = 0;
            foreach ($content['gallery'] as [$file, $caption]) {
                $path = 'projects/gallery/' . $file;

                if (! Storage::disk('public')->exists($path)) {
                    continue;
                }

                $project->images()->updateOrCreate(
                    ['image_path' => $path],
                    ['caption' => $caption, 'sort_order' => ++$order]
                );
            }
        }
    }

    private function projects(): array
    {
        return [
            'lume-hospitality' => [
                'details' => "Lume Hospitality è un gestionale multi-locale per il settore hospitality: un sito pubblico per ciascun locale di una rete fittizia (ristoranti, wine bar, cocktail bar, beach club) e un'area riservata per gestire il lavoro quotidiano.\n\nIl progetto è nato per mettere alla prova un'applicazione completa: backend Node.js/Express con database MySQL, frontend React con più temi grafici (uno per locale) e moduli operativi come prenotazioni, mappa tavoli, magazzino, food cost, personale e CRM.\n\nÈ una demo a scopo portfolio: nomi, locali, persone, contatti e dati sono interamente inventati e non esiste alcun collegamento con attività reali.",
                'features' => [
                    'Sito pubblico per 7 locali, ciascuno con la propria identità visiva',
                    'Prenotazioni online con gestione capienza e lista d\'attesa',
                    'Mappa tavoli e assegnazione delle prenotazioni',
                    'Magazzino bar, cucina e cantina con carico e scarico',
                    'Food cost e ricette con margini per piatto',
                    'Personale e timbrature, chiusura cassa giornaliera',
                    'CRM con segmentazione clienti e campagne email automatiche',
                ],
                'gallery' => [
                    ['lume-1-sito-rubino.jpg', 'Sito pubblico del locale Rubino'],
                    ['lume-2-sito-nerea.jpg', 'Sito pubblico del locale Nerea, con un tema grafico diverso'],
                    ['lume-3-menu-vesper.jpg', 'Menu online del locale Vesper'],
                    ['lume-5-mappa-tavoli.jpg', 'Area riservata: mappa tavoli e assegnazioni'],
                    ['lume-6-food-cost.jpg', 'Area riservata: food cost e margini per piatto'],
                    ['lume-7-cantina.jpg', 'Area riservata: gestione della cantina vini'],
                    ['lume-10-magazzino.jpg', 'Area riservata: magazzino bar con carico e scarico'],
                ],
            ],

            'nexus-games-backend' => [
                'details' => "Il backend di Nexus Games è un'applicazione Laravel per gestire un catalogo di videogiochi. Ho progettato il database con relazioni molti-a-molti tra videogiochi, generi e piattaforme e ho costruito un pannello con CRUD completo protetto da autenticazione.\n\nLo stesso progetto espone anche un'API REST, con CORS configurato, che viene consumata dal frontend React (progetto Nexus Games – Frontend).",
                'features' => [
                    'CRUD di videogiochi, generi e piattaforme',
                    'Relazioni molti-a-molti tra giochi, generi e piattaforme',
                    'Caricamento delle copertine dei giochi',
                    'Accesso protetto da autenticazione',
                    'API REST con CORS per il frontend React',
                ],
                'gallery' => [
                    ['nexus-back-1-elenco.jpg', 'Elenco dei videogiochi con azioni di gestione'],
                    ['nexus-back-2-form.jpg', 'Form di creazione con generi e piattaforme'],
                    ['nexus-back-3-generi.jpg', 'Gestione dei generi con paginazione'],
                ],
            ],

            'nexus-games-frontend' => [
                'details' => "Il frontend di Nexus Games è una single page application in React che consuma l'API REST del backend Laravel. Mostra il catalogo dei videogiochi con ricerca e una pagina di dettaglio per ogni gioco, con generi, piattaforme, anno e valutazione.\n\nL'interfaccia è scura, costruita con Bootstrap e componenti React, e usa React Router per la navigazione tra elenco e dettaglio.",
                'features' => [
                    'Catalogo dei videogiochi con copertine',
                    'Ricerca per titolo',
                    'Pagina di dettaglio con generi, piattaforme e valutazione',
                    'Dati caricati dall\'API REST Laravel',
                    'Navigazione client-side con React Router',
                ],
                'gallery' => [
                    ['nexus-front-1-catalogo.jpg', 'Catalogo con ricerca'],
                    ['nexus-front-2-dettaglio.jpg', 'Pagina di dettaglio di un videogioco'],
                ],
            ],

            'laravel-portfolio-dashboard' => [
                'details' => "Una dashboard di amministrazione in Laravel per gestire i contenuti di un portfolio: progetti e tecnologie, con relazione molti-a-molti tra i due. L'accesso è protetto da autenticazione e le API sono protette con Sanctum.",
                'features' => [
                    'CRUD di progetti e tecnologie',
                    'Relazione molti-a-molti tra progetti e tecnologie',
                    'Autenticazione e API protette con Sanctum',
                    'Interfaccia con sidebar e layout responsive',
                ],
                'gallery' => [
                    ['dash-2-progetti.jpg', 'Elenco dei progetti con tecnologie associate'],
                    ['dash-3-tecnologie.jpg', 'Gestione delle tecnologie'],
                ],
            ],

            'webapp-react-film' => [
                'details' => "Un'app React per consultare un catalogo di film. Mostra l'elenco con copertina e genere, una pagina di dettaglio per ogni film e un form per inviare recensioni, che vengono salvate dal backend Express.\n\nL'ho realizzata per esercitarmi con React Router, gli stati dei componenti e la comunicazione con un'API esterna (progetto Webapp Express – Blog Film).",
                'features' => [
                    'Elenco film con copertina, anno e genere',
                    'Pagina di dettaglio per ogni film',
                    'Elenco delle recensioni e form per inviarne di nuove',
                    'Dati caricati dall\'API Express',
                ],
                'gallery' => [
                    ['film-1-elenco.jpg', 'Elenco dei film'],
                    ['film-2-dettaglio.jpg', 'Dettaglio del film con recensioni'],
                ],
            ],

            'webapp-express-blog-film' => [
                'details' => "Un'applicazione Node.js/Express che espone le API per un blog di film, con dati salvati in MySQL: film e relative recensioni. Serve anche le copertine come file statici.\n\nHo aggiunto middleware personalizzati per la gestione degli errori e per le rotte non trovate, così che l'API risponda sempre in modo coerente. Il frontend che la utilizza è il progetto Webapp React – Film.",
                'features' => [
                    'API REST per film e recensioni',
                    'Database MySQL con relazione film → recensioni',
                    'Middleware personalizzati per errori e rotte non trovate',
                    'Copertine servite come file statici',
                    'CORS configurato per il frontend',
                ],
                'gallery' => [
                    ['film-express-api.jpg', 'Risposta JSON dell\'endpoint /movies'],
                ],
            ],

            'express-blog-api-crud' => [
                'details' => "Un'API REST realizzata con Express per gestire i post di un blog, con operazioni CRUD complete. È un progetto di studio in cui ho lavorato sulla struttura di un'applicazione Node.js: router, controller e middleware separati.\n\nLe rotte non valide e gli errori vengono gestiti da middleware dedicati, che restituiscono risposte JSON chiare, come nell'esempio dell'errore 404 mostrato negli screenshot.",
                'features' => [
                    'CRUD completo sui post',
                    'Struttura a router, controller e middleware',
                    'Gestione centralizzata di errori e rotte non trovate',
                    'Risposte in JSON con codici di stato corretti',
                ],
                'gallery' => [
                    ['posts-1-elenco.jpg', 'Elenco dei post in JSON'],
                    ['posts-2-errore.jpg', 'Errore 404 gestito dal middleware'],
                ],
            ],
        ];
    }
}
