<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'date' => 'required|date|after_or_equal:today',
            'description' => 'required|string|min:10',
        ]);

        $code = 'YN' . str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);

        while (Booking::where('code', $code)->exists()) {
        $code = 'YN' . str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
        }
        
        $booking = Booking::create([
            'code' => Str::uuid(),
            'name' => $request->name,
            'email' => $request->email,
            'date' => $request->date,
            'description' => $request->description,
            'status' => 'pending'
        ]);

        return redirect()
            ->route('booking.form')
            ->with('code', $booking->code);
    }


    public function check(Request $request)
    {
        $bookings = Booking::where('email', $request->email)->get();
        return view('booking.check', ['bookings' => $bookings]);
    }

    public function trackingForm()
    {
    
        return view('track', ['booking' => null]);
    }

    public function searchBooking(Request $request)
    {
        $request->validate([
            'code' => 'required|string'
        ]);

        $code = trim($request->code);

        // cek hasil query
        $booking = Booking::where('code', $code)->first();

        if (!$booking) {
            dd('Tidak ditemukan:', $code, Booking::pluck('code'));
        }

        return view('track', compact('booking'));
    }

}
