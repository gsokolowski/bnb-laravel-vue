<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookable extends Model
{
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function availableFor($from, $to) : bool
    {
        // returns true or fallse depending on whether booking date is already taken for this hotel (bookable) or not
        // 0 means no booking so hotel is free to book
        return 0 === $this->bookings()->betweenDates($from, $to)->count();
    }

}
