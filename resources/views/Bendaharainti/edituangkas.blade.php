@extends('layout.maininti')
@section('title')
Edit Uang Kas
@endsection()
@section('container')

<br><br>
<div class="container">

  <div class="card-header">
    <h1 class=" text-center">Edit</h1>
  </div>

  <!-- /.card-header -->
  <!-- form start -->

  <form action="/edituangkas/{{ $money->id }}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="card-header text-center">
      <p>{{ $money->fullname }}</p>
      <p>{{ $money->nim }}</p>
      <p>Bulan ke:{{ $money->month_id }}</p>

    </div>
    <div class="card-body">


      <div class="form-group col-8" style="left: 200px;">
        <label for="JumlahKas">Jumlah Kas</label>
        <select class="custom-select" id="JumlahKas" name="jumlah" aria-label="Example select with button addon">
          <option selected="">Jumlah Kas</option>
          <option value="15000">Rp.15.000</option>
        </select>

      </div>
      <div class="form-group col-8" style="left: 200px;">
        <label for="exampleInputPassword1 col-8">Tanggal Bayar</label>
        <input value="{{ $money->tanggal_bayar }}" name="tanggal_bayar" type="date" class="form-control" id="" placeholder="">
      </div>
      <br>
      <div class="form-group col-8" style="left: 200px;">
        <div class="form-check">
          <div class="row">
            <div class="col-5">
              <input class="form-check-input" type="radio" name="status_dept" id="gridRadios1" value="Approved" action="" checked required>
              <label class="form-check-label" for="Approved">
                Approved
              </label>
            </div>

            <div class="col">
              <input class="form-check-input" type="radio" name="status_dept" id="gridRadios2" value="Not Approved" action="" required>
              <label class="form-check-label" for="Not Approved">
                Not Approved
              </label>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="modal-footer justify-content-center" style="width:700px;margin-left:300px;">
      <a href="kasbiro" class="btn btn-danger">Close</a>
      <button type="submit" class="btn btn-info">Save changes</button>
    </div>
  </form>
</div>

@endsection