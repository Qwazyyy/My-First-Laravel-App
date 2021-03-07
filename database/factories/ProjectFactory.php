<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

//use Faker\Generator as Faker;

use WithFaker;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->title(4),
            'description' => $this->faker->sentence(4),
            'owner_id' => function () {
                return \App\Models\User::factory()->create()->id;
            }
            //
        ];
    }
}
