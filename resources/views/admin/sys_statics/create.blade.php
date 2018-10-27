
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
        <a href="{{route('sys_statics.index')}}" class="color:white;"><button class="btn btn-primary">All SYS STATIC</button></a>

        {!! Form::open(['method'=>'POST', 'action'=> 'SysStaticController@store','files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('static_name','Static Name:') !!}
                    {!! Form::text('static_name',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('static_value_first','Static Value:') !!}
                    {!! Form::text('static_value_first',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('static_value_second','Static Values:') !!}
                    {!! Form::text('static_value_second',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('static_value_third','Static Values:') !!}
                    {!! Form::text('static_value_third',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('static_value_forth','Static Values:') !!}
                    {!! Form::text('static_value_forth',null,['class'=>'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('photo_id','Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create',['class'=>'btn btn-primary']) !!}
                </div>


        {!! Form::close() !!}

    </div>
    <!-- /.container-fluid -->
@stop
