## add link
- edit `home.blade.php`

```
                        <a href="/post/edit/{{ $post->id }}" class="btn btn-light">Edit</a>
```

- edit delete button (inline)

```
                        <form action="{{ url('post/' . $post->id) }}" method="post" style="display: inline-block">
```

## add route
- add route `routes/web.php`

`Route::get('post/edit/{id}', 'PostController@edit');`

- add handler `PostController.php`

```
    public function edit($id)
    {
        $data = [
            'post' => Blog::findOrFail($id)
        ];
        return view('post.edit', $data);
    }
```

## add template
- create file `post/edit.blade.php`

```
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

              <form method="post" action="/post/update/{{ $post->id }}">

                  {{ method_field('PUT') }}

                  {{ csrf_field() }}

                  <div class="form-group">
                      <label>Title</label>
                      <input class="form-control" name="title" value="{{ $post->title }}" />
                  </div>

                  <div class="form-group">
                      <label>Content</label>
                      <textarea class="form-control" name="content">{{ $post->content }}</textarea>
                  </div>

                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Update</button>
                  </div>
              </form>

            </div>
        </div>
    </div>
@endsection

```

## add handler to update the post
- add route `routes/web.php`

`Route::put('post/update/{id}', 'PostController@update');`

- add handler `PostController.php`

```
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
```


