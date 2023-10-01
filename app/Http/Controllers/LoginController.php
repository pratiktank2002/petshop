<?php

namespace App\Http\Controllers;

use App\Models\Logindetail;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function loginin(Request $request)
    {
        $customer = new Logindetail;
        if ($customer) {
            $request->validate(
                [
                    'name' => 'required',
                    'email' => 'required|email',
                    'password' => 'required|confirmed',
                    'password_confirmation' => 'required',
    
                ]
                );
    
            $customer = new Logindetail;
            $customer->name = $request['name'];
            $customer->email = $request['email'];
            $customer->password = md5($request['password']);
            $customer->save();
            
            return view('frontend.index');
        }
        else{
            Auth::login($customer);
            return redirect()->intended('dashboard');
        }
        
    }

    // Facebook login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Facebook callback
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect()->route('home');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = user::where('email', '=' , $data->email)->first();
        if (!$user) {
            $user = new User();

            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avtar = $data->avtar;
            $user->save();
        }

        Auth::login($user);
    }

}
