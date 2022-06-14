<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerLogin;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginPageController extends Controller
{
    public function login(){
        return View('login');
    }

    public function loginsubmit(Request $request){
        $validate = $request->validate([
            "username"=>"required|min:5|max:10",
            "lpassword"=>'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/'
            ],
        );

        if($validate){

            // $uname = Session('uname');
            // $password = Session('password');

            $customers = Customer::where('username',$request->username)
            ->where('password',$request->lpassword)
            ->first();


            if($customers){
                session()->put('user',$request->username);
                return redirect()->route('home');
            }
            else{
                $error = "Username and Password Incorect. Try Again";
                return redirect()->route('login')
                ->with('error', $error);
            }
        }
    }

    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}
