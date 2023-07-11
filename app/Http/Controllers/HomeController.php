<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect() {
        $userrole=Auth::user()->role;

       if ($userrole=='1') {
        return view('admin.home');
    } 
    else {
        return view('dashboard');
    } 
    }

    
}
