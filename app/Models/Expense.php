<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    use HasFactory;

    public static $categories = [
        'Servicios',
        'Entretenimiento',
        'Alimentación',
        'Ropa',
        'Cuidado personal',
        'Regalos',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    protected $hidden = [
        'user_id',
        'created_at',
        'updated_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
