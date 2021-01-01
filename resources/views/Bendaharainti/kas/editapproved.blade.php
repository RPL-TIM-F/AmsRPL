@extends('layout.maininti')
@section('title')
edituangkas
@endsection()
@section('container')

<div class="container">

    <div class="card-header col-8 " style="left: 210px;">
        <h3 class="card-title" style="font-size:30px;text-align:center;">Edit</h3>
    </div>

    <!-- /.card-header -->
    <!-- form start -->

    <form role="form" action="/editapproved/{{ $money->id }}" method="post">
        @method('patch')
        @csrf
        <div class="card-body">
            <div class="form-group col-8" style="left: 200px;">
                <label for="NamaAnda">Nama</label>
                <p>{{$money->fullname}}</p>
            </div>
            <div class="form-group col-8" style="left: 200px;">
                <label for="NimAnda">Nim</label>
                <p>{{$money->nim}}</p>
            </div>
            <div class="form-group col-8" style="left: 200px;">
                <label for="exampleInputPassword1">Departemen</label>
                <p>{{$money->divisi}}</p>
            </div>
            <div class="form-group col-8" style="left: 200px;">
                <label for="JumlahKas">Jumlah Kas</label>
                <p>Rp{{$money->jumlah}},-</p>

            </div>
            <div class="form-group col-8" style="left: 200px;">
                <label for="exampleInputPassword1 col-8">Tanggal Bayar</label>
                <p>{{$money->tanggal_bayar}}</p>
            </div>
            <div class="form-group col-8" style="left: 200px;">
                <label for="statusdepartemen">Status Departemen</label>
                <p id='statusdepartemen'>{{$money->status_dept}}</p>
            </div>
            <div class="form-group col-8" style="left: 200px;">
                <label for="status_inti">Status Inti </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_inti" id="Radios1" value="Approved" checked>
                    <label class="form-check-label" for="Radios1">
                        Approved
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_inti" id="Radios2" value="Not Approved">
                    <label class="form-check-label" for="Radios2">
                        Not Approved
                    </label>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-info">Save changes</button>
            </div>
        </div>
    </form>
</div>
</div>

</div>
</div>
</div>




















@endsection()