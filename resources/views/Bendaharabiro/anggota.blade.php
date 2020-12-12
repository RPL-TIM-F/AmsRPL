@extends('layout.main')
@section('title')
    Anggota
@endsection()
@section('container')
    <div class="container">
        <p> </p>
        <br> <br>
        <div class="row justify-content-center">
            <div class="column">
                <div class="card" style="background-color:#00AAAA; width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title" style="color:white">Anggota Entrepreuner</h5>
                        <p class="card-text" style="color:white">
                            50 Anggota
                        </p>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="column">
                <div class="card" style="background-color:#00AAAA; width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title" style="color:white">Anggota HRD</h5>
                        <p class="card-text" style="color:white">
                            50 Anggota
                        </p>
                    </div>

                </div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="column">
                <div class="card" style="background-color:#00AAAA; width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title" style="color:white">Total Jumlah Anggota</h5>
                        <p class="card-text" style="color:white">
                            100 Anggota
                        </p>
                    </div>
                </div>
            </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="row">
            <div class="col-12">
                <div class="card">


                    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                        <!-- SEARCH FORM -->
                        <form class="form-inline ml-3">
                            <div class="input-group input-group-sm">
                                <input class="Search" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Right navbar links -->
                        <ul class="navbar-nav ml-auto">
                            <button type="button" class="btn btn-primary " style="float: right;" data-toggle="modal"
                                data-target="#modal-primary2">+Add Anggota Baru</button>
                        </ul>
                    </nav>


                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
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
                                        <td>{{ $member->fullname }}</td>
                                        <td>{{ $member->nim }}</td>
                                        <td>{{ $member->angkatan }}</td>
                                        <td>{{ $member->divisi }}</td>
                                        <td><a href="" class="btn btn-primary">edit</a>
                                            <form action="/member/{{ $member->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                    <!-- /.card-body -->
                </div>

                <!-- /.card EDIT-->
            </div>
        </div>
        <div class="modal fade" id="modal-primary">
            <div class="modal-dialog">
                <div class="modal-content bg-light">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-primary">
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="Nama" style="color:black">Nama Anggota</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Nama Anggota"
                                            name="fullname">
                                    </div>
                                    <div class="form-group">
                                        <label for="nim" style="color:black">Nim</label>
                                        <input type="text" class="form-control" id="nim" placeholder="Nim" name="nim">
                                    </div>
                                    <div class="form-group">
                                        <label for="Angkatan" style="color:black">Angkatan</label>
                                        <p> </p>
                                        <input type="radio" id="radio" name="angkatan" />&nbsp; 2016 &nbsp;
                                        <input type="radio" id="radio" name="angkatan" />&nbsp; 2017 &nbsp;
                                        <input type="radio" id="radio" name="angkatan" />&nbsp; 2018 &nbsp;
                                        <input type="radio" id="radio" name="angkatan" />&nbsp; 2019 &nbsp;
                                        <input type="radio" id="radio" name="angkatan" />&nbsp; 2020 &nbsp;
                                    </div>
                                    <div class="form-group">
                                        <label for="Departemen">Departemen</label>
                                        <select class="custom-select" id="departemen"
                                            aria-label="Example select with button addon" name="divisi">
                                            <option selected="">Choose...</option>
                                            <option value="Entrepreneur">Entrepreuner</option>
                                            <option value="Manajemen">Manajemen</option>
                                            <option value="Pemrograman">Pemrograman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-info" data-dismiss="modal"
                                        style="color:black">Close</button>
                                    <button type="button" class="btn btn-outline-info" style="color:black">Save
                                        changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
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
                            <form action="/anggota/store" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="Nama2" style="color:black">Nama Anggota</label>
                                        <input type="text" class="form-control" id="nama2" placeholder="Nama Anggota"
                                            name="fullname">
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
                                        <label for="Departemen">Departemen</label>
                                        <select class="custom-select" id="departemen2"
                                            aria-label="Example select with button addon" name="divisi">
                                            <option selected="">Choose...</option>
                                            <option value="entrepreneur">Entrepreuner</option>
                                            <option value="hrd">HRD</option>
                                            <option value="pemrograman">Pemrograman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-info" data-dismiss="modal"
                                        style="color:black">Close</button>
                                    <button type="submit" class="btn btn-outline-info" style="color:black"
                                        name="submit">Save changes</button>
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
