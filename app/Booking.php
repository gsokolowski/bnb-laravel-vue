<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['from', 'to']; // allow for mass asign - this will be used when seeding database

    public function bookable()
    {
        return $this->belongsTo(Bookable::class);
    }

    // make method in local scope so it can be used later in BookableAvailabilityController.php as bookingd->betweenDates( $from, $to)
    public function scopeBetweenDates(Builder $query, $from, $to)
    {
        return $query->where('to', '>=', $from)->where('from', '<=', $to);
    }
}
