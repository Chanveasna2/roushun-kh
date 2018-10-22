
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin/products">Product</a>
            </li>
            <li class="breadcrumb-item active">create</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')
        <a href="{{route('products.index')}}" class="color:white;"><button class="btn btn-primary">All SYS STATIC</button></a>

        {!! Form::open(['method'=>'POST', 'action'=> 'ProductController@store','files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('pro_name','Product Name:') !!}
                    {!! Form::text('pro_name',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('pro_code','Product Code:') !!}
                    {!! Form::text('pro_code',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('desc','Description:') !!}
                    {!! Form::text('desc',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('prices','Price:') !!}
                    {!! Form::text('prices',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('category_id','Category:') !!}
                    {!! Form::select('category_id',[''=>'Choose Option'] + $category->pluck('category_name','id')->toArray(),null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('isPop','Popular:') !!}
                    {!! Form::text('isPop',null,['class'=>'form-control']) !!}
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
