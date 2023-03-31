@extends('layout')

@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New Curse</div>
        <div class="card-body">

            <form action="{{ url('curse') }}" method="post">
                {!! csrf_field() !!}
                <label>Curse</label></br>
                <input type="text" name="curse" id="name" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <label>Price</label></br>
                <input type="text" name="price" id="mobile" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
