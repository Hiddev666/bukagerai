<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductsResource;
use App\Models\Poster;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function searchResult(Request $request) {
        $products = Product::where('name', 'LIKE', "%$request->search%")->get();
        return view('searchresult', [
            'products' => $products,
            'search' => $request->search
        ]);
    }

    // Route '/'
    public function index() {
        // Poster
        $poster = Poster::all();
        
        // Minyak Goreng
        $minyakgoreng = json_decode(Product::with('category')->where('category_id', 1)->get());
        $limitminyakgoreng = array_slice($minyakgoreng, 0, 5);


        // Minyak Goreng
        $mieinstan = json_decode(Product::with('category')->where('category_id', 2)->get());
        $limitmieinstan = array_slice($mieinstan, 0, 5);


        return view('welcome', [
            'title' => 'Bukagerai.com | Situs Gerai Palugada',
            'posters' => $poster,
            'minyakgoreng' => $limitminyakgoreng,
            'mieinstan' => $limitmieinstan
        ]);
    }

    // Route 'product/id'
    public function productdetail($id) {
        // Get Specified Product by Id
        $product = Product::with('category')->find($id);

        return view('detail.detailproduct', [
            'product' => $product
        ]);
    }

    public function productsbycategory($category) {
        $request = ucwords(str_replace('-', ' ', $category));
        $cat = ProductsResource::collection(Product::all());
        $product = ProductsResource::collection($cat->where('category.name', '=', $request)); 
        $category = $product->first();

        return view('detail.detailcategory', [
            'category' => $category->category->name,
            'product' => $product
        ]);
    }

}
