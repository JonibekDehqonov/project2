<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function  index() {
        return view('notification.index')->with([
            'posts'=> Post::paginate(5),
        ]);
    }
}
