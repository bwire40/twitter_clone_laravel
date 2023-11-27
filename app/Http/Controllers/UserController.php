<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {


        return view("auth.register");
    }
    public function login(Request $request)
    {
        return view("auth.login");
    }
    public function logout(Request $request)
    {
        // clear all sessions and cookies
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // reditect back to login
        return redirect()->route("login")->with("success", "Signed Out!");
    }
    public function store(Request $request)
    {

        // validate data
        $validated = $request->validate([
            "name" => "required|max:50|min:3",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed|min:8",
        ]);
        // create user


        User::create([
            "name" => $validated["name"],
            "email" => $validated["email"],
            "password" => Hash::make($validated["password"]),
        ]);

        // reditect back
        return redirect()->route("login")->with("success", "Account Created Successfully!");
    }
    public function authenticate(Request $request)
    {

        // validate data
        $validated = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        //attemp to authenticate the user with given data
        if (auth()->attempt($validated)) {
            // clear all available sessions and regenerate new one
            $request->session()->regenerate();

            // redirect to the home page
            return redirect()->route("home")->with("success", "Welcome back!");
        }

        // reditect back to login if there was an error
        return redirect()->route("login")->withErrors(["error" => "User with that account not found!"]);
    }
}
