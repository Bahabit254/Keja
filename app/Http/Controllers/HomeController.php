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
        return view('user.home');
    } 
    }

    public function index() {
        if(Auth::id()) {
            return redirect('redirect');
        }
        else {
           return view('user.home'); 
        }
        
    }

    
}
