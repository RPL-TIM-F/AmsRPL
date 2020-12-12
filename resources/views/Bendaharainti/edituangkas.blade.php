@extends('layout.maininti')
@section('title')
edituangkas
@endsection()
@section('container')

<br><br>
<div class="container">

  <div class="card-header col-8 " style="left: 210px;">
    <h3 class="card-title" style="text-align: center;">Edit</h3>
  </div>

  <!-- /.card-header -->
  <!-- form start -->

  <form role="form">
    <div class="card-body">
      <div class="form-group col-8" style="left: 200px;">
        <label for="NamaAnda">Nama</label>
        <input type="text" class="form-control" id="NamaAnda" name="fullname" placeholder="Nama Anda">
      </div>
      <div class="form-group col-8" style="left: 200px;">
        <label for="NimAnda">Nim</label>
        <input type="text" class="form-control" id="NimAnda" name="nim" placeholder="Nim Anda">
      </div>
      <div class="form-group col-8" style="left: 200px;">
        <label for="exampleInputPassword1">Departemen</label>
        <select class="custom-select" id="inputGroupSelect03" name="divisi" aria-label="Example select with button addon">
          <option selected="">Departemen</option>
          <option value="1">Inti</option>
          <option value="2">Enterpreneur</option>
          <option value="3">Akademik</option>
          <option value="1">kaderisasi</option>
          <option value="1">Kemahasiswaan</option>
          <option value="1">Kominfo</option>
          <option value="1">Riset dan Teknologi</option>
          <option value="1">Dedikasi Masyarakat</option>
          <option value="1">Human Resource Departemen</option>
          <option value="1">Relasi</option>
        </select>




      </div>
      <div class="form-group col-8" style="left: 200px;">
        <label for="JumlahKas">Jumlah Kas</label>
        <select class="custom-select" id="JumlahKas" name="jumlah" aria-label="Example select with button addon">
          <option selected="">Jumlah Kas</option>
          <option value="1">Rp.15.000</option>
          <option value="2">Rp.20.000</option>
          <option value="3">Rp.30.000</option>
        </select>

      </div>
      <div class="form-group col-8" style="left: 200px;">
        <label for="exampleInputPassword1 col-8">Tanggal Bayar</label>
        <input type="date" class="form-control" id="" placeholder="">
      </div>
      <br>
      <div class="form-group col-8" style="left: 200px;">
        <label for="exampleInputPassword1">Status Departemen</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="status_dept" id="statusdepartemen1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Dibayar
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="status_dept" id="statusdepartemen2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Belum Bayar
          </label>
        </div>

      </div>
  </form>
</div>
</div>
<div class="modal-footer justify-content-between" style="width:700px;margin-left:300px;">
  <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-outline-info">Save changes</button>
</div>

</div>
</div>
</div>
@endsection()