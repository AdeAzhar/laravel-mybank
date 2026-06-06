<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function indexNasabah()
    {
        $user = Auth::user();
        return view('nasabah.home_nasabah', compact('user'));
    }

    public function indexAdmin()
    {
        $user = Auth::user();
        return view('admin.home_admin', compact('user'));
    }
}
