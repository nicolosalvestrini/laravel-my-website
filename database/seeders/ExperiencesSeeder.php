<?php

namespace Database\Seeders;
use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $experiences = [
            [
                'type' => 'formazione',
                'title' => 'Corso Full Stack Web Development – Boolean',
                'description' => 'Percorso intensivo di 320 ore: HTML, CSS, JavaScript, React, Node.js, Express, PHP, Laravel, MySQL, Git, GitHub e best practices di sviluppo.',
                'period_start' => '2024-01-01', // da confermare con le date esatte
                'period_end' => '2025-01-01',   // da confermare con le date esatte
                'sort_order' => 1,
            ],
            [
                'type' => 'esperienza',
                'title' => 'Gestore di sala giochi – Las Vegas',
                'description' => 'Gestione operativa della sala e assistenza alla clientela. Apertura, gestione e chiusura della cassa con verifica degli incassi giornalieri. Coordinamento delle attività del personale durante il servizio.',
                'period_start' => '2025-12-01',
                'period_end' => null,
                'sort_order' => 2,
            ],
            [
                'type' => 'esperienza',
                'title' => 'Responsabile bar / Bartender – SanGiorgio',
                'description' => 'Coordinamento del personale e organizzazione delle attività durante il servizio. Preparazione e servizio delle ordinazioni, gestione della postazione e assistenza alla clientela. Controllo delle forniture, del magazzino e delle operazioni di chiusura della cassa.',
                'period_start' => '2025-03-01',
                'period_end' => '2025-12-01',
                'sort_order' => 3,
            ],
            [
                'type' => 'esperienza',
                'title' => 'Venditore / Consulente commerciale – Vorwerk Folletto',
                'description' => 'Presentazione e dimostrazione dei prodotti presso potenziali clienti. Gestione degli appuntamenti e analisi delle esigenze del cliente. Proposta di soluzioni commerciali coerenti con le necessità individuate.',
                'period_start' => '2024-08-01',
                'period_end' => '2025-02-01',
                'sort_order' => 4,
            ],
            [
                'type' => 'esperienza',
                'title' => 'Addetto alla manutenzione e preservazione industriale – Nuova Pignone',
                'description' => 'Manutenzione di componenti elettrici e meccanici e preservazione dei moduli industriali dall\'arrivo alla spedizione. Controllo dello stato dei moduli durante le diverse fasi operative. Svolgimento di attività operative in quota nel rispetto delle procedure di sicurezza.',
                'period_start' => '2024-02-01',
                'period_end' => '2024-07-01',
                'sort_order' => 5,
            ],
            [
                'type' => 'esperienza',
                'title' => 'Head Bartender / Responsabile bar – Mudanzas',
                'description' => 'Coordinamento delle attività operative del bar durante il servizio. Gestione degli ordini di distillati e dell\'inventario di magazzino. Formazione del personale e accoglienza della clientela.',
                'period_start' => '2023-03-01',
                'period_end' => '2023-09-01',
                'sort_order' => 6,
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::updateOrCreate(
                ['title' => $experience['title']],
                $experience
            );
        }
    }
}
