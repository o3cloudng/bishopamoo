<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']); // Auth required for the whole controller
    }
    public function index()
    {
        return view('dashboard');
    }
}
