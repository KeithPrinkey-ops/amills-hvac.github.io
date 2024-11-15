<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, Rule|array|string>
     */
    protected function passwordRules(): array
    {
        return ['required', 'string', Password::default(), 'confirmed', 'min:12', 'max:30'];
        // Alternatively, you could use 'size:12' if you need exactly 12 characters:
        // return ['required', 'string', Password::default(), 'confirmed', 'size:12'];
    }
}
