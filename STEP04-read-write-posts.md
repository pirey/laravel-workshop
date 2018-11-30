## read posts from database
- edit `HomeController.php` method `index`

```
    public function index()
    {
        $data = [
            'posts' => Blog::all(),
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

