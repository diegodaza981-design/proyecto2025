<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register_successfully(): void
    {
        $response = $this->postJson('/api/registro', [
            'name' => 'aprendiz1',
            'email' => 'aprendiz@example.com',
            'password' => 'password123',
        ]);

        $response
            ->assertCreated()
            ->assertJsonPath('mensaje', 'Registro exitoso.');

        $this->assertDatabaseHas('users', [
            'email' => 'aprendiz@example.com',
        ]);
    }

    public function test_user_can_login_with_valid_credentials(): void
    {
        User::factory()->create([
            'name' => 'aprendiz2',
            'email' => 'aprendiz2@example.com',
            'password' => 'password123',
        ]);

        $response = $this->postJson('/api/inicio-sesion', [
            'usuario' => 'aprendiz2@example.com',
            'password' => 'password123',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('mensaje', 'Autenticación satisfactoria.');
    }

    public function test_login_fails_with_invalid_credentials(): void
    {
        User::factory()->create([
            'name' => 'aprendiz3',
            'email' => 'aprendiz3@example.com',
            'password' => 'password123',
        ]);

        $response = $this->postJson('/api/inicio-sesion', [
            'usuario' => 'aprendiz3@example.com',
            'password' => 'incorrecta123',
        ]);

        $response
            ->assertUnauthorized()
            ->assertJsonPath('mensaje', 'Error en la autenticación.');
    }
}
