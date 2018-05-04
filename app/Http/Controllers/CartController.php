<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;
//use JulioBitencourt\Cart\Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function index(Request $request)
    {
        $qty = [

            'id' => $request->id,
            'quantity' => $request->quantity,
        ];

        $request->session()->put('qty', $qty);
        return view('cart.crt');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
                   return $cartItem->id === $request->id;
               });
       
            if ($duplicates->isNotEmpty()) {
               return redirect('/cart')->with('success_message', 'Item is already in your cart!');
            }
            
            Cart::add($request->id, $request->med_name, 1, $request->price);
            return redirect('/cart')->with('success_message', 'Item has been added to your cart!');
               
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*$validator = Validator::make($request->all(),[
            'quantity' => 'required|numeric|between:1,5'
        ])

        if($validator->fails()){
            session()->flash('errors', collect(['Quantity must be between 1 and 5']));
            return response()->json(['success' => false], 400);
        }*/

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity has been updated successfully!');
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
       // $this->cart->delete($id);
        return redirect ('/cart')
                     ->with('success_message','Item has been removed');  
    }
}
