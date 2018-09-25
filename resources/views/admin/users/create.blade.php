@extends('admin.fragement.footer')
@extends('admin.fragement.sidebar')
@extends('admin.fragement.header')
@section('content')

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

        {!! Form::open(['method'=>'POST', 'action'=> 'AdminUserController@store','file'=>true]) !!}

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
                    {!! Form::select('isActive',array(1=>'Active',0=>'Not Active'),0,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('photo_id','File:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
                </div>


        {!! Form::close() !!}




    </div>
    <!-- /.container-fluid -->
    </div>
    </div>
@stop


@section('contents')

@stop
@stop
