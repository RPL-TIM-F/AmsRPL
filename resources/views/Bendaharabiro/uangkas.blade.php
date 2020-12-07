@extends('layout.main')
@section('title')
Uangkas
@endsection()
@section('container')

<div class="container">
  <form>
    <br><br> <br>
    <table class="table table-striped">
      <thead>
        <tr>

          <th scope="col">Nama Anggota</th>
          <th scope="col">Nim</th>
          <th scope="col">Departemen</th>
          <th scope="col">Jumlah Kas</th>
          <th scope="col">Status Departemen</th>
          <th scope="col">Tanggal Bayar </th>
          <th scope="col">Status </th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <td>Ahmad purnawan</td>
          <td>120216789</td>
          <td>Enterpreneur</td>
          <td>Rp 15.000</td>
          <td style="color:green;">dibayar</td>
          <td>02/07/2020</td>
          <td style="color:green;">aprovved</td>
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
              Edit
            </button></td>
        </tr>
        <tr>

          <td>jokowi dodo</td>
          <td>120216789</td>
          <td>HRD</td>
          <td>Rp 15.000</td>
          <td style="color:green;">dibayar</td>
          <td>02/07/2020</td>
          <td style="color:green;">aprovved</td>
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
              Edit
            </button></td>
        </tr>
        <tr>

          <td>Luhut Panjaitan</td>
          <td>120216789</td>
          <td>Kamsis</td>
          <td>Rp 15.000</td>
          <td style="color:red;">Belum Bayar</td>
          <td>-</td>
          <td style="color:green;">-</td>
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
              Edit
            </button></td>
        </tr>
        <tr>

          <td>wulun wahyu </td>
          <td>120216789</td>
          <td>Kominfo</td>
          <td>Rp 15.000</td>
          <td style="color:green;">dibayar</td>
          <td>02/07/2020</td>
          <td style="color:green;">aprovved</td>
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
              Edit
            </button></td>
        </tr>
        <tr>

          <td>Raihan Januar</td>
          <td>120216789</td>
          <td>Kominfo</td>
          <td>Rp 15.000</td>
          <td style="color:green;">dibayar</td>
          <td>02/07/2020</td>
          <td style="color:green;">aprovved</td>
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
              Edit
            </button></td>
        </tr>
        <tr>

          <td>Rizky</td>
          <td>120216789</td>
          <td>Dedikasi MAsyarakat</td>
          <td>Rp 15.000</td>
          <td style="color:green;">dibayar</td>
          <td>02/07/2020</td>
          <td style="color:green;">aprovved</td>
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
              Edit
            </button></td>
        </tr>
        <tr>

          <td>Budi</td>
          <td>120216789</td>
          <td>Kominfo</td>
          <td>Rp 15.000</td>
          <td style="color:green;">dibayar</td>
          <td>02/07/2020</td>
          <td style="color:green;">aprovved</td>
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
              Edit
            </button></td>
        <tr>

          <td>Bujang</td>
          <td>120216789</td>
          <td>Kamsis</td>
          <td>Rp 15.000</td>
          <td style="color:green;">dibayar</td>
          <td>02/07/2020</td>
          <td style="color:green;">aprovved</td>
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
              Edit
            </button></td>
        </tr>
      </tbody>
    </table>
  </form>
  <div class="modal fade" id="modal-primary">
    <div class="modal-dialog">
      <div class="modal-content bg-light">
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Edit</b></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class=" card-light">

            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                  <label for="NamaAnda">Nama</label>
                  <input type="text" class="form-control" id="NamaAnda" name="fullname" placeholder="Nama Anda">
                </div>
                <div class="form-group">
                  <label for="NimAnda">Nim</label>
                  <input type="text" class="form-control" id="NimAnda" name="nim" placeholder="Nim Anda">
                </div>
                <div class="form-group">
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
                <div class="form-group">
                  <label for="JumlahKas">Jumlah Kas</label>
                  <select class="custom-select" id="JumlahKas" name="jumlah" aria-label="Example select with button addon">
                    <option selected="">Jumlah Kas</option>
                    <option value="1">Rp.15.000</option>
                    <option value="2">Rp.20.000</option>
                    <option value="3">Rp.30.000</option>
                  </select>

                </div>

                <label for="exampleInputPassword1">Tanggal Bayar</label>
                <input type="date" class="form-control" id="" placeholder="">
                <br>
                <div class="form-group">
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




                <!-- /.card-body -->

            </form>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-info">Save changes</button>
        </div>

      </div>
    </div>
    @endsection()