## read posts from database
- edit `HomeController.php` method `index`

```
    use App\Blog;

    .....
    .....
    .....

    public function index()
    {
        $data = [
            'posts' => Blog::orderBy('id', 'desc')->get(),
        ];

        return view('home', $data);
    }
```

- edit `home.blade.php`
```
    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-header">{{ $post->title }}</div>
            <div class="card-body">{{ $post->content }}</div>
        </div>
    @endforeach
```

## insert post to database
- add route for storing post `routes/web.php`

`Route::post('/post/store', 'PostController@store');`

- add method to handle post `PostController.php`

```
    use App\Blog;

    ...
    ...

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
```

- add success message in post list `home.blade.php` inside `<div class="col-md-8">`

```
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session('success_message') }}
                </div>
            @endif

```

