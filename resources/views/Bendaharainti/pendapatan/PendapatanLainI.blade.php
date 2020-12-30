@extends('layout.maininti')
@section('title')
    Pendapatan Lain
@endsection()
@section('container')
    <html lang="en">

        <head>
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
           
        </div>
        
        <br>
        
        <div class="container-fluid">
            <!-- tabel pendapatan -->
            <div class="container">
        
                <table class="table table-striped">
                    <thead>
        
                        <tr>
        
                            <th scope="col">Produk</th>
                            <th scope="col">Jumlah Penjualan</th>
                            <th scope="col">Pendapatan Bersih</th>
                            <th scope="col">Status</th>
                            <th scope="colspan=2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($incomes as $income)
                        <tr>
                            <td>{{ $income->deskripsi }}</td>
                            <td>{{ $income->jumlah_penjualan }}</td>
                            <td>{{ $income->pendapatan_bersih }}</td>
                            <td>{{ $income->status }}</td>
                            <td><a href="/editpendapatan/{{$income->id}}" class="btn btn-primary">Edit</a>
                                <form action="/pendapatanbiro/{{ $income->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </td>
        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        
            </div>
        </div>
        
    </html>
@endsection
