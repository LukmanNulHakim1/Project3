<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    public function login() {
        return view('auth.login');
    }
    public function register() {
        return view('auth.register');
    }
    public function userHome() {
        return view('user.home');
    }
    public function adminHome() {
        return view('admin.home');
    }
        
}
