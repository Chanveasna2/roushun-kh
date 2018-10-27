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

            <p class="bg-danger">{{session('deleted_user')}}</p>
    @endif
    <!-- Page Content -->
        <a href="{{route('slide_shows.create')}}" class="color:white;"><button class="btn btn-primary">Create</button></a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Slide Name</th>
                        <th scope="col">Order</th>
                        <th scope="col">Image</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                        <th scope="col">Action</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($slide_shows as $slide_show)
                        <tr>
                            <th scope="row">{{$slide_show->id}}</th>
                            <td>{{$slide_show->slide_name}}</td>
                            <td>{{$slide_show->order}}</td>
                            <td><img height="50px;" src="{{$slide_show->photo?$slide_show->photo->file:'https://via.placeholder.com/400x400'}}" alt=""></td>
                            <td>{{$slide_show->created_at->diffForHumans()}}</td>
                            <td>{{$slide_show->updated_at}}</td>
                            <td>
                                <a href="{{route('slide_shows.edit',$slide_show->id)}}"><i class="btn btn-primary fas fa-edit"></i></a>

                            </td>
                            <td>
                                {!! Form::open(['method'=>'DELETE','action'=>['SlideShowController@destroy',$slide_show->id]]) !!}
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
        </div>

    </div>
    <!-- /.container-fluid -->
    </div>
    </div>


@stop
