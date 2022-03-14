<?php

namespace Tests\Unit;

use App\Models\Meal;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class MealTest extends TestCase
{
    use RefreshDatabase;
    /**
     *
     * @test
     * @return void
     */
    public function has_path()
    {
        $meal = Meal::factory()->make();

        $this->assertEquals('/meals/'.$meal->id, $meal->path());
    }
}
