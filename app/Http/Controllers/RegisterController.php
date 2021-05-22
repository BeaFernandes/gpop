<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/index', ['title' => 'Usuários'], ['users' => User::all()]);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function store(Request $data)
    {
        if(isset($_POST['writePermission'])) {
            $hasWritePermission = 1;
        } else {
            $hasWritePermission = 0;
        }

        if(isset($_POST['admin'])) {
            $isAdmin = 1;
        } else {
            $isAdmin = 0;
        }

        if(isset($_POST['active'])) {
            $isActive = 1;
        } else {
            $isActive = 0;
        }
        
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'writePermission' => $hasWritePermission,
            'admin' => $isAdmin,
            'active' => $isActive,
        ]);

        return redirect('/user');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/create', ['title' => 'Novo Usuário'], ['users' => User::all()]);
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user/edit', ['title' => 'Alterar Usuário'], ['user' => $user]);
    }

    public function update(Request $data, $id)
    {
        if(isset($_POST['writePermission'])) {
            $hasWritePermission = 1;
        } else {
            $hasWritePermission = 0;
        }

        if(isset($_POST['admin'])) {
            $isAdmin = 1;
        } else {
            $isAdmin = 0;
        }

        if(isset($_POST['active'])) {
            $isActive = 1;
        } else {
            $isActive = 0;
        }

        $user = User::find($id);
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'writePermission' => $hasWritePermission,
            'admin' => $isAdmin,
            'active' => $isActive,
        ]);

        return redirect('/user');
    }
}
