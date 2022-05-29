<?php

namespace App\Http\Controllers\Evaluator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Evaluator;
use Illuminate\Support\Facades\Auth;

class EvaluatorController extends Controller
{
    function create(Request $request){
          //Validate inputs
          $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:evaluators,email',
             'password'=>'required|min:5|max:30',
             'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $evaluator = new Evaluator();
          $evaluator->name = $request->name;
          $evaluator->email = $request->email;
          $evaluator->password = \Hash::make($request->password);
          $save = $evaluator->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as Evaluator');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:evaluators,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in evaluators table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('evaluator')->attempt($creds) ){
            return redirect()->route('evaluator.dashboard');
        }else{
            return redirect()->route('evaluator.login')->with('fail','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::guard('evaluator')->logout();
        return redirect('/');
    }
}
