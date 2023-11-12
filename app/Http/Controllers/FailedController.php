<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FailedController extends Controller
{
    public function index()
    {
        return view('demo.failed');
    }
}
