<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use User;
use Input;
use Auth;

class UserController extends Controller
{
    protected $userRepository;
    protected $nbrPerPage = 4;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->middleware('auth');
    }

    public function user_list()
    {
        $view = DB::select('select * from users');

        return view('user_list', ['view' => $view]);
    }
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
        $links = $users->render();
        return view('index', compact('users', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $user = $this->userRepository->store($request->all());
        return redirect('user_list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->userRepository->getById($id);
        return view('show',  compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->getById($id);
        return view('edit',  compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {   
        $this->userRepository->update($id, $request->all());
        if(Input::file('avatar')){
            $user = $this->userRepository->getById($id);
            $extension = input::file('avatar')->getClientOriginalExtension();
            $filename = $user->name . $id .'.'.$extension;
            $destination = public_path().'\uploads\avatars';
            Input::file('avatar')->move($destination, $filename);
            $this->userRepository->update($id, array('avatar' => $filename));
    	}  
        if(Input::file('logo')){
            $user = $this->userRepository->getById($id);
            $extension = input::file('logo')->getClientOriginalExtension();
            $filenameLogo = 'default.'.$extension;
            $this->userRepository->update($id, array('logo' => $filenameLogo));
        } 
        return redirect('user_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userRepository->destroy($id);
        return back();
    }
	private function setAdmin($request)

    {
        if(!$request->has('admin'))
        {
            $request->merge(['admin' => 0]);
        }       
    }
}
