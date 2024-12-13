<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiftType extends Model
{
    protected $fillable = ['type'];

    public function gifts()
    {
        return $this->hasMany(Gift::class);
    }
}
