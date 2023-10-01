<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class GoogleAuthController extends Controller
{
    //
    public function redirect()
    {
        # code...
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();
            // ->orWhere('email', $google_user->getEmail())->first();
        
            if (!$user) {
                // Create a new user with the Google ID and email address
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                ]);

                Auth::login($new_user);
                return redirect()->intended('dashboard');

            } else {
                // Log in the existing user
                Auth::login($user);
                return redirect()->intended('dashboard');
            }
            
        
        } catch (\Exception  $th) {
            // Display an error message in a pop-up box
            Log::error('Google OAuth2 Error: ' . $th->getMessage());
            dd($th);
           return redirect()->back()->withErrors(['error' => 'Something went wrong! ' . $th->getMessage()]);
        }
        
    }
}
