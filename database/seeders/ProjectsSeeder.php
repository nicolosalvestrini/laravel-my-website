<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use App\Models\Technology;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Nexus Games - Backend',
                'category' => 'backend',
                'description' => 'App full-stack in Laravel per la gestione di un catalogo di videogiochi — CRUD, relazioni tra modelli (generi, piattaforme), autenticazione e API REST con CORS.',
                'github_url' => 'https://github.com/nicolosalvestrini/laravel-nexus-games',
                'demo_url' => null,
                'is_featured' => true,
                'sort_order' => 1,
                'technologies' => ['Laravel', 'PHP', 'MySQL'],
            ],
            [
                'title' => 'Nexus Games - Frontend',
                'category' => 'frontend',
                'description' => 'Frontend React per la piattaforma Nexus Games, che consuma l\'API REST di Laravel.',
                'github_url' => 'https://github.com/nicolosalvestrini/react-nexus-games',
                'demo_url' => null,
                'is_featured' => true,
                'sort_order' => 2,
                'technologies' => ['React', 'JavaScript', 'Bootstrap'],
            ],
            [
                'title' => 'Laravel Portfolio Dashboard',
                'category' => 'backend',
                'description' => 'Dashboard admin in Laravel per la gestione di progetti e tecnologie del portfolio, con autenticazione API tramite Sanctum e CRUD completo.',
                'github_url' => 'https://github.com/nicolosalvestrini/laravel-portfolio',
                'demo_url' => null,
                'is_featured' => false,
                'sort_order' => 3,
                'technologies' => ['Laravel', 'PHP', 'MySQL'],
            ],
            [
                'title' => 'Webapp Express - Blog Film',
                'category' => 'backend',
                'description' => 'App Node.js/Express per un blog di film con CRUD su database e middleware personalizzato per la gestione degli errori.',
                'github_url' => 'https://github.com/nicolosalvestrini/webapp-express',
                'demo_url' => null,
                'is_featured' => false,
                'sort_order' => 4,
                'technologies' => ['Node.js', 'Express', 'MySQL'],
            ],
            [
                'title' => 'Express Blog API CRUD',
                'category' => 'backend',
                'description' => 'API REST realizzata con Express con CRUD completo, middleware personalizzati e gestione degli errori.',
                'github_url' => 'https://github.com/nicolosalvestrini/express-blog-api-crud',
                'demo_url' => null,
                'is_featured' => false,
                'sort_order' => 5,
                'technologies' => ['Node.js', 'Express'],
            ],
            [
                'title' => 'Webapp React - Film',
                'category' => 'frontend',
                'description' => 'App React per film con elenco dinamico, pagina di dettaglio e form per l\'invio di recensioni.',
                'github_url' => 'https://github.com/nicolosalvestrini/webapp-react',
                'demo_url' => null,
                'is_featured' => false,
                'sort_order' => 6,
                'technologies' => ['React', 'JavaScript'],
            ],
        ];

        foreach ($projects as $data) {
            $techNames = $data['technologies'];
            unset($data['technologies']);

            $data['slug'] = Str::slug($data['title']);

            $project = Project::updateOrCreate(['slug' => $data['slug']], $data);

            $technologyIds = Technology::whereIn('name', $techNames)->pluck('id');
            $project->technologies()->sync($technologyIds);
        }
    }
}
