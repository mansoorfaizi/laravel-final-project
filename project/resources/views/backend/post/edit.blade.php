@extends('backend.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Create Post
            </div>
            <div class="card-body">
                <form action="{{ route('post.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $post->title }}"
                            placeholder="Enter the post title">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subTitle">SubTitle</label>
                        <input type="text" name="sub_title" class="form-control" value="{{ $post->sub_title }}"
                            placeholder="Enter the post subTitle">
                        @error('sub_title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control my-editor" cols="30" rows="10"
                            placeholder="Enter the post description"> {{ $post->description }} </textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection
