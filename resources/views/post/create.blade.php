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
