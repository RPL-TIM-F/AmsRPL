@extends('layout.main')
@section('title')
    Homepage
@endsection()
@section('container')

    <div class="container">
        <!-- Dashboard card -->
        <div class="row">
            <h2 class="mx-auto my-4">Pendapatan Keseluruhan</h2>
        </div>
        <div class="row justify-content-center">
            <div class="column">
                <div class="card" style="background-color:#00AAAA; width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title" style="color:white">Anggota {{ $divisi }}</h5>
                        <p class="card-text" style="color:white">
                            Anggota
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <br> <br>
        <!-- Search bar -->
        <div class="container">
            <nav class=" navbar navbar-expand navbar-white navbar-light">

                <!-- Tombol Add Pendapatan -->
                <div>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-Tambah">+ Add
                        Pendapatan</button>
                </div>
            </nav>
        </div>

        <br>

        <div class="container-fluid">
            <!-- tabel pendapatan -->
            <div class="container">

                <table class="table table-striped">
                    <thead>

                        <tr>

                            <th scope="col">Produk</th>
                            <th scope="col">Jumlah Penjualan</th>
                            <th scope="col">Pendapatan Bersih</th>
                            <th scope="col">Status</th>
                            <th scope="colspan=2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($incomes as $income)
                            <tr>
                                <td>{{ $income->deskripsi }}</td>
                                <td>{{ $income->jumlah_penjualan }}</td>
                                <td>{{ $income->pendapatan_bersih }}</td>
                                <td>{{ $income->status }}</td>
                                <td><a href="/editpendapatan/{{ $income->id }}" class="btn btn-primary">Edit</a>
                                    <form action="/pendapatanbiro/{{ $income->id }}" method="post" class="d-inline">
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
        </div>



        <!-- Modal Add Pendapatan -->
        <div class="modal fade" id="modal-Tambah">
            <div class="modal-dialog">
                <div class="modal-content bg-light">
                    <div class="modal-header">
                        <h4 class="modal-title" style="text-align: center;"><b>Tambah Pendapatan</b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class=" card-light">
                            <!-- form -->
                            <form action="/pendapatanbiro/store" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="deskripsi">Nama Produk</label>
                                        <input type="text" class="form-control" id="deskripsi" placeholder="Nama Produk"
                                            name="deskripsi">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_penjualan">Jumlah Produk</label>
                                        <input type="number" class="form-control" id="jumlah_penjualan"
                                            placeholder="Jumlah Produk" name="jumlah_penjualan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pendapatan_bersih">Pendapatan Bersih</label>
                                        <input type="number" class="form-control" id="pendapatan_bersih"
                                            placeholder="Pendapatan Bersih" name="pendapatan_bersih">
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
            </div>
        </div>
    </div>


@endsection
