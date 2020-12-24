@extends('layout.main')
@section('title')
Anggota
@endsection()
@section('container')
<div class="container mt-4">
    <div class="row">
        <h2 class="mx-auto my-4">Anggota {{$divisi}}</h2>
    </div>
    <div class="row justify-content-center">
        <div class="column">
            <div class="card" style="background-color:#00AAAA; width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title" style="color:white">Anggota {{$divisi}}</h5>
                    <p class="card-text" style="color:white">
                        {{$jumlah}} Anggota
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">


                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!-- Right navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <button type="button" class="btn btn-primary " style="float: right;" data-toggle="modal" data-target="#modal-primary2">+Add Anggota Baru</button>
                    </ul>
                </nav>
                @php
                $i = 1
                @endphp

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Anggota</th>
                                <th>Nim</th>
                                <th>Angkatan</th>
                                <th>Departemen</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $member)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{ $member->fullname }}</td>
                                <td>{{ $member->nim }}</td>
                                <td>{{ $member->angkatan }}</td>
                                <td>{{ $member->divisi }}</td>
                                <td><a href="anggotabiro/{{$member->id}}" class="btn btn-primary">edit</a>
                                    <form action="/member/{{ $member->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                </td>
                            </tr>
                            @php
                            $i++
                            @endphp
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <!-- /.card-body -->
            </div>

            <!-- /.card EDIT-->
        </div>
    </div>
    <!-- MODAL INPUT -->
    <div class="modal fade" id="modal-primary2">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h4 class="modal-title">input</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="card-primary">
                        <form action="/anggotabiro/store" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Nama2" style="color:black">Nama Anggota</label>
                                    <input type="text" class="form-control" id="nama2" placeholder="Nama Anggota" name="fullname">
                                </div>
                                <div class="form-group">
                                    <label for="Nim2" style="color:black">Nim</label>
                                    <input type="text" class="form-control" id="nim2" placeholder="Nim" name="nim">
                                </div>
                                <div class="form-group">
                                    <label for="Angkatan" style="color:black">Angkatan</label>
                                    <p> </p>
                                    <input type="radio" id="radio2" name="angkatan" value="2016" />&nbsp; 2016 &nbsp;
                                    <input type="radio" id="radio2" name="angkatan" value="2017" />&nbsp; 2017 &nbsp;
                                    <input type="radio" id="radio2" name="angkatan" value="2018" />&nbsp; 2018 &nbsp;
                                    <input type="radio" id="radio2" name="angkatan" value="2019" />&nbsp; 2019 &nbsp;
                                    <input type="radio" id="radio2" name="angkatan" value="2020" />&nbsp; 2020 &nbsp;
                                </div>
                                <div class="form-group">
                                    <label for="departemen">Departemen</label>
                                    <select class="custom-select" id="departemen" aria-label="Example select with button addon" name="divisi">
                                        <option value="{{$divisi}}">{{$divisi}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-info" data-dismiss="modal" style="color:black">Close</button>
                                <button type="submit" class="btn btn-outline-info" style="color:black" name="submit">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
@endsection()