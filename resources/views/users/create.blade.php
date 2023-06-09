@extends('layout')

@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New User</div>
        <div class="card-body">

            <form action="{{ url('user') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Email</label></br>
                <input type="email" name="email" id="email" class="form-control"></br>
                <label>Password</label></br>
                <input type="password" name="password" id="password" class="form-control"></br>
                <label>Role</label></br>
                <input type="text" name="role" id="role" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
