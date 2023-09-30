<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['from', 'to']; // allow for mass asign - this will be used when seeding database

    public function bookable()
    {
        return $this->belongsTo(Bookable::class);
    }
}
