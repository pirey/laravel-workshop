@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session('success_message') }}
                </div>
            @endif


            <div class="mb-3">
                <a href="/post/create" class="btn btn-primary">Create new post</a>
            </div>

            @foreach ($posts as $post)
                <div class="card mb-3">
                    <div class="card-header">{{ $post->title }}</div>
                    <div class="card-body">{{ $post->content }}</div>


                    <div class="card-footer">
                        <a href="/post/edit/{{ $post->id }}" class="btn btn-link">Edit</a>
                        <form action="{{ url('post/' . $post->id) }}" method="post" style="display: inline-block">
                            {{ method_field('DELETE') }}
                            {!! csrf_field() !!}
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
