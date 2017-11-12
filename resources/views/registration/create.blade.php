@extends('layouts.master')

@section('content')
    <div class="col-sm-8">

        <form action="/register" method="post" role="form">
            {{ csrf_field() }}
            <legend>Register</legend>

            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                </div>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="col-sm-2 control-label">Confirmed Password</label>
                <div class="col-sm-10">
                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="">
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>

            @include('layouts.error')
        </form>
    </div>


@endsection