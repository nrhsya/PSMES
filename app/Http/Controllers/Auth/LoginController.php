<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Auth;

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

    protected function redirectTo(){
        if( Auth()->user()->role == 1){
            return route('coordinator.dashboard');
        }
        else if( Auth()->user()->role == 2){
            return route('student.dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $input = $request->all();
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if( auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password'])) ){
           
            if( auth()->user()->role == 1){
                return redirect()->route('coordinator.dashboard');
            }
            elseif( auth()->user()->role == 2){
                return redirect()->route('student.dashboard');
            }

        }else{
            return redirect()->route('login')->with('error','Email and password are wrong');

        }
    }

    //redirect users based on Role after login
    /*public function redirectTo()
    {
        switch(Auth::user()->role){
            case 'psmcoordinator':
            $this->redirectTo = '/psmcoordinator';
            return $this->redirectTo;
                break;
            case 'psmevaluator':
                $this->redirectTo = '/psmevaluator';
                return $this->redirectTo;
                break;
            case 'student':
                $this->redirectTo = '/student';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
    }*/
}
