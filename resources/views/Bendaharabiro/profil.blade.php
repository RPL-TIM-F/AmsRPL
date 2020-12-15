@extends('layout.main')
@section('title')
Profile
@endsection()
@section('container')

<div class="container my-3">
  <div class="col-md align-content-md-between">
    <!-- Profile Image -->
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">

        <h3 class="profile-username text-center">{{$user->fullname}}</h3>

        <p class="text-muted text-center">{{$user->email}}</p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Nim</b> <a class="float-right">{{$user->nim}}</a>
          </li>
          <li class="list-group-item">
            <b>Divisi</b> <a class="float-right">{{$user->divisi}}</a>
          </li>
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->


  </div>
  @endsection