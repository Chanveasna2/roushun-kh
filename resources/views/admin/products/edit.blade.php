
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
        <a href="{{route('products.index')}}" class="color:white;"><button class="btn btn-primary">All Products</button></a>

        {!! Form::model($products,['method'=>'PATCH', 'action'=> ['ProductController@update',$products->id],'files'=>true]) !!}

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
            <img src="{{$products->photo?$products->photo->file:'https://via.placeholder.com/400x400'}}" alt="" class=" img-rounded" height="100px">
        </div>


        <div class="form-group">
            {!! Form::submit('Confirm',['class'=>'btn btn-primary']) !!}
        </div>


        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE','action'=>['ProductController@destroy',$products->id]]) !!}
        <div class="form-group">
            {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}

    </div>
    <!-- /.container-fluid -->
@stop
