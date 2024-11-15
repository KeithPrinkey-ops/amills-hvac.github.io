<?php

namespace Database\Factories;

use App\Models\Consultation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ConsultationFactory extends Factory
{
    protected $model = Consultation::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'request_date_time' => Carbon::now(),
            'consultation_type' => $this->faker->word(),
            'consultation_request_date' => Carbon::now(),
            'consultation_need' => $this->faker->word(),
            'consultation_length_request' => $this->faker->randomNumber(),
        ];
    }
}
