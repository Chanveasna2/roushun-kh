
@extends('admin.fragement.layout')


    @section('content1')

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/admin">Dashboard</a>
            </li>
          </ol>

          <!-- Page Content -->
            <h1 class="text-primary">Welcome <b class="text-success">Mr. {{Auth::user()->name}}</b> to Admin Panel Roushun Cambodia</h1>
            <div class="container">
                <img height="400px" src="{{Auth::user()->photo?Auth::user()->photo->file:'https://via.placeholder.com/400x400'}}" class="rounded mx-auto d-block">
            </div>
          <hr>
          <p></p>

        </div>
        <!-- /.container-fluid -->

    @stop
