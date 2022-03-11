<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function user_can_create_meal()
    {
        $this->withoutExceptionHandling();

        $mealDetails = [
            'food' => 'sandwich',
            'drink' => 'orange juice'
        ];

        $this->post('/meals', $mealDetails);

        $this->assertDatabaseHas('meals', $mealDetails);
    }
}
