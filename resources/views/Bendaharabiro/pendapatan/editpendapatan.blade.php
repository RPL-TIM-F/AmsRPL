@extends('layout.main')
@section('title')
    Edit Pendapatan Lain
@endsection()
@section('container')

    <br><br>
    <div class="container">

        <div class="card-header">
            <h1 class=" text-center">Edit Pendapatan</h1>
        </div>

        <!-- /.card-header -->
        <!-- form start -->

        <form action="/editpendapatan/{{ $income->id }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="card-header text-center">

            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="deskripsi">Nama Produk</label>
                    <input type="text" class="form-control" id="deskripsi" placeholder="Nama Produk" name="deskripsi"
                        value="{{ $income->deskripsi }}">
                </div>
                <div class="form-group">
                    <label for="jumlah_penjualan">Jumlah Produk</label>
                    <input type="number" class="form-control" id="jumlah_penjualan" placeholder="Jumlah Produk" name="jumlah_penjualan"
                        value="{{ $income->jumlah_penjualan}}">
                </div>
                <div class="form-group">
                    <label for="pendapatan_bersih">Pendapatan Bersih</label>
                    <input type="number" class="form-control" id="pendapatan_bersih" placeholder="Jumlah Pendapatan" name="pendapatan_bersih"
                        value="{{ $income->pendapatan_bersih}}">
                </div>

                    <br>

                    
            </div>

            <div class="modal-footer justify-content-center" style="width:700px;margin-left:300px;">
                <a href="/pendapatanbiro" class="btn btn-danger">Close</a>
                <button type="submit" class="btn btn-info">Save changes</button>
            </div>
        </form>


    </div>

@endsection
