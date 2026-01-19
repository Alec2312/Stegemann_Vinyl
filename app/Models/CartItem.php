<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['user_id', 'vinyl_id', 'quantity'];

    public function vinyl()
    {
        return $this->belongsTo(Vinyl::class);
    }
}
