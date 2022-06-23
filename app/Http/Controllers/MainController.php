<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
//        $users = Phonebook::all();
//        dd($users);
//        $users = Phonebook::query()->orderBy('name')->get();
        $users = Phonebook::query()->orderBy('name')->paginate(10);
        return view('home', compact('users'));
    }

    public function search(Request $request)
    {
        $s = $request->s;
        $users = Phonebook::query()->where('name', 'LIKE', "%{$s}%")
            ->orderBy('name')->paginate(10);
//        dd($s);
        return view('search', compact('users', 's'));
    }
}
