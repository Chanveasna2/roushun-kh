@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin/profile">User Profile</a>
            </li>
            <li class="breadcrumb-item active">Edit User Porfile</li>
        </ol>
        <div class="row">
            <div class="col-md-4">
                <img src="{{Auth::user()->photo?Auth::user()->photo->file:'https://via.placeholder.com/400x400'}}" alt="" class="img-rounded" height="300px">
            </div>
            <div class="col-md-8">
                {!! Form::model($users ,['method'=>'PATCH','onsubmit'=>"return Validate(this);" , 'action'=> ['ChangePasswordController@update',$users->id],'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('name','Username:') !!}
                    {!! Form::text('name',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email','Email:') !!}
                    {!! Form::email('email',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('photo_id','Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                    <img src="{{$users->photo?$users->photo->file:'https://via.placeholder.com/400x400'}}" alt="" class=" img-rounded" height="100px">
                </div>

                <div class="alert alert-danger" role="alert" style="display: none" id="validfile">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Warning</strong> You can upload file extension ".jpg", ".jpeg", ".bmp", ".gif", ".png" only!!!
                </div>
                <div class="alert alert-danger" role="alert" style="display: none" id="SizeFile">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Warning</strong> You can not upload file size more than 3MB!!!
                </div>

                <div class="form-group">
                    {!! Form::submit('Confirm',['class'=>'btn btn-primary']) !!}
                </div>
            </div>
        </div>
    </div>
@stop
