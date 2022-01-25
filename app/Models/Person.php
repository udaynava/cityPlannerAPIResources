<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';

    protected $fillable = [
        'house_id',
        'first_name',
        'last_name',
        'dob',
        'sex',
        'phone_number'
    ];

    public function house() {
        return $this->hasOne(House::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
