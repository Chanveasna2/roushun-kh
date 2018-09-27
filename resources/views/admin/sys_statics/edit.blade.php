
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

        <!-- Page Content -->
        @include('includes.form_error')

            <a href="{{route('sys_statics.index')}}" class="color:white;"><button class="btn btn-primary">All User</button></a>

            {!! Form::model($sys_statics ,['method'=>'PATCH', 'action'=> ['SysStaticController@update',$sys_statics->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('static_name','Static Name:') !!}
                {!! Form::text('static_name',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('static_value','Static Value:') !!}
                {!! Form::text('static_value',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Confirm',['class'=>'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=>['SysStaticController@destroy',$sys_statics->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
                </div>
            {!! Form::close() !!}

    </div>
    <!-- /.container-fluid -->

    </div>

    </div>

@stop
