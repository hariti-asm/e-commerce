<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    public function uploadproduct(Request $request)
    {
        $data = new Product(); // Corrected: Add namespace before "Product"

        $image = $request->file('file'); // Corrected: Use "file" method on $request
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('productimage', $imagename);

        $data->image = $imagename; // Corrected: Assign the image name to the "image" property

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->save();

        return redirect()->back()->with('message', 'Product added successfully');
    }

    public function showproduct()
    {


        $data= Product::all();
        return view('admin.showproduct',compact('data'));
    }

    public function deleteproduct($id){
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Product successfuly deleted');

    }

public function updateview($id){


    $data=product::find($id);
    return view('admin.updateview',compact('data'));

}

}
