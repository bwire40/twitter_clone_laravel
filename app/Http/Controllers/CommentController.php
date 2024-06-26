<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\idea;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, idea $idea)
    {
        //
        //create the comment
        // request()->validate(
        //     [
        //         "comment" => ["string", "max:255", "min:5"],
        //     ]
        // );
        $comment = new Comment();
        $comment->idea_id = $idea->id; //relationship setting
        $comment->user_id = auth()->user()->id;
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->route("idea.show", $idea->id)->with("success", "Comment posted Successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(idea $idea)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
