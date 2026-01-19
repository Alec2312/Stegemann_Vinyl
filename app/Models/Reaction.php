<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $fillable = ['user_id', 'vinyl_id', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vinyl()
    {
        return $this->belongsTo(Vinyl::class);
    }
}
