<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = ['persone_id', 'wishlist_name'];

    public function people()
    {
        return $this->belongsTo(People::class);
    }

    public function gifts()
    {
        return $this->belongsToMany(Gift::class);
    }
}
