<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function product() {
        return view('admin.product');
    }

    public function productupload(Request $request) {
        
        $data=new product;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage', $imagename);
        $data->images=$imagename;

        $data->name=$request->name;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->description=$request->description;

        $data->save();

        return redirect()->back()->with('msg', 'Successfully Added Product');
    }

    public function showproducts() {
        $products = product::all();
        return view('admin.showproducts', compact('products'));
    }

    public function deleteproduct($id) {

        $products = product::find($id);
        $products->delete();
        return redirect()->back()->with('msg', 'Deleted Product');
    }

    public function editproduct($id){

        $products = product::find($id);
        return view('admin.editproduct', compact('products'));
    }

    public function productupdate(Request $request, $id) {
        
        $data=product::find($id);
        $image=$request->file;
        
        if($image) {
            
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productimage', $imagename);
            $data->images=$imagename; 
        }
        

        $data->name=$request->name;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->description=$request->description;

        $data->save();

        return redirect()->back()->with('msg', 'Product Updated Successfully');
    }
}
