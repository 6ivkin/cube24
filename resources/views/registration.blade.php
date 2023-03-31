@extends('layout')

@section('title', 'Registration')

@section('content')
    <div class="container">
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        <form action="{{ route('registration.post') }}" method="POST" class="ms-auto me-auto mt-3"
              style="width: 500px;">
            @csrf
            <div class="mb-3">
                <label class="form-label">Имя</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <ul>
                <li>Либо Админ</li>
            </ul>
            <ul>
                <li>Либо другая роль</li>
            </ul>
            <div class="mb-3">
                <label class="form-label">Роль</label>
                <input type="text" class="form-control" name="role">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
