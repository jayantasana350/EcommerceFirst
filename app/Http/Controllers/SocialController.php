<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    function LoginWithGithub(){
        return Socialite::driver('github')->redirect();
    }

    function GithubCallBackURL(){
        $user = Socialite::driver('github')->user();

        if (User::where('email', $user->getEmail())->exists()) {
            $getuser = User::where('email', $user->getEmail())->first();
            Auth::guard()->login($getuser, true);
            return redirect()->to('/home');
        }
        else {
            $create_user = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'provider' => 'github',
                'provider_id' => $user->getId()
            ]);
            Auth::guard()->login($create_user, true);
            return redirect()->to('/home');
        }
    }

    function LoginWithGoogle(){
        return Socialite::driver('google')->redirect();
    }

    function GoogleCallBackURL(){
        $user = Socialite::driver('google')->user();

        if (User::where('email', $user->getEmail())->exists()) {
            $getuser = User::where('email', $user->getEmail())->first();
            Auth::guard()->login($getuser, true);
            return redirect()->to('/home');
        }
        else {
            $create_user = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'provider' => 'google',
                'provider_id' => $user->getId()
            ]);
            Auth::guard()->login($create_user, true);
            return redirect()->to('/home');
        }
    }
}
