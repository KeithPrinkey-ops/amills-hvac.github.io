<?php

namespace Database\Factories;

use App\Models\ConsultationForm;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Carbon;

class ConsultationFormFactory extends Factory
{
    protected $model = ConsultationForm::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
            'issue' => $this->faker->word(),
            'equipment_type' => $this->faker->word(),
            'consultation_type' => $this->faker->word(),

            'database_notification_id' => DatabaseNotification::factory(),
        ];
    }
}
