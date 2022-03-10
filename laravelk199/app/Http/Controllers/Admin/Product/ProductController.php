<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Slug\Slug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){
        // $products = DB::table('products')                                         //  lab9 Query Builder & Seeder
        //     ->join("categories", "products.categories_id", "=", "categories.id")
        //     ->select(
        //         "products.id",
        //         "image",
        //         "code",
        //         "products.name as products_name",
        //         "price",
        //         "state",
        //         "categories.name as categories_name"
        //     )
        //     ->orderBy("products.id", "DESC")
        //     ->get()
        //     ->all();
        $products=Product::orderBy("id","DESC")->paginate(5);                        //  lab12 Model phân trang
        return view("backend/products/listproduct",["products"=>$products]);  
    }
    public function create(){
        $str = "Học Viện Công Nghệ Vietpro";
        echo Slug::getSlug($str);
        // $categories = Category::all()->toArray();
        // return view("backend/products/addproduct", ["categories"=> $categories]);     //  lab13 đệ quy và helpers
    }
    public function store(ProductRequest $ProductRequest){
        return view("backend/products/addproduct");
    }
    public function edit(){
        return view("backend/products/editproduct");
    }
    public function update(){
        return view("backend/products/editproduct");
    }
    public function delete(){
        return "delete";
    }
}
