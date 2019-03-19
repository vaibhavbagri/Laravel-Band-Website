<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'comment'=>'required'
        ]);

        $comment= new Comment;
        $comment->name=$request->input('name');
        $comment->email=$request->input('email');
        $comment->comment=$request->input('comment');
        $comment->save();

        return redirect('/#contact')->with('success','Comment Created');
    }

}
