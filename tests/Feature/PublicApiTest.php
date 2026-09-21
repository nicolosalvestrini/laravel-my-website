<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_endpoints_respond(): void
    {
        foreach (['projects', 'services', 'technologies', 'experiences', 'testimonials', 'site-settings'] as $endpoint) {
            $this->getJson("/api/{$endpoint}")->assertOk();
        }
    }

    public function test_projects_can_be_filtered_by_category(): void
    {
        Project::create(['title' => 'A', 'slug' => 'a', 'description' => 'd', 'category' => 'backend']);
        Project::create(['title' => 'B', 'slug' => 'b', 'description' => 'd', 'category' => 'frontend']);

        $this->getJson('/api/projects?category=frontend')
            ->assertOk()
            ->assertJsonCount(1)
            ->assertJsonPath('0.title', 'B');
    }

    public function test_site_settings_are_returned_as_key_value_map(): void
    {
        SiteSetting::create(['key' => 'hero_title', 'value' => 'Ciao']);

        $this->getJson('/api/site-settings')->assertOk()->assertJson(['hero_title' => 'Ciao']);
    }

    public function test_only_published_testimonials_are_listed(): void
    {
        Testimonial::create(['author_name' => 'Pubblica', 'message' => str_repeat('a', 30), 'is_published' => true]);
        Testimonial::create(['author_name' => 'Bozza', 'message' => str_repeat('b', 30), 'is_published' => false]);

        $this->getJson('/api/testimonials')
            ->assertOk()
            ->assertJsonCount(1)
            ->assertJsonPath('0.author_name', 'Pubblica');
    }

    public function test_submitted_testimonial_is_saved_as_unpublished(): void
    {
        $this->postJson('/api/testimonials', [
            'author_name' => 'Giulia',
            'message' => 'Un lavoro davvero curato, grazie mille!',
            'rating' => 5,
        ])->assertCreated();

        $this->assertDatabaseHas('testimonials', ['author_name' => 'Giulia', 'is_published' => false]);
    }

    public function test_testimonial_validation_and_honeypot(): void
    {
        $this->postJson('/api/testimonials', ['author_name' => '', 'message' => 'corto'])->assertUnprocessable();

        $this->postJson('/api/testimonials', [
            'author_name' => 'Bot',
            'message' => 'Messaggio spam abbastanza lungo da passare.',
            'website' => 'http://spam.example',
        ])->assertCreated();

        $this->assertDatabaseMissing('testimonials', ['author_name' => 'Bot']);
    }

    public function test_contact_form_stores_a_message_without_csrf(): void
    {
        $this->postJson('/contatti', [
            'name' => 'Mario',
            'email' => 'mario@example.com',
            'request_type' => 'preventivo',
            'message' => 'Vorrei un preventivo.',
        ])->assertCreated();

        $this->assertDatabaseHas('contact_messages', ['email' => 'mario@example.com', 'is_read' => false]);
    }
}
