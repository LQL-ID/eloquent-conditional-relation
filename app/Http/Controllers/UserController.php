<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display all users data
     * 
     * @return View
     */
    public function index()
    {
        return view('user');
    }
}
