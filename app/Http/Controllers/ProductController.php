<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Product;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session ;
// use Session;
class ProductController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
    function details($id){
         $data = Product::find($id);
         return view('/details',['product'=>$data]);
    }
    function search(Request $req){
        $data = Product::
        where('name','like','%'.$req->input('query').'%')
        ->get();

        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user'))
        {
            $cart = new cart;
            $cart->user_id=session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }

    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
// --
    function cartList(){
        if(session()->has('user'))
        {
            $userId = Session::get('user')['id'];
            $products = DB::table('cart')
                ->join('products','cart.product_id','=','products.id')
                ->where('cart.user_id',$userId)
                ->select('products.*','cart.id as cart_id')
                ->get();
            return view('cart',['products'=>$products]);
        }
        else
        {
            return redirect('/login');
        }

    }
    // ---------
    function removeCart($id)
    {
        cart::destroy($id);
        return redirect('/cart_list');
    }
    // ---
    function orderNow(){
        if(session()->has('user'))
        {
            $userId = Session::get('user')['id'];
            $total = DB::table('cart')
                ->join('products','cart.product_id','=','products.id')
                ->where('cart.user_id',$userId)
                ->sum('products.price');
            return view('ordernow',['total'=>$total]);
        }
        else
        {
            return redirect('/login');
        }
    }
    // ---
    function orderPlace(Request $req){
        $userId = session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach ($allCart as $cart) {
            $order = new order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_method = $req->payment;
            $order->payment_status = 'pending';
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        return redirect('/');
    }
    // --
    function orderList(){
        if(session()->has('user'))
        {
            $userId = Session::get('user')['id'];
            $orders = DB::table('orders')
                ->join('products','orders.product_id','=','products.id')
                ->where('orders.user_id',$userId)
                ->get();
            return view('orderlist',['orders'=>$orders]);
        }
        else
        {
            return redirect('/login');
        }
    }
}
