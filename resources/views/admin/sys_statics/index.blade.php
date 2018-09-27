@extends('admin.fragement.layout')

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
        <a href="{{route('sys_statics.create')}}" class="color:white;"><button class="btn btn-primary">Create</button></a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Static Name</th>
                <th scope="col">Static Value</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th scope="col">Action</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($sys_statics as $sys_static)
                <tr>
                    <th scope="row">{{$sys_static->id}}</th>
                    <td>{{$sys_static->static_name}}</td>
                    <td>{{$sys_static->static_value}}</td>
                    <td>{{$sys_static->created_at->diffForHumans()}}</td>
                    <td>{{$sys_static->updated_at}}</td>
                    <td>
                        <a href="{{route('sys_statics.edit',$sys_static->id)}}"><i class="btn btn-primary fas fa-edit"></i></a>

                    </td>
                    <td>
                        {!! Form::open(['method'=>'DELETE','action'=>['SysStaticController@destroy',$sys_static->id]]) !!}
                        <div class="form-group ">
                            {{--{!! Form::submit('',['class'=>'btn btn-danger fas fa-edit']) !!}--}}
                            <button class="btn btn-danger fas fa-trash-alt" type="submit" value=""></button>
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
