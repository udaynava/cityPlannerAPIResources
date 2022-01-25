<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'street_id',
        'unit_number',
        'house_number'
    ];

    public function street() {
        return $this->belongsTo(Street::class);
    }

    public function car() {
        return $this->hasOne(Car::class);
    }

    public function person() {
        return $this->hasMany(Person::class);
    }
}
