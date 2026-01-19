<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vinyl extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'year',
        'description',
        'is_official',
        'price',
        'image',
    ];

    public function reactions()
    {
        return $this->hasMany('App\Models\Reaction');
    }
}
