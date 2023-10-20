<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RoleController extends Controller
{
    /**
     * Display all role data
     * 
     * @return View
     */
    public function index()
    {
        return view('role');
    }
}
