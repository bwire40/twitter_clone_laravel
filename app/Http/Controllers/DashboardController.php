<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index function
    public function index()
    {


        $idea = new Idea([
            "content" => "hello",
            "likes" => 200,
        ]);

        $idea->save();


        // dump(Idea::all());
        return view("dashboard", [
            "ideas" => Idea::orderBy("created_at", "desc")->get(),
        ]);
    }

    // contact function
    public function terms()
    {
        return view("terms");
    }
}
