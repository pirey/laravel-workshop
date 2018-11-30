## add validation
- add validation rules `PostController.php`

```
        $request->validate([
            'title' => 'required|unique:blogs|max:255',
            'content' => 'required',
        ]);
```

<!-- try -->
# display error

- add error messages `post/create.blade.php`

```
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

```

<!-- try -->

# repopullate form if error

```
                        <input class="form-control" name="title" value="{{ old('title') }}" />

                        ...

                        <textarea class="form-control" name="content">{{ old('content') }}</textarea>
```

