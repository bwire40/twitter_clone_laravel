<?php

namespace App\Http\Controllers;

use App\Models\idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store/create our idea


        // validate the data to limiit incorrect inputs

        // request function helps access the request from browser similar to $_POST
        request()->validate([
            "content" => "required|min:5|max:255",
        ]);

        // create the idea
        $idea = Idea::create([
            "content" => request()->get("content"),

        ]);

        return redirect()->route("home")->with("success", "Twit posted successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(idea $idea)
    {

        $show = true;

        return view("ideas.show", compact("idea", "show"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(idea $idea)
    {
        //edit page

        $editing = true;
        $show = false;
        return view("ideas.show", compact("idea", "editing", "show"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, idea $idea)
    {
        //
        $idea->content = $request->get("content", "");
        $idea->save(); //save changes

        return redirect()->route("idea.show", $idea->id)->with("success", "Idea Updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
        $idea->delete();

        return redirect()->route("home")->with("success", "Idea deleted Successfully");
    }
}
