@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="text-center">BLOG LIST</h2>           
        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th><h5>Total: {{ $userBlog->count() }}</h5></th> 
            </tr>
          </thead>
          <thead class="text-center">
            <tr>
              <th>Outhor</th>
              <th>Title</th>
              <th>Created</th>
              <th>Photo</th>
              <th>View</th>
            </tr>
          </thead>
          
          <tbody class="text-center">
              @forelse($userBlog as $blog)
                <tr>
                    <td>{{ Auth::user()->name }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ date('F d, Y - g:i a', strtotime($blog->created_at)) }}</td>
                    <td><img src="{{ asset('storage/uploads/'. $blog->image) }}" style="width: 90px; height:90px; border-radius:50%" alt="blog-image"></td>
                    <td><a href="blog/show/{{ $blog->id }}" class="btn btn-warning">View Blog</a></td> 
                </tr>
              @empty
                 <h5 class="text-center text-muted">Sorry, Blog Not Found! <br> Create New One!</h5> 
              @endforelse
          </tbody>
        </table>

        {!! $userBlog->links() !!}

        <a href="{{ route('blogs.create') }}" class="btn btn-success">Add Blogs</a>
      </div>
      @endsection