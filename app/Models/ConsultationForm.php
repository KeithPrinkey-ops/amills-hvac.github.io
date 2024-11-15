<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\DatabaseNotification;

class ConsultationForm extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'address',
        'email',
        'issue',
        'equipment_type',
        'consultation_type',
        'database_notification_id',
        'user_id',
    ];

    public function databaseNotification(): BelongsTo
    {
        return $this->belongsTo(DatabaseNotification::class);
    }
}
