@extends('layout.main')
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

        <form method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="card-header">
              <h1>Info</h1>
            </div>
            <div class="card-body">


                <div class="form-group col-8" style="left: 200px;">
                    <label for="JumlahKas">Jumlah Kas</label>
                    <select class="custom-select" id="JumlahKas" name="jumlah"
                        aria-label="Example select with button addon">
                        <option selected="">Jumlah Kas</option>
                        <option value="{{ $money->jumlah }}">Rp.15.000</option>
                    </select>

                </div>
                <div class="form-group col-8" style="left: 200px;">
                    <label for="exampleInputPassword1 col-8">Tanggal Bayar</label>
                    <input type="date" class="form-control" id="" placeholder="">
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
