@extends('layout.main')
@section('title')
Uangkas
@endsection()
@section('container')

<div class="container">
    <form>
        <br><br>
        <h2>Uang kas bulan {{$month->month_name}}</h2>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>

                    <th scope="col">No</th>
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
                @php
                $i = 1
                @endphp

                @foreach ($moneys as $money)

                
                <tr>

                    <td>{{ $i }}</td>
                    <td>{{ $money->fullname }}</td>
                    <td>{{ $money->nim }}</td>
                    <td>{{ $money->divisi }}</td>
                    <td>{{ $money->angkatan }}</td>
                    <td>{{ $money->jumlah }}</td>
                    @if($money->status_dept == 'Not approved')
                    <td style="color:red;">{{ $money->status_dept }}</td>
                    @elseif($money->status_dept == 'Approved')
                    <td style="color:green;">{{ $money->status_dept }}</td>
                    @endif
                    <td>{{ $money->tanggal_bayar }}</td>
                    @if($money->status_inti == 'Not approved')
                    <td style="color:red;">{{ $money->status_inti }}</td>
                    @elseif($money->status_inti == 'approved')
                    <td style="color:green;">{{ $money->status_inti }}</td>
                    @endif
                    <td><a href="/edituangkasbiro/{{$money->id}}" class="btn btn-info">Edit</a>
                </tr>

                @php
                $i++
                @endphp
                @endforeach

            </tbody>
        </table>
   
        </div>
        @endsection()