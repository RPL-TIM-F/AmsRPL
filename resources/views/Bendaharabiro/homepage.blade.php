@extends('layout.main')
@section('title')
Homepage
@endsection()
@section('container')
<div class="container my-2">
  <!-- Content Wrapper. Contains page content -->
  <div>
    <h2 style="text-align:center">Sistem Informasi Manajemen Keuangan Organisasi</h2>
    <h3 style="text-align:center">Bendahara Departemen/Biro</h3>
    <p> </p>
  </div>
  <!-- /.content-header -->
  <div class="row justify-content-center">
            <div class="column">
                <div class="card" style="background-color:#00AAAA; width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title" style="color:white">Total uang kas divisi {{$divisi}}</h5>
                        <p class="card-text" style="color:white">
                            Rp. {{$money}}
                        </p>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="column">
                <div class="card" style="background-color:#00AAAA; width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title" style="color:white">Anggota {{$divisi}}</h5>
                        <p class="card-text" style="color:white">
                            {{$anggota}} anggota
                        </p>
                    </div>

                </div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="column">
                <div class="card" style="background-color:#00AAAA; width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title" style="color:white">Uang kas yang belum terbayar</h5>
                        <p class="card-text" style="color:white">
                            {{$blmbayar}}
                        </p>
                    </div>
                </div>
            </div>
        </div>


</div>
@endsection()