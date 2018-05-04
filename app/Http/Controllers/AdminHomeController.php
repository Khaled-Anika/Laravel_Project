<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminHomeController extends Controller
{
    public function index(Request $request)
    {
       
        //print_r( $request->input('username'));
        $request->session()->put('username', $request->input('username'));
        return view('admin.index')
        		->with('username',$request->session()->get('username'));
    } 
}
