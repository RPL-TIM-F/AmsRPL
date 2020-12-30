@extends('layout.maininti')
@section('title')
    Edit Pengeluaran
@endsection()
@section('container')

    <br><br>
    <div class="container">

        <div class="card-header">
            <h1 class=" text-center">Edit pengeluaran</h1>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
    
        <form action="/editpengeluaran/{{ $expense->id }}" method="post">
            @method('patch')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $expense->deskripsi }}"  id="deskripsi" placeholder="Deskripsi" name="deskripsi">
                </div>
                <div class="form-group">
                    <label for="proker">Proker</label>
                    <input type="text" class="form-control" value="{{ $expense->proker }}" id="proker" placeholder="Nama Proker" name="proker">
                </div>
                <div class="form-group">
                    <label for="divisi">Divisi</label>
                    <select class="custom-select" id="divisi" aria-label="Example select with button addon" name="divisi">
                        <option class=""  value="{{ $expense->divisi }}">{{ $expense->divisi }}</option>
                        <option class="font-weight-bold" value="Inti">Inti</option>
                        <option class="font-weight-bold" value="Enterpreneur">Enterpreneur</option>
                        <option class="font-weight-bold" value="Akademik">Akademik</option>
                        <option class="font-weight-bold" value="Kaderisasi">Kaderisasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah_pengeluaran">Jumlah Pengeluaran</label>
                    <input type="number" class="form-control" value="{{ $expense->jumlah_pengeluaran }}" id="jumlah_pengeluaran" placeholder="Jumlah Pengeluaran" name="jumlah_pengeluaran">
                </div>
                <div class="form-group">
                    <label for="tanggal_pengeluaran">Tanggal Pengeluaran</label>
                    <input type="date" class="form-control" value="{{ $expense->tanggal_pengeluaran }}" id="tanggal_pengeluaran" placeholder="Tanggal Pengeluaran" name="tanggal_pengeluaran">
                </div>
            
                
            </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-info" data-dismiss="modal" style="color:black">Close</button>
                <button type="submit" class="btn btn-outline-info" style="color:black" name="submit">Save changes</button>
            </div>
        </form>
       
       
    </div>

@endsection
