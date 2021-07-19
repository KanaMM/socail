<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    public function getResults(Request $request)
    {
        $query = $request->input('query');

        if (empty($query)){
            return view('search.results')->with('users', []);
        }

        $users = User::where('first_name', 'LIKE', "%{$query}%")
                                        ->orWhere('username', 'LIKE', "%{$query}%")
                                        ->get();


        return view('search.results')->with('users', $users);
    }
}
