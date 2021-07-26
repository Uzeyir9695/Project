<?php
namespace App\Http\Controllers\Blog;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function store(CommentRequest $request, $id) 
    {   
        Comment::create([
            'content' => $request->comment,
            'user_id' => $request->user()->id,
            'blog_id' => $id,
        ]);

        return back();
    }
}
