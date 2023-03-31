@extends('layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Curse</div>
        <div class="card-body">

            <form action="{{ url('curse/' .$curses->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$curses->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="curse" id="name" value="{{$curses->curse}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{$curses->address}}" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="price" id="mobile" value="{{$curses->price}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
