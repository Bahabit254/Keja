<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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

            $products = product::paginate(6);

            $user = auth()->user();
            $count = cart::where('phone', $user->phone)->count();

           return view('user.home', compact('products', 'count'));
        }
        
    }

    public function searchbar(Request $request) {
        $search = $request->search;
        if($search==''){
            $products = product::paginate(6);

           return view('user.home', compact('products'));
        } else {
           
           $products = product::where('name', 'Like', '%'. $search. '%')->get();

        return view('user.home', compact('products')); 
        }
        
    }

    public function addCart(Request $request, $id) 
    {
        if(Auth::id())
        {
            $user=auth()->user();

            $product=product::find($id);

            $cart=new cart;

            $cart->name=$user->name;

            $cart->phone=$user->phone;

            $cart->address=$user->address;

            $cart->product=$product->name;

            $cart->price=$product->price;

            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect()->back()->with('msg', 'Product Added to Cart');
        } 
        else 
        {
            return redirect('login');
        }
    }

    public function cart() 
    {
        $user = auth()->user();

        $data = cart::where('phone', $user->phone)->get();

        $count = cart::where('phone', $user->phone)->count();

        return view('user.cart', compact('count', 'data'));
    }

    public function deletecart(Request $request, $id) 
    {
        $cart = cart::find($id);
        $cart->delete();

        return redirect()->back()->with('msg', 'Product removed from Cart');


    }

    
}
