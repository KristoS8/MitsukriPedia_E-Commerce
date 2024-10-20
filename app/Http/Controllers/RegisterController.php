<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function store(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|max:20|string',
            'no_telp' => 'required|unique:users|string|regex:/^\+62[0-9]{10,15}$/',
            'email' => 'required|max:100|email:dns',
            'password' => 'required|confirmed',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        session()->flash('success', 'Your Account Has Been Created');

        return redirect('/login');
    }
}
