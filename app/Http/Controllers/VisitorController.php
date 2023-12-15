<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /* Handle Tampilan Form Untuk Visitor Input */
    public function index ()
    {
        $data = [];
        return View('visitor-form', compact('data'));
    }
}
