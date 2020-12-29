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
                        <th scope="col">Angkatan</th>
                        <th scope="col">Jumlah Kas</th>
                        <th scope="col">Status Departemen</th>
                        <th scope="col">Tanggal Bayar </th>
                        <th scope="col">Status </th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($moneys as $money)
                        <tr>
                            <td>{{ $money->fullname }}</td>
                            <td>{{ $money->nim }}</td>
                            <td>{{ $money->divisi }}</td>
                            <td>{{ $money->angkatan }}</td>
                            <td>{{ $money->jumlah }}</td>
                            <td style="color:green;">{{ $money->status_dept }}</td>
                            <td>{{ $money->updated_at }}</td>
                            <td style="color:green;">{{ $money->status_inti }}</td>
                            <td><a href="/edituangkas/{{$money->id}}" class="btn btn-info">Edit</a>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </form>
        @endsection()
