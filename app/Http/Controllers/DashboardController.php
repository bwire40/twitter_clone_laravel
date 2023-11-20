<?php

namespace App\Http\Controllers;

use App\Models\idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index function
    public function index()
    {


        $idea = new idea([
            "content" => "hello",
            "likes" => 200,
        ]);

        $idea->save();


        // dump(Idea::all());

        return view("dashboard", [
            "ideas" => Idea::orderBy('created_at', 'DESC')->get(),
        ]);
    }

    // contact function
    public function terms()
    {
        return view("terms");
    }
}
