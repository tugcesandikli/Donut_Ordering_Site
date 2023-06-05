<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function show()
    {
        return view('users.show');
    }
}
