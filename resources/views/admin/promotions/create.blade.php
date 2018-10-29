
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add new promotion</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')
        <a href="{{route('promotions.index')}}" class="color:white;"><button class="btn btn-primary">Return to promotion list</button></a>

        {!! Form::open(['method'=>'POST', 'action'=> 'PromotionController@store','files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('promo_name','Promotion Name:') !!}
                    {!! Form::text('promo_name',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('desc','Description:') !!}
                    {!! Form::textarea('desc',null,['class'=>'form-control','required','maxlength'=>'255']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('order','Order:') !!}
                    {!! Form::text('order',null,['class'=>'form-control','required','maxlength'=>'1']) !!}
                </div>


        <div class="form-group">
                    {!! Form::label('photo_id','Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create',['class'=>'btn btn-primary']) !!}
                </div>


        {!! Form::close() !!}

    </div>
    <!-- /.container-fluid -->
@stop
