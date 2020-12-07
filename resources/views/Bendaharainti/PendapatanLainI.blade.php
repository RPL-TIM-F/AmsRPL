@extends('layout.maininti')
@section('title')
    Pendapatan Lain
@endsection()
@section('container')
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

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
    </head>

    <body>
        <br> <br><br>

        <!-- Dashboard card -->
        <div class="row" style="margin-left: 200px;margin-right:200px;">
            <div class="column">
                <div class="card">
                    <h3>Pendapatan 1</h3>
                    <p>informasi</p>
                    <p>informasi</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3>Pendapatan 2</h3>
                    <p>informasi</p>
                    <p>informasi</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3>Pendadpatan 3</h3>
                    <p>informasi</p>
                    <p>informasi</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3>Pendapatan 4</h3>
                    <p>informasi</p>
                    <p>informasi</p>
                </div>
            </div>

        </div>
        <br> <br>
        <!-- Search bar -->
        <div class="container">
            <nav class=" navbar navbar-expand navbar-white navbar-light">
                <div class="input-group input-group-sm" style="margin-right: 50px;">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit" style="width:50px;">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </nav>
        </div>

        <br>

        <div class="container-fluid">
            <!-- tabel pendapatan -->
            <div class="container">
                <form>
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th scope="col">Produk</th>
                                <th scope="col">Jumlah Penjualan</th>
                                <th scope="col">Pendapatan Bersih</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Risol</td>
                                <td>100</td>
                                <td>Rp 200.000</td>
                                <td style="color:green;">Approved</td>
                                <td><button type="button" class="btn btn-info" data-toggle="modal"
                                        data-target="#modal-Edit">
                                        Edit
                                    </button>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>


        <!-- Modal Edit Pendapatan -->
        <div class="modal fade" id="modal-Edit">
            <div class="modal-dialog">
                <div class="modal-content bg-light">
                    <div class="modal-header">
                        <h4 class="modal-title" style="text-align: center;"><b>Edit Pendapatan</b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class=" card-light">
                            <!-- form -->
                            <form role="form">
                                <div class="form-group">
                                    <label for="status">Status</label> <br>
                                    <select name="status" id="status">
                                        <option value="no">Not Approved</option>
                                        <option value="yes">Approved</option>
                                    </select>
                                </div>
                        </div>
                        </form>
                        <div class="form-group" style="justify-content: center;">
                            <!-- Tombol Submit -->
                            <button type="submit" value="Selesai" id="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>

    </html>
@endsection
