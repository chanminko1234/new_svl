<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class LoginController extends Controller
{

    public function getLogin(){
        return view('backend.user.login');
    }

    public function postLogin(Request $request){

        $this->validate($request, [
            'Email' => 'required|email',
            'password'  => 'required|min:4'
            ]);

        $credentials = [
        'email'    => $request->input("Email"),
        'password' => $request->input("password"),
        ];

        $remember = $request->input("cbRemember");

    try {
           if (empty($remember)) {

               $user = \Sentinel::authenticate($credentials);

               if(!$user) {
                   Alert::error('Login Error!', 'Login')->persistent("Retry");
                   return redirect()->to("backend/login");
               } 

           } else {

                $user = \Sentinel::findByCredentials($credentials);
                $login = \Sentinel::loginAndRemember($user);
                if(!$user) {
                   Alert::error('Login Error!', 'Login')->persistent("Retry");
                   return redirect()->to("backend/login");
                } 
           }
           

        } catch(NotActivatedException $e) {

            Alert::error('Activation Needed', 'Activation')->persistent("Close This");
            return redirect()->to("login");

        }

        return redirect()->to('backend/role');

    }

    public function logout(){
        \Sentinel::logout();
        return redirect()->to("/");
    }
}
