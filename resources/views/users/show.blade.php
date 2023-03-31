@extends('layout')

@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Curse User</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $users->name }}</h5>
                <p class="card-text">Email : {{ $users->email }}</p>
                <p class="card-text">Password : {{ $users->password }}</p>
                <p class="card-text">Role : {{ $users->role }}</p>
            </div>
            </hr>
        </div>
    </div>
@endsection
