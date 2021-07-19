<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users|email|max:255',
            'username' => 'required|unique:users|alpha_dash|max:20',
            'password' => 'required|min:6'
        ]);

        $user = new User(
            [
                'email' => $request->get('email'),
                'username' => $request->get('username'),
                'password' => bcrypt($request->get('password'))
            ]);
        $user->save();
        return redirect('/')->with('success', 'Вы успешно зарегестрировались!');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(request $request)
    {
        $request->validate(
            [
            'email' => 'required|max:255',
            'password' => 'required|min:6'
            ]);

        if (!Auth::attempt( $request->only(['email', 'password']), $request->has('remember') ))
        {
            return redirect()->back()->with('info', 'Неправильный логин или пароль');
        }
        return redirect()->route('home')->with('info', 'Вы вошли');
    }

    public function Signout()
    {
        Auth::logout();

        return redirect()->route('home')->with('info', 'Вы вышли');
    }
}
