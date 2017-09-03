<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;
use Customer;
use Image;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $erreur = DB::select('select * from erreur');
        return view('home', ['erreur' => $erreur]);
    }
    public function user_edit()
    {
        return view('user_edit');
    }
    public function user_view()
    {
        return view('user_view', array('user' => Auth::user()));
    }


    public function datatables()
    {
        $view = DB::select('select * from os_version');
        $system = DB::select('select * from system_info');
        return view('datatables', ['view' => $view], ['system' => $system]);
    }
    public function datatables1()
    {
        $view = DB::select('select * from os_version');
        return view('datatables1', ['view' => $view]);
    }
    public function datatables2()
    {
        $system = DB::select('select * from system_info');
        return view('datatables2', ['system' => $system]);
    }
    public function datatables3()
    {
        $logged = DB::select('select * from logged_in_users');
        return view('datatables3', ['logged' => $logged]);
    }

    public function ErrorDestroy($id)
    {
        $this->destroy($id);
        return back();
    }
    
    
}