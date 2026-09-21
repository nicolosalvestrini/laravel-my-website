<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProjectDetailTest extends TestCase
{
    use RefreshDatabase;

    private function png(string $name): UploadedFile
    {
        $data = base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z8BQDwAEhQGAhKmMIQAAAABJRU5ErkJggg==');

        return UploadedFile::fake()->createWithContent($name, $data);
    }

    private function payload(array $extra = []): array
    {
        return array_merge([
            'title' => 'Demo',
            'slug' => 'demo',
            'description' => 'Breve descrizione',
            'details' => "Primo paragrafo.\n\nSecondo paragrafo.",
            'features' => "Login\n\nCarrello\nOrdini",
            'category' => 'fullstack',
        ], $extra);
    }

    public function test_admin_can_create_a_project_with_gallery_and_details(): void
    {
        Storage::fake('public');
        $admin = User::factory()->create(['role' => 'admin']);

        $this->actingAs($admin)->post(route('admin.projects.store'), $this->payload([
            'gallery' => [
                $this->png('a.png'),
                $this->png('b.jpg'),
            ],
        ]))->assertRedirect(route('admin.projects.index'));

        $project = Project::where('slug', 'demo')->firstOrFail();
        $this->assertCount(2, $project->images);
        Storage::disk('public')->assertExists($project->images->first()->image_path);
    }

    public function test_project_detail_api_returns_details_features_and_images(): void
    {
        Storage::fake('public');
        $admin = User::factory()->create(['role' => 'admin']);
        $this->actingAs($admin)->post(route('admin.projects.store'), $this->payload([
            'gallery' => [$this->png('a.png')],
        ]));

        $this->getJson('/api/projects/demo')
            ->assertOk()
            ->assertJsonPath('title', 'Demo')
            ->assertJsonPath('features', ['Login', 'Carrello', 'Ordini'])
            ->assertJsonCount(1, 'images');
    }

    public function test_unknown_project_returns_404(): void
    {
        $this->getJson('/api/projects/non-esiste')->assertNotFound();
    }

    public function test_admin_can_delete_a_gallery_image(): void
    {
        Storage::fake('public');
        $admin = User::factory()->create(['role' => 'admin']);
        $this->actingAs($admin)->post(route('admin.projects.store'), $this->payload([
            'gallery' => [$this->png('a.png')],
        ]));
        $project = Project::where('slug', 'demo')->firstOrFail();
        $image = $project->images->first();

        $this->actingAs($admin)->put(route('admin.projects.update', $project), $this->payload([
            'delete_images' => [$image->id],
        ]))->assertRedirect(route('admin.projects.index'));

        $this->assertCount(0, $project->fresh()->images);
        Storage::disk('public')->assertMissing($image->image_path);
    }
}
