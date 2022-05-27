<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function registerPage(){
        return view('register');
    }

    public function loginPage(){
        return view('login');
    }

    public function register(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ]);

        Profile::create([
            'user_id' => $user->id,
            'profession' => $request->profession,
            'address' => $request->address
        ]);

        return redirect('/login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        if(auth()->attempt(['email'=>$email, 'password'=>$password])){
            return redirect('/');
        }else{
            return redirect()->back();
        }
        return redirect('/');
    }

    public function logout(Request $request){
        auth()->logout();
        return redirect('/login');
    }
}
