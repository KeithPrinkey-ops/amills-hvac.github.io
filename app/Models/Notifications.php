<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notifications extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'type',
        'notifiable_type',
        'notifiable_id',
        'data',
        'read_at',
        'consultation_form_id',
    ];
    protected $hidden = [
        'consultation_form_id',
    ];

    public function consultationForm(): BelongsTo
    {
        return $this->belongsTo(ConsultationForm::class);
    }

    protected function casts()
    {
        return [
            'read_at' => 'timestamp',
        ];
    }
}
