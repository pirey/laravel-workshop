## prepare post list template

- edit `home.blade.php`
- edit inside `<div class="col-md-8">`, change to this

```
<div class="mb-3">
    <a href="/post/create" class="btn btn-primary">Create new post</a>
</div>

<div class="card mb-3">
    <div class="card-header">post title 1</div>
    <div class="card-body">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
        no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">post title 1</div>
    <div class="card-body">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
        no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">post title 1</div>
    <div class="card-body">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
        no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </div>
</div>
```

## prepare template for create post

- add route `routes/web.php`

`Route::get('/post/create', 'PostController@create');`

- generate new controller

`php artisan make:controller PostController`

- edit `PostController.php`

```
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('post.create');
    }
```
- create `post/create.blade.php`

```
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

              <form method="post" action="/post/store">

                  {{ csrf_field() }}

                  <div class="form-group">
                      <label>Title</label>
                      <input class="form-control" name="title" />
                  </div>

                  <div class="form-group">
                      <label>Content</label>
                      <textarea class="form-control" name="content"></textarea>
                  </div>

                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Save</button>
                  </div>
              </form>

            </div>
        </div>
    </div>
@endsection
```
