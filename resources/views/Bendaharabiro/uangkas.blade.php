@extends('layout.main')
@section('title')
Uangkas
@endsection()
@section('container')

    <form  >
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
</form >
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
                <div class="card-body" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="Nama Anda" placeholder="Nama Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nim</label>
                    <input type="text" class="form-control" id="Nim Anda" placeholder="Nim Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Departemen</label>
                    <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
    <option selected="">Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
                    
                    
                    
                   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Kas</label>
                    <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
    <option selected="">Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
                   
                  </div>

                  <label for="exampleInputPassword1">Tanggal Bayar</label>
                    <input type="date" class="form-control" id="" placeholder="">
                  <br>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status Departemen</label>
                    <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Dibayar
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
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
  
    @endsection()
