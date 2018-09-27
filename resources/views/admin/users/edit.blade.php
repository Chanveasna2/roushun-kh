
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

            <a href="{{route('users.index')}}" class="color:white;"><button class="btn btn-primary">All User</button></a>

            {!! Form::model($users ,['method'=>'PATCH', 'action'=> ['AdminUserController@update',$users->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name','Username:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email','Email:') !!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id','Role:') !!}
                {!! Form::select('role_id',[''=>'Choose Option'] + $roles->pluck('name','id')->toArray(),null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('isActive','Status') !!}
                {!! Form::select('isActive',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id','Photo:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                <img src="{{$users->photo?$users->photo->file:'https://via.placeholder.com/400x400'}}" alt="" class=" img-rounded" height="100px">
            </div>
            <div class="form-group">
                {!! Form::submit('Confirm',['class'=>'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=>['AdminUserController@destroy',$users->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
                </div>
            {!! Form::close() !!}

    </div>
    <!-- /.container-fluid -->

    </div>

    </div>

@stop
