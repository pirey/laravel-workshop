## add delete button

- edit `home.blade.php`, add delete button

```
                    <div class="card-footer">
                        <form action="{{ url('post/' . $post->id) }}" method="post">
                            {{ method_field('DELETE') }}
                            {!! csrf_field() !!}
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
```

## add route and handler
- edit `routes/web.php`, add route

```
Route::delete('/post/{id}', 'PostController@destroy');
```

- add handler `PostController.php`

```
    public function destroy(Request $request, $id)
    {
        Blog::destroy($id);

        $request
            ->session()
            ->flash('success_message', 'Post deleted!');

        return redirect('/home');
    }
```
