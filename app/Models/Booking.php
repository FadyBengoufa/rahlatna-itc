<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'user_id',
        'status',
        'number_of_travelers',
        'total_price',
        'special_requests'
    ];

    protected $casts = [
        'total_price' => 'decimal:2'
    ];

    public function trip(): BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }

    public function traveler(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
