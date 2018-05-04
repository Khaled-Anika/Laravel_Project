<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('login');
    }

    public function verify(Request $request)
    {
    	//$sql = "SELECT * FROM users WHERE username='$request->username' AND password='$request->password'";
        //$user = DB::select($sql);
  
        $user = DB::table('login')
            ->where('username', $request->username)
            ->where('password', $request->password)
            ->first();

       /* $request->session()->put('username', $request->input('username'));
        return view('customer.index')
                ->with('username',$request->session()->get('username'));*/

		if(!$user)
    	{
    		$request->session()->flash('message', 'Invalid username or password');
            return redirect('/login');
    	}
    	else
    	{
            if($user->role == 'admin')
            {
                $request->session()->put('user', $user);
                return redirect('/admin');
            }
            elseif($user->role == 'customer')
            {
                $request->session()->put('user', $user);
                return redirect('/customer');
            }
   	 	}
    }

    public function profile($id)
    {
        $pro = DB::table('customer')
            ->where('id', $id)
            ->first();
        return view('customer.profile')
            ->with('pro', $pro);
    } 
}
