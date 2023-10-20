<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display all role data
     * 
     * @return View
     */
    public function index()
    {
        $roles = Role::all();

        return view('role', compact('roles'));
    }
}
