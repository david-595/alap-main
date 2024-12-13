<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $fillable = ['gift_name', 'price', 'gift_type_id'];

    public function giftType()
    {
        return $this->belongsTo(GiftType::class);
    }

    public function wishlists()
    {
        return $this->belongsToMany(Wishlist::class);
    }
}
