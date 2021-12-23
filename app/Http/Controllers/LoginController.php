<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginform()
    {
        return view('login');

    }
    public function adduser(Request $request)
    {
        // dd($request->all());
      
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
      $data=array(

        'name'=> $request->name,
        'email'=> $request->email,
        'password'=>Hash::make($request->password),
      );

      User::create($data);
     return redirect()->back();
     
    }

    public function loginprocess(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];

        if(Auth::attempt($credentials)) {
            return redirect()->route('dashboard');       
        }else{
            return redirect()->back()
            ->with(array('message'=>'invalid email or password'));
            
        }
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
