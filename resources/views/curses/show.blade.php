@extends('layout')

@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Curse Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $curses->curse }}</h5>
                <p class="card-text">Address : {{ $curses->address }}</p>
                <p class="card-text">Mobile : {{ $curses->price }}</p>
            </div>
            </hr>
        </div>
    </div>
@endsection
