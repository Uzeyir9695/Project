@extends('layouts.app')
@section('content')
<div class="container mt-5">
    @if(Session::has('success'))
        <div class="alert alert-success my-3 text-center">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('blogs.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong> 
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="brDesc">Breaf Description</label>
            <textarea type="text" class="form-control  @error('brDesc') is-invalid @enderror" cols="30" rows="3" name="brDesc"  value="{{ old('brDesc') }}"></textarea>
            @error('brDesc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        <div class="form-group">
            <label for="lnDesc">Long Description</label>
            <textarea type="text" class="form-control  @error('lnDesc') is-invalid @enderror" cols="30" rows="3" name="lnDesc"  value="{{ old('lnDesc') }}"></textarea>
            @error('lnDesc')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong> 
                </span>
                @enderror
            
        </div>
        <div class="form-group">
            <label for="file">Upload photo</label>
            <input type="file" name="image" class="form-control-file"  value="{{ old('image') }}">
        </div>
        <input type="submit" class="btn btn-success" value="Create Blog"> 
        <a href="{{ route('blog') }}" class="btn btn-warning float-right">View the blogs page</a>
    </form>
</div>
@endsection