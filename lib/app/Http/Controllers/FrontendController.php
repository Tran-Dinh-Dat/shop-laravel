<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;

class FrontendController extends Controller
{
    public function getHome()
    {
        $data['featured'] = Product::where('prod_featured', 1)->orderBy('prod_id','desc')->take(8)->get();
        $data['new'] = Product::orderBy('prod_id','desc')->take(8)->get();
        return view('frontend.home', $data);
    }
    public function getDetail($id)
    {
        $data['item'] = Product::find($id);
        $data['comments'] = Comment::where('cmt_product',$id)->get();
        return view('frontend.details', $data);
    }
    public function getCategory($id)
    {
        $data['cateName'] = Category::find($id);
        $data['items'] = Product::where('prod_cate', $id)->orderBy('prod_id','desc')->paginate(8);
        return view('frontend.category', $data);
    }
    public function postComment(Request $req,$id)
    {
        $comment = new Comment;
        $comment->cmt_name =  $req->name;
        $comment->cmt_email =  $req->email;
        $comment->cmt_content =  $req->content;
        $comment->cmt_product =  $id;
        $comment->save();
        return back();
    }
    public function getSearch(Request $req)
    {
        $result = $req->result;
        $result = str_replace(' ', '%', $result);
        $data['keyword'] = $result;
        $data['items'] = Product::where('prod_name', 'like', '%'.$result.'%')->paginate(8);
        return view('frontend.search',$data);
    }
}
