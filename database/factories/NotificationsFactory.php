<?php

namespace Database\Factories;

use App\Models\ConsultationForm;
use App\Models\Notifications;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class NotificationsFactory extends Factory
{
    protected $model = Notifications::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'type' => $this->faker->word(),
            'notifiable_type' => $this->faker->word(),
            'notifiable_id' => $this->faker->randomNumber(),
            'data' => $this->faker->word(),
            'read_at' => Carbon::now(),

            'consultation_form_id' => ConsultationForm::factory(),
        ];
    }
}
