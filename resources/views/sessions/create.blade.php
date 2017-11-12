@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <form action="/login" method="post" role="form">
            {{ csrf_field() }}
            <legend>Sign in</legend>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="password" >Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            @include('layouts.error')
        </form>
    </div>
@endsection