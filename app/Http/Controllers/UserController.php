<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display all users data
     * 
     * @return View
     */
    public function index()
    {
        $users = User::all();

        return view('user', compact('users'));
    }
}
