<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    protected $redirectTo = '/password/verify';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::get('name');
        return view('profil')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // user::insert('insert into users (id, username, email, password, update_at, created_at) values (20, 50, 100, 0, 0)', [1, 'Dayle']);

        // user::select("select * from users where email = 'email' ");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('register');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function simpandata(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/homepage');
    }

    public function homepage()
    {
        return view('homepagesudahlogin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function panggildata(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/login')->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->first();

        auth()->login($user);

        return redirect('/homepage');
    }

    public function profil()
    {
        $user = User::find(Auth::user()->id);

        return view('profil')->with('user', $user);
    }

    /*public function login(){
        return view('login');
    }*/
    //  public function panggildata(Request $request){

    //      if($user = Auth::attempt([
    //          'email' => ('email'),
    //          'password' => ('password')
    //      ])){
    //          return view('homepagesudahlogin');
    //      }else{
    //          return "Maaf email atau password yang anda masukan tidak sesuai.";
    //      }
    //     return view('homepagesudahlogin');
    //     if (Auth::attempt(['email' => 'email', 'password' => 'password'])) {
    //         return view('homepagesudahlogin');
    //     }else{
    //         return "Maaf email atau password yang anda masukan tidak sesuai.";
    //     }
    // }
}
