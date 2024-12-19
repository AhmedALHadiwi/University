<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $building_name =['Building A','Building B','Building C','Building D','Building E','Building F','Building G','Building H'];
        $room_number =[101,102,103,104,105,201,202,203,204,205,301,302,303,304,305,401,402,403,404,405];
        $capacity =[50,100,150,200,250];
        
        return [
            'building_name'=>fake()->randomElement($building_name),
            'room_number'=>fake()->randomElement($room_number),
            'capacity'=>fake()->randomElement($capacity),
        ];
    }
}
