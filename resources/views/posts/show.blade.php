@extends ('layouts.master')
@section ('content')
    <div class="col-sm-8 blog-main">
        <h1> {{ $post->title }} </h1>

        {{ $post->body }}
        <hr>
        <div class="comments">
            <ul class="list-group">

            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForhumans() }} &nbsp;
                    </strong>
                    {{ $comment->body }}
                </li>
            @endforeach

            </ul>
        </div>
        <hr>
        <div class="card">
            <div class="card-block">
                <form method="post" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <textarea name="body" placeholder="your comment here" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                </form>
                 @include('layouts.error')
            </div>
        </div>
    </div>
@endsection