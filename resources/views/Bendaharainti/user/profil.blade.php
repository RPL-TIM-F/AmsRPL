@extends('layout.maininti')
@section('title')
    Profile
@endsection()
@section('container')

    <div class="container " style="margin-top: 125px;">
        <div class="col-md align-content-md-between">
            <!-- Profile Image -->
            <div class="card card-primary card-outline " style="background-color: #273746; ">
                <div class="card-body box-profile">

                    <h3 class="profile-username text-center" style="background-color: #273746;">{{ $user->fullname }}</h3>

                    <p class="text-muted text-center" style="background-color: #273746;">{{ $user->email }}</p>

                    <ul class="list-group list-group-unbordered mb-3 " style="background-color: #273746;">
                        <li class="list-group-item" style="background-color: #273746;">
                            <b>Nim</b> <a class="float-right">{{ $user->nim }}</a>
                        </li>
                        <li class="list-group-item" style="background-color: #273746;">
                            <b>Divisi</b> <a class="float-right">{{ $user->divisi }}</a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


        </div>
    </div>
@endsection
