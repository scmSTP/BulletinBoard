@extends('layouts.app')

@section('title','Post Create')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Create New Post</h3>
        </div>
        <div class="card-body">
            <div class="col-md-8 mx-auto">
                <form action="/post/create" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-md-2">Title</label>
                        <div class="col-md-6">
                            <input type="text" id="title" name="title" class="form-control" value="{{old('title', session('title'))}}">
                            @error('title')
                                <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>
                        <label for="require" class="col-md-1 col-form-label text-danger text-md-left">*</label>
                    </div>
                    <div class="form-group row">
                        <label for="desc" class="col-md-2">Description</label>
                        <div class="col-md-6">
                            <textarea name="desc" id="desc" class="form-control">{{old('desc', session('desc'))}}</textarea>
                            @error('desc')
                                <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>
                        <label for="require" class="col-md-1 col-form-label text-danger text-md-left">*</label>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mr-4">Confirm</button>
                            <button type="reset" class="btn btn-light">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
