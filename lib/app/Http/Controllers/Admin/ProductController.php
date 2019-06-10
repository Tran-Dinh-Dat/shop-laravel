<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\Category;
use DB;


class ProductController extends Controller
{
    public function getProduct() 
    {
        $data['productlist'] = DB::table('vp_products')->join('vp_categories','vp_products.prod_cate','=', 'vp_categories.cate_id')
        ->orderBy('cate_id', 'desc')->get();
        return view('backend.product', $data);
    }
    public function getAddProduct() 
    {
        $data['catelist'] = Category::all();
        return view('backend.addproduct', $data);
    }
    public function postAddProduct(AddProductRequest $req) 
    {
        $filename = $req->img->getClientOriginalName();
        $product = new Product;
        $product->prod_name = $req->name;
        $product->prod_slug = str_slug($req->name);
        $product->prod_img = $filename;
        $product->prod_accessories = $req->accessories;
        $product->prod_price = $req->price;
        $product->prod_warranty = $req->warranty;
        $product->prod_promotion = $req->promotion;
        $product->prod_condition = $req->condition;
        $product->prod_status = $req->status;
        $product->prod_description = $req->description;
        $product->prod_cate = $req->cate;
        $product->prod_featured = $req->featured;
        $product->save();
        $req->img->storeAs('avatar', $filename);
        return redirect()->back();
    }
    public function getEditProduct() 
    {
        return view('backend.editproduct');
    }
    public function postEditProduct() 
    {
        
    }
    public function getDeleteProduct() 
    {
        
    }
}
