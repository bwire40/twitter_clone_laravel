<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index function
    public function index(Request $request)
    {
        // dump(Idea::all());

        // check if there is a search
        // check search value with db

        $ideas = Idea::orderBy('created_at', 'DESC'); //fetch data from database
        // $comments = Comment::orderBy('created_at', 'DESC');

        if (request()->has("search")) {
            $ideas = $ideas->where("content", "like", '%' . $request->get("search", '') . '%');
        }

        $show = false;
        return view("dashboard", [
            "ideas" => $ideas->paginate(5), //ordered by the time created
            "show" => $show,
        ]);
    }

    // contact function
    public function terms()
    {
        return view("terms");
    }
}
