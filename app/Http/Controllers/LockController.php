<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use Hash;

class LockController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function lockscreen()
    {
        return view('lockscreen');
    }
    public function CheckLockscreen(Request $request)
    {
        $this->validate($request, [
            'password'     => 'required',
        ]);
        $data = $request->all();
        
        $user = Auth::user();
        if(!Hash::check($data['password'], $user->password)){
             return back()->with('error','The specified password does not match the database password');
        }else{
           return redirect('/home');
        }
    }
}
