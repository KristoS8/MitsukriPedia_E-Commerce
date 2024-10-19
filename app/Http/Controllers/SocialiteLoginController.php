<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialiteLoginController extends Controller
{
    public function redirectGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle() {
        $googleUser = Socialite::driver('google')->user();
        
        // dd($googleUser->name);
        // cek user
        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
            $userLogin = User::create([
                'name' => $googleUser->name,
                'username' => $googleUser->user["given_name"],
                'email' => $googleUser->email,
                'password' => bcrypt(Str::random(10)),
            ]);

            Auth::login($userLogin);
        }

        Auth::login($user);

        return redirect('/dashboard');
    }
}
