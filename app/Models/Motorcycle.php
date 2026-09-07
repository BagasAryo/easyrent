<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    protected $fillable = [
        'name',
        'type',
        'cc',
        'price_per_day',
        'description',
        'status',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function photos()
    {
        return $this->hasMany(MotorcyclePhoto::class);
    }

    public function primaryPhoto()
    {
        return $this->hasOne(MotorcyclePhoto::class)->where('is_primary', true);
    }
}
