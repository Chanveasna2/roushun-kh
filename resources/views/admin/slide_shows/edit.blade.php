
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

        {!! Form::model($slide_show,['method'=>'PATCH', 'action'=> ['SlideShowController@update',$slide_show->id],'files'=>true]) !!}

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
            <img src="{{$slide_show->photo?$slide_show->photo->file:'https://via.placeholder.com/400x400'}}" alt="" class=" img-rounded" height="100px">
        </div>


        <div class="form-group">
            {!! Form::submit('Create',['class'=>'btn btn-primary']) !!}
        </div>


        {!! Form::close() !!}

    </div>
    <!-- /.container-fluid -->
@stop
