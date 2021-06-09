<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login() {
        return view('user.login');
    }

    public function create() {
        return view('user.create');
    }

    public function store() {
        redirect('/');
    }
}