<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUsers()
    {
        return view('users');
    }
    public function addUsers()
    {
        return view('add');
    }
    public function updateUser()
    {
        return view('update');
    }
}