@extends('admin.fragement.layout')
@section('content')

@section('content1')


    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.blade.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
        </ol>
        @if(Session::has('deleted_user'))
                <p class="bg-danger">{{session('deleted_user')}}</p>
            @endif
        <!-- Page Content -->
        <a href="{{route('users.create')}}" class="color:white;"><button class="btn btn-primary">Create</button></a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Status</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $users)
                <tr>
                    <th scope="row">{{$users->id}}</th>
                    <td><img height="50px;" src="{{$users->photo?$users->photo->file:'No Photo'}}" alt=""></td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->role->name}}</td>
                    <td>{{$users->isActive==1?'Active':'Not Active'}}</td>
                    <td>{{$users->created_at->diffForHumans()}}</td>
                    <td>{{$users->updated_at}}</td>
                    <td>
                        <a href="{{route('users.edit',$users->id)}}"><button class="btn btn-primary">Edit</button></a>
                        {!! Form::open(['method'=>'DELETE','action'=>['AdminUserController@destroy',$users->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>
    <!-- /.container-fluid -->
    </div>
    </div>
@stop
