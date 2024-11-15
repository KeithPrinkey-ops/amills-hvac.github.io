<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultationFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'address' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'issue' => ['required'],
            'equipment_type' => ['required'],
            'consultation_type' => ['required'],
            'database_notification_id' => ['required', 'exists:notifications'],
        ];
    }

    public function authorize(): bool
    {

        return true;
    }
}
