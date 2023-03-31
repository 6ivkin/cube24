@extends('layout')

@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>User</h2>
                    </div>
                    <div class="card-body">
                        @if(\Illuminate\Support\Facades\Auth::user()->role == 'Admin' and 'admin')
                            {{--    Отказался из-за защиты пользователей    --}}
                            {{--                            <a href="{{ url('/user/create') }}" class="btn btn-success btn-sm" title="Add New User">--}}
                            {{--                                Add New--}}
                            {{--                            </a>--}}
                        @endif
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->password }}</td>
                                        <td>{{ $item->role }}</td>

                                        <td>
                                            <a href="{{ url('/user/' . $item->id) }}" title="View User">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                       aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                            @if(\Illuminate\Support\Facades\Auth::user()->role == 'Admin' and 'admin')
                                                <a href="{{ url('/user/' . $item->id . '/edit') }}" title="Edit User">
                                                    <button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                    </button>
                                                </a>

                                                <form method="POST" action="{{ url('/user' . '/' . $item->id) }}"
                                                      accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                            title="Delete User"
                                                            onclick="return confirm('Точно удалить?')"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
