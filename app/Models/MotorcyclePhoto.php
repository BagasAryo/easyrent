<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotorcyclePhoto extends Model
{
    protected $fillable = [
        'motorcycle_id',
        'image_path',
        'is_primary',
    ];

    public function motorcycle()
    {
        return $this->belongsTo(Motorcycle::class);
    }
}
