<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('shop')->with('products', $products);
    }

    public function add_product() {
        return view('add_product');
    }

    public function store_product(Request $request){
        $bunner_img = time().'-'.$request->pname.'.'.$request->bunner->extension();
        $request->bunner->move(public_path('/images'), $bunner_img);
        $products = new Product;
        $products->bunner = $bunner_img;
        $products->pname = $request->pname;
        $products->brand = $request->brand;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->category = $request->category;
        $products->save();
        return redirect('shop');
    }

    public function product_details($id){
        $product_details = Product::findOrFail($id);
        return view('product_details')->with('product_details', $product_details);
    }

    public function remove_product($id) {
        $remove_product = Product::findOrFail($id);
        $remove_product->delete();
        return redirect('shop');
    }

    public function edit($id) {
        $edit_product = Product::findOrFail($id);
        return view ('edit_product')->with('edit_product', $edit_product);
    }

    public function update(Request $request) {
        $bunner_img = time().'-'.$request->pname.'.'.$request->bunner->extension();
        $request->bunner->move(public_path('/images'), $bunner_img);
        $edit = Product::findOrFail($request->id);
        $edit->bunner = $bunner_img;
        $edit->pname = $request->pname;
        $edit->brand = $request->brand;
        $edit->price = $request->price;
        $edit->description = $request->description;
        $edit->category = $request->category;
        $edit->save();
        return redirect('shop')->with('success', ['product Updated successfully!']);
    }
}
