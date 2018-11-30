<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        $post = new Blog;
        $post->title = $title;
        $post->content = $content;
        $post->save();

        $request
            ->session()
            ->flash('success_message', 'Success create new post!');

        return redirect('/home');
    }

    public function destroy(Request $request, $id)
    {
        Blog::destroy($id);

        $request
            ->session()
            ->flash('success_message', 'Post deleted!');

        return redirect('/home');
    }

    public function edit($id)
    {
        $data = [
            'post' => Blog::findOrFail($id)
        ];
        return view('post.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $post = Blog::findOrFail($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        $request
            ->session()
            ->flash('success_message', 'Post updated!');

        return redirect('/home');
    }

}
