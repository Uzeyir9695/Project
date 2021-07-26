<?php
namespace App\Http\Controllers\Blog;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index() 
    {
        $userBlog = Blog::latest()->paginate(4);
        return view('mixedweb.navbar.blog', compact('userBlog'));
    }

    public function create() 
    {
        return view('mixedweb.blog.create-blog');
    }

    public function show($id) 
    {
        $userBlog = Blog::find($id);
        $userBlog->increment('view_count', 1);
        return view('mixedweb.blog.blog-comment', compact('userBlog'));
    }

    public function store(BlogRequest $request)
    {
        $blogs = Blog::create([
            'title' => $request->input('title'),
            'user_id' => $request->user()->id,
            'br_description' => $request->input('brDesc'),
            'ln_description' => $request->input('lnDesc'),
        ]);
        
        $blogs->view_count = 0;

        if($request->hasFile('image')) {
            $photo = request()->file('image');
            $name = $photo->getClientOriginalName();
            $photo->move('storage/uploads/', $name);
            $blogs->image = $name;
        }
        else {
             return request();
             $blogs->image = '';
        } 

        $blogs->save();

        return back()->with('success', 'Blog Created Successfully!');
    }
}
