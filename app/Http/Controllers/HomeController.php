<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products = product::paginate(6);

        return view('user.home', compact('products'));
    } 
    }

    public function index() {
        if(Auth::id()) {

            return redirect('redirect');
        }
        else {

            $products = product::all();

           return view('user.home', compact('products'));
        }
        
    }

    
}
