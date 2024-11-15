<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotificationsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => ['required'],
            'notifiable_type' => ['required'],
            'notifiable_id' => ['required', 'integer'],
            'data' => ['required'],
            'read_at' => ['required', 'date'],
            'consultation_form_id' => ['required', 'exists:consultation_forms'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
