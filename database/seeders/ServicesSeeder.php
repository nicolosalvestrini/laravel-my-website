<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Creazione siti web',
                'description' => 'Siti web moderni, veloci e responsive su misura per ogni esigenza.',
                'icon' => 'globe',
                'sort_order' => 1,
            ],
            [
                'title' => 'Landing page',
                'description' => 'Pagine efficaci e orientate alla conversione per promuovere il tuo business.',
                'icon' => 'layout',
                'sort_order' => 2,
            ],
            [
                'title' => 'Siti per ristoranti e attività locali',
                'description' => 'Soluzioni dedicate per ristoranti, bar e negozi con focus su usabilità e presentazione.',
                'icon' => 'utensils',
                'sort_order' => 3,
            ],
            [
                'title' => 'Manutenzione e aggiornamenti',
                'description' => 'Aggiornamenti, sicurezza e supporto continuo per mantenere il tuo sito sempre al top.',
                'icon' => 'settings',
                'sort_order' => 4,
            ],
            [
                'title' => 'Applicazioni web personalizzate',
                'description' => 'Sviluppo di applicazioni su misura per automatizzare processi e risolvere esigenze specifiche.',
                'icon' => 'code',
                'sort_order' => 5,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['title' => $service['title']],
                $service
            );
        }
    }
}
