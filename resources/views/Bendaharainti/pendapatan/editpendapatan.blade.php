@extends('layout.maininti')
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
               
                <div class="form-group col-8" style="left: 200px;">
                    <label for="JumlahKas">Produk</label>
                    <p>{{ $income->deskripsi }}</p>
                </div>
                <div class="form-group col-8" style="left: 200px;">
                    <label for="exampleInputPassword1 col-8">Jumlah Penjualan</label>
                    <p>{{ $income->jumlah_penjualan }}</p>
                </div>


                <div class="form-group col-8" style="left: 200px;">
                    <label for="exampleInputPassword1 col-8">Jumlah Penjualan</label>
                    <p>{{ $income->pendapatan_bersih }}</p>
                </div>

                <br>

                <div class="form-group col-8" style="left: 200px;">
                    <div class="form-check">
                        <div class="row">
                            <div class="col-5">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="Approved"
                                    action="" checked required>
                                <label class="form-check-label" for="Approved">
                                    Approved
                                </label>
                            </div>

                            <div class="col">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios2"
                                    value="Not Approved" action="" required>
                                <label class="form-check-label" for="Not Approved">
                                    Not Approved
                                </label>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer justify-content-center" style="width:700px;margin-left:300px;">
                <a href="/pendapataninti" class="btn btn-danger">Close</a>
                <button type="submit" class="btn btn-info">Save changes</button>
            </div>
        </form>
       
       
    </div>

@endsection
