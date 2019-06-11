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
        $req->img->storeAs('avatar', $filename); // di chuyển tới thư mục avatar ( lib/storage/app/avatar)
        return redirect()->back()->with('success','Thêm sản phẩm thành công!');
    }
    public function getEditProduct($id) 
    {
        $data['product'] = Product::find($id);
        $data['catelist'] = Category::all();
        return view('backend.editproduct', $data);
    }
    public function postEditProduct(Request $req, $id) 
    {
        $product = new Product;
        $arr['prod_name'] = $req->name;
        $arr['prod_slug'] = str_slug($req->slug);
        $arr['prod_accessories'] = $req->accessories;
        $arr['prod_price'] = $req->price;
        $arr['prod_warranty'] = $req->warranty;
        $arr['prod_promotion'] = $req->promotion;
        $arr['prod_condition'] = $req->condition;
        $arr['prod_status'] = $req->status;
        $arr['prod_description'] = $req->description;
        $arr['prod_cate'] = $req->cate;
        $arr['prod_featured'] = $req->featured;
        if ($req->hasFile('img')) {
            $img = $req->img->getClientOriginalName(); // lấy tên ảnh
            $arr['prod_img'] = $img;
            $req->img->storeAs('avatar', $img); // di chuyển tới thư mục avatar ( lib/storage/app/avatar)
        }
        $product::where('prod_id', $id)->update($arr);
        //return redirect('admin/product');
        return redirect()->back()->with('success','Sửa sản phẩm thành công!');
    }
    public function getDeleteProduct($id) 
    {
        Product::destroy($id);    
        return back();
    }
}
