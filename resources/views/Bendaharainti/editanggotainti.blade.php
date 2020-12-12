@extends('layout.main')
@section('title')
Anggota
@endsection()
@section('container')
<div class="row justify-content-center">
<div class="col-sm-6">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Anggota</h3>
            </div>
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="Nama">Nama Anggota</label>
                  <input type="Nama" class="form-control" id="Nama" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="nim" class="form-control" id="nim" placeholder="NIM">
                </div>
                <div class="form-group">
                    <label for="Angkatan" style="color:black">Angkatan</label>
                    <p> </p>
   <input type="radio" id="radio2" name="nama_radio"/>&nbsp; 2016 &nbsp;
   <input type="radio" id="radio2" name="nama_radio"/>&nbsp; 2017 &nbsp;
   <input type="radio" id="radio2" name="nama_radio"/>&nbsp; 2018 &nbsp;
   <input type="radio" id="radio2" name="nama_radio"/>&nbsp; 2019 &nbsp;
   <input type="radio" id="radio2" name="nama_radio"/>&nbsp; 2020 &nbsp;
                  </div>
                  <div class="form-group">
                  <label for="Departemen">Departemen</label>
                    <select class="custom-select" id="departemen2" aria-label="Example select with button addon">
    <option selected="">Choose...</option>
    <option value="1">Entrepreuner</option>
    <option value="2">HRD</option>
    <option value="3">Pemrograman</option>
  </select>
              
  <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-info" data-dismiss="modal"style="color:black">Close</button>
              <button type="button" class="btn btn-outline-info"style="color:black">Save changes</button>
            </div>
            </form>
          </div>
</div>
</div>
@endsection()
