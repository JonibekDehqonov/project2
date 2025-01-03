<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $Comments= Comment::create([
            'body'=> $request->body,
            'post_id'=>$request->post_id,
            'user_id'=>1,
        ]);
        return redirect()->back();
    }
}
