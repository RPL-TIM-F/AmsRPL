@extends('layout.main')
@section('title')
Anggota
@endsection()
@section('container')
 <p> </p>
<br> <br>
 <div class="row justify-content-center">
  <div class="column">
  <div class="card" style="background-color:#00AAAA; width: 20rem;">
              <div class="card-body">
              <h5 class="card-title"style="color:white">Anggota Entrepreuner</h5>
                <p class="card-text"style="color:white">
                  50 Anggota
                </p>
              </div>
            </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="column">
  <div class="card" style="background-color:#00AAAA; width: 20rem;">
              <div class="card-body">
              <h5 class="card-title"style="color:white">Anggota HRD</h5>
                <p class="card-text"style="color:white">
                  50 Anggota
                </p>
              </div>
              
            </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="column">
  <div class="card" style="background-color:#00AAAA; width: 20rem;">
              <div class="card-body">
              <h5 class="card-title"style="color:white">Total Jumlah Anggota</h5>
                <p class="card-text"style="color:white">
                  100 Anggota
                </p>
              </div>
            </div>
  </div>
</div>&nbsp;&nbsp;&nbsp;&nbsp;
 <div class="row">
          <div class="col-12">
            <div class="card">
            
          
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="Search" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <button type="button" class="btn btn-primary " style="float: right;"data-toggle="modal" data-target="#modal-primary2">+Add Anggota Baru</button>
    </ul>
  </nav>


              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nama Anggota</th>
                      <th>Nim</th>
                      <th>Angkatan</th>
                      <th>Departemen</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Ahmad Purnawan</td>
                      <td>1202184567</td>
                      <td>2016</td>
                      <td><span class="tag tag-success">Entrepreuner</span></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Edit</button></td>
                      <td><a class="nav-link" href="#" aria-expanded="false"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                    <td>Ahmad Purnawan</td>
                      <td>1202184567</td>
                      <td>2016</td>
                      <td><span class="tag tag-success">Entrepreuner</span></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Edit</button></td>
                      <td><a class="nav-link" href="#" aria-expanded="false"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                    <td>Ahmad Purnawan</td>
                      <td>1202184567</td>
                      <td>2016</td>
                      <td><span class="tag tag-success">Entrepreuner</span></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Edit</button></td>
                      <td><a class="nav-link" href="#" aria-expanded="false"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                    <td>Ahmad Purnawan</td>
                      <td>1202184567</td>
                      <td>2016</td>
                      <td><span class="tag tag-success">Entrepreuner</span></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Edit</button></td>
                      <td><a class="nav-link" href="#" aria-expanded="false"><i class="fa fa-trash"></i></a></td>
                    </tr>
                  </tbody>
                </table>
                
              </div>
              
              <!-- /.card-body -->
            </div>
            
            <!-- /.card -->
          </div>
        </div>
        <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-light">
            <div class="modal-header">
              <h4 class="modal-title">Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <div class="card-primary">
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Nama" style="color:black">Nama Anggota</label>
                    <input type="Nama" class="form-control" id="nama" placeholder="Nama Anggota">
                  </div>
                  <div class="form-group">
                    <label for="Nim"style="color:black">Nim</label>
                    <input type="Nim" class="form-control" id="nim" placeholder="Nim">
                  </div>
                  <div class="form-group">
                    <label for="Angkatan" style="color:black">Angkatan</label>
                    <p> </p>
   <input type="radio" id="radio" name="nama_radio"/>&nbsp; 2016 &nbsp;
   <input type="radio" id="radio" name="nama_radio"/>&nbsp; 2017 &nbsp;
   <input type="radio" id="radio" name="nama_radio"/>&nbsp; 2018 &nbsp;
   <input type="radio" id="radio" name="nama_radio"/>&nbsp; 2019 &nbsp;
   <input type="radio" id="radio" name="nama_radio"/>&nbsp; 2020 &nbsp;
                  </div>
                  <div class="form-group">
                  <label for="Departemen">Departemen</label>
                    <select class="custom-select" id="departemen" aria-label="Example select with button addon">
    <option selected="">Choose...</option>
    <option value="1">Entrepreuner</option>
    <option value="2">Manajemen</option>
    <option value="3">Pemrograman</option>
  </select>
                  </div>                  
                </div>
                
              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-info" data-dismiss="modal"style="color:black">Close</button>
              <button type="button" class="btn btn-outline-info"style="color:black">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <div class="modal fade" id="modal-primary2">
        <div class="modal-dialog">
          <div class="modal-content bg-light">
            <div class="modal-header">
              <h4 class="modal-title">input</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <div class="card-primary">
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Nama" style="color:black">Nama Anggota</label>
                    <input type="Nama" class="form-control" id="nama2" placeholder="Nama Anggota">
                  </div>
                  <div class="form-group">
                    <label for="Nim"style="color:black">Nim</label>
                    <input type="Nim" class="form-control" id="nim2" placeholder="Nim">
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
                  </div>                  
                </div>
                
              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-info" data-dismiss="modal"style="color:black">Close</button>
              <button type="button" class="btn btn-outline-info"style="color:black">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

@endsection()
