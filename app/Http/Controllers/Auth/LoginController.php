<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $input = $request->all();
        $this->validate($request,[
             'email' => ['required', 'string', 'email', 'max:255', 'exists:users'],
             'password' => ['required', 'string', 'min:8']
        ]);
 
        if( auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password'])) ){
      
         if( Auth()->user()->role == "admin"){
             return redirect()->route('admin.index');
         }
 
        }else{
            return redirect()->redirect()->route('login')->with('error','Email dan Password Anda salah!');
        }
     }
}
