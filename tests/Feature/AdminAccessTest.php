<?php

namespace Tests\Feature;

use App\Models\Service;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_are_redirected_to_login(): void
    {
        $this->get('/admin')->assertRedirect('/login');
        $this->get('/admin/projects')->assertRedirect('/login');
    }

    public function test_regular_users_cannot_access_the_admin_area(): void
    {
        $user = User::factory()->create(['role' => 'user']);

        $this->actingAs($user)->get('/admin')->assertForbidden();
        $this->actingAs($user)->post('/admin/services', ['title' => 'x', 'description' => 'y'])->assertForbidden();
    }

    public function test_admins_can_access_the_admin_area(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $this->actingAs($admin)->get('/admin')->assertOk();
        $this->actingAs($admin)->get('/admin/projects')->assertOk();
    }

    public function test_admin_can_create_and_delete_a_service(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $this->actingAs($admin)->post('/admin/services', [
            'title' => 'Sito vetrina',
            'description' => 'Un sito semplice e veloce.',
        ])->assertRedirect('/admin/services');

        $this->assertDatabaseHas('services', ['title' => 'Sito vetrina']);

        $service = Service::first();
        $this->actingAs($admin)->delete("/admin/services/{$service->id}")->assertRedirect('/admin/services');
        $this->assertDatabaseMissing('services', ['title' => 'Sito vetrina']);
    }
}
