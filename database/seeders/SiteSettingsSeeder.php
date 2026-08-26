<?php

namespace Database\Seeders;
use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            'hero_title' => 'Ciao, sono Nicolò. Creo esperienze web moderne e funzionali.',
            'hero_subtitle' => 'Sono un Junior Full Stack Web Developer. Realizzo siti web, applicazioni e soluzioni digitali affidabili, performanti e su misura per le tue esigenze.',
            'availability_status' => 'Disponibile per opportunità lavorative e progetti freelance',
            'about_text' => 'Mi chiamo Nicolò Salvestrini e sono un Junior Full Stack Web Developer. Ho completato il percorso di formazione in Full Stack Web Development presso Boolean, dove ho acquisito competenze solide nello sviluppo di applicazioni moderne e scalabili. Sono una persona curiosa, precisa e orientata al problem solving, con una forte passione per il codice e per la creazione di esperienze digitali utili e ben fatte. Il mio obiettivo è crescere professionalmente in un team dinamico, contribuire a progetti stimolanti e continuare a migliorare ogni giorno.',
            'linkedin_url' => 'https://www.linkedin.com/in/nicolosalvestrini',
            'github_url' => 'https://github.com/nicolosalvestrini',
            'contact_email' => 'nicolo.salvestrini@gmail.com',
            'cv_file_path' => null, // da valorizzare quando carichi il PDF
            'cv_updated_at' => 'Maggio 2026',
        ];

        foreach ($settings as $key => $value) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}
