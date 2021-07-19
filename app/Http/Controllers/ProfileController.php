<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function getProfile($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user){
            abort(404);
        }

        return view('profile.index', compact('user'));
    }

    public function getEdit()
    {
       return view('profile.edit');
    }

    public function postEdit(Request  $request)
    {
        $this->validate($request,
            [
                'first_name'=> 'alpha|max:50',
                'second_name'=> 'alpha|max:50',
                'location'=> 'alpha|max:50',
            ]);

        Auth::user()->update([
            'first_name'=> $request->input('first_name'),
            'second_name'=> $request->input('second_name'),
            'location'=> $request->input('location'),
        ]);
        return redirect()->route('getEdit')->with('info', 'Профиль обновлен!');
    }
}
