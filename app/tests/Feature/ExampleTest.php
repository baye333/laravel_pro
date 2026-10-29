<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_returns_a_successful_response()
    {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertSee('Bienvenue sur Sénégal Connect');
    }

    public function test_hello_page_displays_the_shared_navigation_and_greeting()
    {
        $response = $this->get(route('hello'));

        $response->assertOk();
        $response->assertSee('Hello World et bonjour !');
        $response->assertSee('Étudiant');
    }

    public function test_student_page_displays_the_student_greeting()
    {
        $response = $this->get(route('etudiant'));

        $response->assertOk();
        $response->assertSee('Quel est votre nom ?');
        $response->assertSee('name="nom"', false);
    }

    public function test_student_page_greets_the_submitted_name()
    {
        $response = $this->post(route('etudiant.saluer'), [
            'nom' => 'Awa Diop',
        ]);

        $response->assertOk();
        $response->assertSee('Bonjour, Awa Diop !');
    }

    public function test_student_name_is_required()
    {
        $response = $this->from(route('etudiant'))->post(route('etudiant.saluer'), [
            'nom' => '',
        ]);

        $response->assertRedirect(route('etudiant'));
        $response->assertSessionHasErrors('nom');
    }
}
