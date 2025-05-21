<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
   

    public function create($id)
    {
        $room = Room::findOrFail($id);
        return view('blog.booking.booking', compact('room'));
    }

    public function store(Request $request, $id)
{
    $request->validate([
        'check_in' => 'required|date|after_or_equal:today',
        'check_out' => 'required|date|after:check_in',
        'guests' => 'required|integer|min:1',
    ]);

    $room = Room::findOrFail($id);

    // Optional: Check room availability logic here

    Booking::create([
        'user_id' => Auth::id(),
        'room_id' => $room->id,
        'check_in' => $request->check_in,
        'check_out' => $request->check_out,
        'status' => 'pending', // default per your schema
    ]);

    return redirect()->route('home.index')->with('success', 'Booking request submitted! Status: Pending.');
}
}
