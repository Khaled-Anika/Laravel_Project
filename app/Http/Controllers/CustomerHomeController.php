<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerHomeController extends Controller
{
    public function index(Request $request)
    {
       
        //print_r( $request->input('username'));
        $request->session()->put('username', $request->input('username'));
        return view('customer.index')
        		->with('username',$request->session()->get('username'));
    }

    public function profile($id)
    {
        $pro = DB::table('customer')
            ->where('username', $id)
            ->first();
        //dd($pro);
        return view('customer.profile')
            ->with('pro', $pro);
    }

    public function edit($id)
    {
    	$userPro = DB::table('customer')
    		->where('id', $id)
    		->first();
    		//dd($userPro);
    	return view('customer.edit')
    		->with('userPro', $userPro);
    }

    public function update(Request $request)
    {
        $cusparams = [
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
        ];

        $loginparams = [
            'username' => $request->username,
        ];

        DB::table('login')
            ->where('id', $request->uid)
            ->update($loginparams);
            
        DB::table('customer')
            ->where('id', $request->uid)
            ->update($cusparams);

        

        return redirect('/customer');
    } 
}
