@extends('admin.fragement.footer')
@extends('admin.fragement.sidebar')
@extends('admin.fragement.header')
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

        <!-- Page Content -->
        <a href="{{route('users.create')}}" class="color:white;"><button class="btn btn-primary">Create</button></a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Status</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $users)
                <tr>
                    <th scope="row">{{$users->id}}</th>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->role->name}}</td>
                    <td>{{$users->isActive==1?'Active':'Not Active'}}</td>
                    <td>{{$users->created_at->diffForHumans()}}</td>
                    <td>{{$users->updated_at}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>
    <!-- /.container-fluid -->
    </div>
    </div>
@stop


@section('contents')

@stop
@stop
