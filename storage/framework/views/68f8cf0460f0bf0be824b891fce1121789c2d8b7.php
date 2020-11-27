<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Top Navigation</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="/" class="navbar-brand">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"><b>SIMKO</b></span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="homepage" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="kas" class="nav-link" ><b>Uang Kas Anggota</b></a>
          </li>
          <li class="nav-item">
            <a href="anggota" class="nav-link">Anggota</a>
          </li>
          <li class="nav-item">
            <a href="pendapatan" class="nav-link">Pendapatan Lain</a>
          </li>
          <li class="nav-item">
            <a href="pengeluaran" class="nav-link">Pengeluaran</a>
          </li>
          <li class="nav-item">
            <a href="pengeluaran" class="nav-link">Approved</a>
          </li>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle">
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Akun Profil
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Detail</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>Online</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
      </ul>
    </div>
  </nav>
  <br> 

  <form class="form-inline ml-3">
  <nav class=" navbar navbar-expand navbar-white navbar-light">
   <!-- SEARCH FORM -->
  
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
   
 
  </nav>
  
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
                   
                  
            
                
                 
                <!-- /.card-body -->

              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-info">Save changes</button>
            </div>
       
      </div>
  
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\WAD\resources\views/Uang2/kas2.blade.php ENDPATH**/ ?>