<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'booking_id',
        'midtrans_order_id',
        'snap_token',
        'status',
        'amount',
        'paid_at',
        'raw_response',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
