<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_homepage_loads(): void
    {
        $this->seed();

        $this->get('/')->assertOk();
    }

    public function test_the_presentation_page_shows_the_new_design(): void
    {
        $this->seed();

        $this->get('/presentation')
            ->assertOk()
            ->assertSee('The Art of')
            ->assertSee('Rammed Earth')
            ->assertSee('Start Your Project');
    }

    public function test_a_visitor_can_request_a_sample(): void
    {
        $this->seed();

        $response = $this->post('/inquiries', [
            'type' => 'sample',
            'first_name' => 'Layla Hassan',
            'email' => 'layla@example.com',
            'message' => 'A sample of polished plaster for a villa lobby.',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('inquiries', [
            'email' => 'layla@example.com',
            'type' => 'sample',
        ]);
    }
}
