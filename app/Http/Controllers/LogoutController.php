<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function handle()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}