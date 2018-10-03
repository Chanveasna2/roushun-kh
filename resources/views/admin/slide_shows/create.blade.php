
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
        <a href="{{route('slide_shows.index')}}" class="color:white;"><button class="btn btn-primary">All Slide Show</button></a>

        {!! Form::open(['method'=>'POST', 'action'=> 'SlideShowController@store','files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('slide_name','Slide Name:') !!}
            {!! Form::text('slide_name',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('order','Order Name:') !!}
            {!! Form::text('order',null,['class'=>'form-control']) !!}
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
