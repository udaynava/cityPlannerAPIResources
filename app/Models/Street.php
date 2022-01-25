<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    protected $fillable = [
        'street_name',
        'postal_code'
    ];

    public function houses() {
        return $this->hasMany(House::class);
    }

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];
}
