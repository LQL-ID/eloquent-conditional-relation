<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BehaviorController extends Controller
{
    /**
     * Display all behavior data
     * 
     * @return View
     */
    public function index()
    {
        return view('behavior');
    }
}
