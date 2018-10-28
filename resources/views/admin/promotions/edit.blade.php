
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')
        <div>
            <a href="{{route('promotions.index')}}" class="color:white;"><button class="btn btn-primary">Return to promotion list</button></a>
        </div>
        <div class="row">
            <div class="col-9">
                {!! Form::model($promotions,['method'=>'PATCH', 'action'=> ['PromotionController@update',$promotions->id],'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('promo_name','Promotion Name:') !!}
                    {!! Form::text('promo_name',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('desc','Description:') !!}
                    {!! Form::text('desc',null,['class'=>'form-control','required','maxlength'=>'255']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Confirm',['class'=>'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}

                {!! Form::open(['method'=>'DELETE','action'=>['PromotionController@destroy',$promotions->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@stop
