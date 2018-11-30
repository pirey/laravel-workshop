@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="mb-3">
                <a href="/post/create" class="btn btn-primary">Create new post</a>
            </div>

            @foreach ($posts as $post)
                <div class="card mb-3">
                    <div class="card-header">{{ $post->title }}</div>
                    <div class="card-body">{{ $post->content }}</div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
