<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    
    public function productsIndex() {
        $products = Product::all();

        return view('admin.products.index', [
            'products' => $products
        ]);
    }
    public function productsCreate()
    {
        // Brands
        $brands = Brand::all();

        // Categories
        $categories = Category::all();

        return view('admin.products.create', [
            'brands' => $brands,
            'categories' => $categories
        ]);
    }
    public function productsStore(Request $request) {
        $requestImage = $request->file('image');
        $imageName = strtolower(str_replace(' ', '-', $request->name));
    
        $requestImage->move('products_image', $imageName);

        $data = Product::create([
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'image' => $imageName,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);
    
        if($data) {
            Session::flash('success', 'A New Product Was Added');
            return redirect()->back();
        } else {
            Session::flash('failed', 'A New Product Was Not Added');
        }    
    }
    public function productsUpdateForm($id) {
        $products = Product::find($id);
        $brands = Brand::all();
        $categories = Category::all();

        return view('admin.products.update', [
            'products' => $products,
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    public function productsUpdate(Request $request) {
        $product = Product::where('id', $request->id)->update([
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);

        if($product) {
            Session::flash('successupdate', 'A New Product Was Updated');
            return redirect()->back();
        } else {
            Session::flash('failedupdate', 'A New Product Was Not Updated');
        }    
    }
    public function productsDelete($id) {
        $product = Product::where('id', $id)->delete();
        if($product) {
            Session::flash('successdelete', 'A New Product Was Deleted');
            return redirect()->back();
        } else {
            Session::flash('successdelete', 'A New Product Was Not Deleted');
        }    
    }
}