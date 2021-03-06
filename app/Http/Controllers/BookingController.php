<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        $booking = Http::get(config('app.api_host') . '/api/getBooking');
        $item = Http::get(config('app.api_host') . '/api/getItems');
        return view('booking.index', ['booking' => $booking->object(), 'item' => $item->object()]);
    }

    //POST
    public function post(Request $request)
    {
        $response = Http::post(config('postBooking') . '/api/postBooking', [
            'user_id' => $request['user_id'],
            'booking_item_id' => $request['booking_item_id'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
        ]);

        if ($response->status() != 200) {
            return redirect()->route('dashboard')->with('failed', trans('booking.set.failed'));
        }

        return redirect()->route('dashboard')->with('success', trans('booking.set.success'));
    }
}
