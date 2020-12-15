@extends('layout.main')
@section('title')
Lihat Pengeluaran
@endsection()
@section('container')
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Lihat Pengeluaran</title>
</head>
<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  /* Float four columns side by side */
  .column {
    float: left;
    width: 25%;
    padding: 0 10px;
  }

  /* Remove extra left and right margins, due to padding */
  .row {
    margin: 0 -5px;
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive columns */
  @media screen and (max-width: 600px) {
    .column {
      width: 100%;
      display: block;
      margin-bottom: 20px;
    }
  }

  /* Style the counter cards */
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #f1f1f1;
  }
</style>

<body>
  <br><br> <br>
  <!-- Dashboard card -->
  <div class="row" style="margin-left:200px; margin-right:200px">
    <div class="column">
      <div class="card">
        <h3>Card 1</h3>
        <p>Some text</p>
        <p>Some text</p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <h3>Card 2</h3>
        <p>Some text</p>
        <p>Some text</p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <h3>Card 1</h3>
        <p>Some text</p>
        <p>Some text</p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <h3>Card 2</h3>
        <p>Some text</p>
        <p>Some text</p>
      </div>
    </div>
  </div>
  <div class="container">
    <form>
      <br><br> <br>

      <!-- Tabel Pengeluaran -->
      <table class="table table-striped">
        <thead>
          <tr>

            <th scope="col">No</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Program Kerja</th>
            <th scope="col">Jumlah Pengeluaran</th>
            <th scope="col">Tanggal Pengeluaran</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>

        @foreach($expenses as $expense)
          <tr>
            <td>1</td>
            <td>{{$expense->deskripsi}}</td>
            <td>{{$expense->proker}}</td>
            <td>{{$expense->jumlah_pengeluaran}}</td>
            <td>{{$expense->tanggal_pengeluaran}}</td>
            <td style="color: green;">Approved</td>
          </tr>
        @endforeach
        </tbody>
      </table>
  </div>


</body>

</html>
@endsection