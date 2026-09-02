<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotorcycleStatusLog extends Model
{
    protected $fillable = [
        'motorcycle_id',
        'status_before',
        'status_after',
        'changed_by',
        'reason',
        'booking_id',
    ];

    public function motorcycle()
    {
        return $this->belongsTo(Motorcycle::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'changed_by');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
