<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookAppointment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'service' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $validated['user_id'] = Auth::id();
        BookAppointment::create($validated);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }
}
