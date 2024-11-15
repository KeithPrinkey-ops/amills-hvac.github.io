<?php

namespace App\Http\Resources;

use App\Models\ConsultationForm;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ConsultationForm */
class ConsultationFormResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'name' => $this->name,
            'address' => $this->address,
            'email' => $this->email,
            'issue' => $this->issue,
            'equipment_type' => $this->equipment_type,
            'consultation_type' => $this->consultation_type,
            'user_id' => $this->user_id,
            'database_notification_id' => $this->database_notification_id,
        ];
    }
}
