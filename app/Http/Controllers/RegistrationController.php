<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Mail\RegistrationConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\QueryException;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('demo.registration');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'fullname' => 'required|string|max:255',
                'email' => 'required|email', // unique:registrations,email
                'address' => 'required|string|max:255',
            ]);

            $data['fullname'] = htmlspecialchars($data['fullname'], ENT_QUOTES, 'UTF-8');
            $data['address'] = htmlspecialchars($data['address'], ENT_QUOTES, 'UTF-8');

            // Database insertion
            $registration = Registration::create($data);

            // Send mail after database insertion
            Mail::to($data['email'])->send(new RegistrationConfirmation($registration));

            // Redirect to [confirmation] page
            // return response()->json($registration, 201);
            return redirect()->route('demo.confirmation')->with('success', 'Registration successful!');

        } catch (QueryException $exception) {
            // If somehow the data insertion is failed then redirect to [failed] page
            return redirect()->route('demo.failed')->with('error', 'Failed to register. Please try again.');
        }
    }
}
