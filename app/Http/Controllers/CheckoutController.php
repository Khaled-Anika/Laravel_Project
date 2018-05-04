<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{

	public function index(Request $request)
    {
    	$request->session()->put('username', $request->input('username'));
    	return view('thank_you')
    		->with('username', $request->session()->get('username'));
    }

    public function store(Request $request)
    {
       // foreach (Cart::content() as $item) {
        $orders = [
            'customerName' => session('user')->username,
            'orderDescription' => Cart::content(),
            'orderQuantity' => Cart::count(),
            'orderCost' => Cart::subtotal(),
        ];
        // }

        //dd(session('user')->username);

        DB::table('order_report')
            ->insert($orders);

        Cart::instance('default')->destroy();
        return redirect('/thankYou');
    }
}
