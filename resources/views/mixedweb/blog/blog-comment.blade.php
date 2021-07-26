@extends('layouts.app')
@section('content')
    <div class="row col-md-8 offset-md-2 my-5">
        <div class="card my-4 w-100 bg-secondary">
            <div class="card-body text-center overflow-auto">
                {{-- <img src="{{asset('storage/uploads/'. $blog->image )}}" style="width: 100px; height:100px;" alt="blog-image">  --}}
                <h1 class="text-info">{{ $userBlog->title }}</h1><br>
                <h5 class="text-warning">Breaf Description</h5><br>
                <p class="text-white">{{ $userBlog->br_description }}</p><br>
                <h5 class="text-warning">Long Description</h5><br>
                <p class="text-white">{{ $userBlog->ln_description }}</p><br>
            </div>
            <span class="text-right text-white" style="font-style: italic"><strong><small>Posted by {{ auth()->user()->name }} | <i class="fas fa-eye"></i> <span class="badge badge-info badge-pill">{{ $userBlog->view_count }}</span></small></strong></span>
        </div>
        <a href="{{ route('blog') }}" class="btn btn-warning"><< Back to blog list</a>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8  offset-md-2">
                <form method="POST" action="{{ route('blogs.post_comment', $userBlog->id) }}">
                    @csrf
                    <div class="form-group">
                        <label class="label"><i class="fas fa-comments" style="color: rgb(49, 49, 49); font-size: 20px"></i> Add Comment: </label>
                        <textarea name="comment" rows="3" cols="100" class="form-control @error('comment') is-invalid @enderror" placeholder="Type here..."></textarea>
                        @error('comment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Post" class="btn btn-success" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-header bg-primary text-white "><h6 class="pt-1"><span class="badge badge-dark badge-pill">{{$userBlog->comments->count()}}</span>  Comments</h6></div>
                    <div class="card-body">
                        @foreach($userBlog->comments as $comment)
                            <div class="row ml-2">
                                <div class="bg-warning text-center " style="width: 50px; height: 50px; border-radius:50px; padding-top: 11px">{{ Auth::user()->name }}</div>
                                <div class="ml-3">
                                    <span><small>{{ date('M d, Y - g:i a', strtotime($comment->created_at)) }}</small></span>
                                    <div><p>{{ $comment->content }}</p></div>
                                    <span><small><a href="">Reply</a> </small></span>
                                    <span class="ml-3"><small><button class="like-btn">Like</button></small></span>
                                    <div class="float-right">
                                        <span class="clas">0</span>
                                        <span class="thum"><i class="far fa-thumbs-up" style="color: rgb(36, 118, 211); font-size: 15px"></i></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

