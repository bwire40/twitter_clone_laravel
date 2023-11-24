<?php

namespace App\Http\Controllers;

use App\Models\idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index function
    public function index()
    {
        // dump(Idea::all());

        // check if there is a search
        // check search value with db

        $ideas = Idea::orderBy('created_at', 'DESC'); //fetch data from database

        if (request()->has("search")) {
            $ideas = $ideas->where("content", "like", '%' . request()->get("search", '') . '%');
        }

        $show = true;
        return view("dashboard", [
            "ideas" => $ideas->paginate(5), //ordered by the time created
            "show" => $show
        ]);
    }

    // contact function
    public function terms()
    {
        return view("terms");
    }
}
