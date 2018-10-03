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
        @if(Session::has('deleted_user'))
            <div class="alert alert-danger" role="alert">
                {{session('deleted_user')}}
            </div>
            @endif
        <!-- Page Content -->
        <a href="{{route('promotions.create')}}" class="color:white;"><button class="btn btn-primary">Create</button></a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Promotion Name</th>
                <th scope="col">Description</th>
                <th scope="col">Poster</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th scope="col">Action</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($promotions as $promotion)
                <tr>
                    <th scope="row">{{$promotion->id}}</th>
                    <td>{{$promotion->promo_name}}</td>
                    <td>{{$promotion->desc}}</td>
                    <td>{{$promotion->user->name}}</td>
                    <td>{{$promotion->created_at->diffForHumans()}}</td>
                    <td>{{$promotion->updated_at}}</td>
                    <td>
                        <a href="{{route('promotions.edit',$promotion->id)}}"><i class="btn btn-primary fas fa-edit"></i></a>

                    </td>
                    <td>
                        {!! Form::open(['method'=>'DELETE','action'=>['PromotionController@destroy',$promotion->id]]) !!}
                        <div class="form-group ">
                            {{--{!! Form::submit('',['class'=>'btn btn-danger fas fa-edit']) !!}--}}
                            <button class="btn btn-danger fas fa-trash-alt" type="submit" value=""></button>
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>
    <!-- /.container-fluid -->
    </div>
    </div>
@stop
