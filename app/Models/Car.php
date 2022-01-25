<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'house_id',
        'license_plate',
        'make',
        'color'
    ];

    /**
     * Get the House that owns the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function House() {
        return $this->belongsTo(House::class, 'foreign_key', 'other_key');
    }

    protected $hidden = [
        'house_id',
        'created_at',
        'updated_at'
    ];
}
