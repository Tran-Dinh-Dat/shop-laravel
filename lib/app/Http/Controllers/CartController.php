<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;
use Mail;
class CartController extends Controller
{
    public function getAddCart($id)
    {
        $product = Product::find($id);
        Cart::add(['id' => $id, 'name' => $product->prod_name, 'qty' => 1, 'price' => $product->prod_price, 'options' => ['img' => $product->prod_img]]);
        return redirect('cart/show');
    }
    public function getShowCart()
    {
        $data['items'] = Cart::content();
        $data['total'] = Cart::total();
        return view('frontend.cart', $data);
    }
    public function getDeleteCart($rowId)
    {
        if ($rowId == 'all') {
            Cart::destroy();
        }else {
            Cart::remove($rowId);
        }
        return back();
    }
    public function getUpdateCart(Request $req) 
    {
        Cart::update($req->rowId, $req->qty);
    }
    public function postComplete(Request $req) 
    {
        $data['info'] = $req->all();
        $data['cart'] = Cart::content();
        $data['total'] = Cart::total();
        $email = $req->email;
        Mail::send('frontend.email', $data, function ($message) use($email) {
            $message->from('trandinhdat120@gmail.com', 'Tran Dinh Dat');
            $message->to($email, $email);
            $message->cc('dattdpd02368@fpt.edu.vn', 'Dat Tran');
            $message->subject('Xác nhận hóa đơn mua hàng Laravel shop');
           
        });
        return redirect('complete');
    }
    public function getComplete()
    {
        return view('frontend.complete');
    }
}
