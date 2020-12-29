@extends('layout.main')
@section('title')
Homepage
@endsection()
@section('container')

<head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }
    </style>
</head>


<br> <br><br>

<!-- Dashboard card -->
<div class="row" style="margin-left: 200px;margin-right:200px;">
    <div class="column">
        <div class="card">
            <h3>Pendapatan 1</h3>
            <p>informasi</p>
            <p>informasi</p>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <h3>Pendapatan 2</h3>
            <p>informasi</p>
            <p>informasi</p>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <h3>Pendadpatan 3</h3>
            <p>informasi</p>
            <p>informasi</p>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <h3>Pendapatan 4</h3>
            <p>informasi</p>
            <p>informasi</p>
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
                    <th scope="colspan=2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($incomes as $income)
                <tr>
                    <td>{{ $income->deskripsi }}</td>
                    <td>{{ $income->jumlah_penjualan }}</td>
                    <td>{{ $income->pendapatan_bersih }}</td>
                    <td><a href="" class="btn btn-primary">Edit</a>
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
                                <input type="text" class="form-control" id="deskripsi" placeholder="Nama Produk" name="deskripsi">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_penjualan">Jumlah Produk</label>
                                <input type="number" class="form-control" id="jumlah_penjualan" placeholder="Jumlah Produk" name="jumlah_penjualan">
                            </div>
                            <div class="form-group">
                                <label for="pendapatan_bersih">Pendapatan Bersih</label>
                                <input type="number" class="form-control" id="pendapatan_bersih" placeholder="Pendapatan Bersih" name="pendapatan_bersih">
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
    </div>
</div>



@endsection