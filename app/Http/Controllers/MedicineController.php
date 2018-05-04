<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    public function index(Request $request)
    {
    	$request->session()->put('username', $request->input('username'));
    	return view('medicine.create')
    		->with('username', $request->session()->get('username'));
    }

    public function store(Request $request)
    {
        $params = [
            'med_name' => $request->med_name,
            'indication' => $request->indication,
            'generic' => $request->generic,
            'price' => $request->price,
            'quantity' => $request->quantity
        ];

        /*$rules = [
            'name' => "required",
            'email' => 'email'
        ];

        $this->validate($request, $rules);*/

        DB::table('medicine')
            ->insert($params);
        $request->session()->flash('message', 'Medicine added to database');
        return redirect('/add_medicine');
    }

    public function retrieve(Request $request)
    {
    	$medlist = DB::table('medicine')
    		     ->get();
    	$request->session()->put('username', $request->input('username'));
    	return view('medicine.retrieve')
    		->with('medlist', $medlist);
    }

    public function topMed(Request $request)
    {
        $topmedlist = DB::table('buy')
                    ->orderBy('buy_count', 'desc')
                    ->get();
        $request->session()->put('username', $request->input('username'));
        return view('medicine.top_medicine')
            ->with('topmedlist', $topmedlist);
    }

    public function topUser(Request $request)
    {
        $topuserlist = DB::table('order_report')
                    ->orderBy('orderCost', 'desc')
                    ->get();
        $request->session()->put('username', $request->input('username'));
        return view('medicine.top_user')
            ->with('topuserlist', $topuserlist);
    }

    public function topSell(Request $request)
    {
        $topsells = DB::table('order_report')
                    ->sum('orderQuantity')
                    ->get();
        
        $request->session()->put('username', $request->input('username'));
        return view('medicine.sell_count')
            ->with('topsells', $topsells);
    }

    public function edit($id)
    {
    	$med = DB::table('medicine')
    		->where('id', $id)
    		->first();
    	return view('medicine.edit')
    		->with('med', $med);
    }

    public function show($id)
    {
        $med = DB::table('medicine')
            ->where('id', $id)
            ->first();
        return view('medicine.view')
            ->with('med', $med);
    }

    public function update(Request $request)
    {
        $params = [
            'med_name' => $request->med_name,
            'indication' => $request->indication,
            'generic' => $request->generic,
            'price' => $request->price,
            'quantity' => $request->quantity
        ];

        DB::table('medicine')
            ->where('id', $request->mid)
            ->update($params);

        return redirect('/retrieve_medicine');
    }

    public function destroy($id)
    {
        DB::table('medicine')
            ->where('id', $id)
            ->delete();

        return redirect('/retrieve_medicine');
    }

    public function medSearch(Request $request)
    {
       /* $medicine = medicine::where('med_name','like',"%$search%"); 
        return view('medicineList')
        ->with('medicine',$medicine);*/
        $search = request()->input('search');

        $medicine = DB::table('medicine')
            ->where('med_name','like',"%$search%")
            ->orWhere('indication','like',"%$search%")
            ->orWhere('id','like',"%$search%")
            ->get();
            return view('search-results')
                    ->with('medicine',$medicine);
    }

    public function black()
    {
        return view('blackListed');
    }
}

