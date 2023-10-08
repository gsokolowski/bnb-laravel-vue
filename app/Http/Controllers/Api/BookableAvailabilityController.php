<?php

namespace App\Http\Controllers\Api;

use App\Bookable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookableAvailabilityController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id, Request $request) //$id comes from api.php route bookables/{id}/availability
    {
        $data = $request->validate([
            'from' => 'required|date_format:Y-m-d|after_or_equal:now',
            'to' => 'required|date_format:Y-m-d|after_or_equal:from'
        ]);

        $bookable = Bookable::findOrFail($id);
        //dd($bookable->availableFor($data['from'], $data['to']));
        return $bookable->availableFor($data['from'], $data['to'])
        ? response()->json(['hotel (bookable) available during selected dates'])
        : response()->json(['hotel (bookable) not available during selected dates'], 404);


    }
}
