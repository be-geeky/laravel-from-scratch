@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8 blog-main">
        <h1> Publish a Post </h1>
        <hr>
        <form method="post" action="/posts/store">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Tite</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="title" >
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
        @include('layouts.error')
    </div>
@endsection