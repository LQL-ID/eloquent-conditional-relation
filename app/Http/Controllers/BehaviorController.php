<?php

namespace App\Http\Controllers;

use App\Models\Behavior;
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
        $behaviors = Behavior::all();

        return view('behavior', compact('behaviors'));
    }
}
