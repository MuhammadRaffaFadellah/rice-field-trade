<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiceField extends Model
{
    protected $table = 'rice_fields';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'location',
        'latitude',
        'longtitude',
        'area_size',
        'price',
        'irrigation_type',
        'soil_type',
        'certificate_type',
        'status'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
