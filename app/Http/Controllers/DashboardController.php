<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /* Handle Tampilan Dashboard After Login */
    public function index ()
    {
        return view('layouts.template');
    }
}
