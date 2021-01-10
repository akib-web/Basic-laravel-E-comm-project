<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Product;
use Illuminate\Http\Request;
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
}
