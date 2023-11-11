<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Mail\RegistrationConfirmation;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('demo.registration');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email', // unique:registrations,email
            'address' => 'required|string|max:255',
        ]);

        $data['fullname'] = htmlspecialchars($data['fullname'], ENT_QUOTES, 'UTF-8');
        $data['address'] = htmlspecialchars($data['address'], ENT_QUOTES, 'UTF-8');

        $registration = Registration::create($data);

        Mail::to($data['email'])->send(new RegistrationConfirmation($registration));

        // return response()->json($registration, 201);
        return redirect()->route('demo.confirmation')->with('success', 'Registration successful!');
    }
}
