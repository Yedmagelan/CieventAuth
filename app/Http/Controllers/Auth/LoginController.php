<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

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

        // if( Auth()->user()->role == 0){
        //     return route('admin.dashbord');
        // }
        // else
        if( Auth()->user()->status == 0){

          if( Auth()->user() == 1){
            return route('admin.dashbord');
          }
           if( Auth()->user() == 2){
            return route('user.dashbord');
          }
        }
          else{

            return redirect()->back()->with('error','Votre compte a été desacté veuillez contacter administrateur');
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
      
        if( auth()->user()->status == 1){
   
            if( auth()->user()->role == 1){
                return redirect()->route('admin.dashbord');
            }
            if( auth()->user()->role == 2 ){
                  return redirect()->route('user.dashbord');
            }
        // else{
        //     return redirect()->back()->with('error','Votre compte a été desacté veuillez contacter administrateur');
        // }

       }
           else{
            return redirect()->back()->with('error','Votre compte a été desacté veuillez contacter administrateur');
          }
        } else{
           return redirect()->back()->with('error','Email et le mot de passe sont erronés');
       }
     
    }
}
