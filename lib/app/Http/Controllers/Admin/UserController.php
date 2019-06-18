<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
class UserController extends Controller
{
    public function getUser() 
    {
        // $data['comment'] = Comment::all();
        // return view('backend.user',$data);
$comment = Comment::with('pro')->OrderBy('cmt_id','desc')->get();
$pro_id = Product::pluck('prod_name','prod_id');
return view('backend.user', compact('comment','pro_id'));
    }
}
