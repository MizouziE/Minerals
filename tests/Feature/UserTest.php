<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     *
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

        $this->get('/meals')->assertSee($mealDetails['food']);
    }

    /**
     *
     * @test
     * @return void
     */
    public function meal_must_have_food()
    {
        $this->post('/meals', [])->assertSessionHasErrors('food');
    }


    /**
     *
     * @test
     * @return void
     */
    public function meal_must_have_drink()
    {
        $this->post('/meals', [])->assertSessionHasErrors('drink');
    }

}
