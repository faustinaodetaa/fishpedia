<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function insertPage(){
        return view('insert');
    }

    public function updatePage(Request $request){
        $product = Product::find($request->route('id'));
        return view('update', compact('product'));

    }

    public function insert(Request $request){
        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_description' => 'required',
            'product_image' => 'mimes:png,jpg,jpeg|required'
        ]);

        $filename = time() . '.' . $request->product_image->extension();
        $request->product_image->move(public_path('storage'),$filename);

        Product::create([
            'name' => $request->product_name,
            'price' => $request->product_price,
            'description' => $request->product_description,
            'image' => $filename
        ]);
        return redirect('/');

    }

    public function update(Request $request){
        $this->validate($request,[
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_description' => 'required',
            'product_image' => 'mimes:png,jpg,jpeg|required'
        ]);

        $filename = time() . '.' . $request->product_image->extension();
        $request->product_image->move(public_path('storage'),$filename);

        Product::where('id', $request->route('id'))->update([
            'name' => $request->product_name,
            'price' => $request->product_price,
            'description' => $request->product_description,
            'image' => $filename
        ]);
        return redirect('/');
    }

    public function delete(Request $request){
        Product::where('id', $request->route('id'))->delete();
        return redirect('/');
    }

    public function index(Request $request){
        $search_query = $request->query('q');
        $products = Product::where('name', "LIKE" , "%$search_query%")->paginate(3)->appends(['q'=> $search_query]);
        return view('home', compact('products'));
    }

}
