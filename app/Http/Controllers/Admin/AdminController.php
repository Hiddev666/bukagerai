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
    public function productCreate()
    {
        // Brands
        $brands = Brand::all();

        // Categories
        $categories = Category::all();

        return view('admin.create', [
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    public function productStore(Request $request) {
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
}