<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyMedicineController extends Controller
{
	public function __construct()
    {
        //$this->middleware('sess');
    }
    public function index(Request $request)
    {
    	$medlist = DB::table('medicine')
    		->get();
    	$request->session()->put('username', $request->input('username'));
    	return view('medicine.medicineList')
    		->with('medlist', $medlist)
    		->with('username', $request->session()->get('username'));
        /*$var = $request->input('username');
        print_r($request->input('username'));*/
    }
}
