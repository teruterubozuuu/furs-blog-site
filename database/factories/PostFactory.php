<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $animal = $this->faker->randomElement(['dog', 'cat']);
        $location = $this->faker->streetName();
        $condition = $this->faker->randomElement([
            'injured', 'sick', 'hungry', 'lost', 'alone'
        ]);
        $adjective = $this->faker->randomElement([
            'friendly', 'scared', 'aggressive', 'timid'
        ]);

        return [
            'title' => "Stray {$animal} spotted near {$location}",
            'content' => "A {$adjective} and possibly {$condition} {$animal} was seen around {$location}. 
            Locals are encouraged to provide water or food and contact a nearby shelter if possible.",
        ];
    }
}

