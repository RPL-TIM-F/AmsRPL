@extends('layout.maininti')
@section('title')
    Pendapatan Lain
@endsection()
@section('container')
@php
$i = 1
@endphp
    <div class="container">
        <!-- Dashboard card -->
        <div class="row">
            <h2 class="mx-auto my-4">Pendapatan Keseluruhan</h2>
        </div>
        <div class="row justify-content-center ">
            <div class="column">
                <div class="card " style="background-color:#00AAAA; width: 20rem;">
                    <div class="card-body ">
                        <h5 class="card-title " style="color:white">Jumlah Pendapatan</h5>
                        <p class="card-text " style="color:white">
                           Rp. {{ $income }} 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br> <br>

        <br>


        <!-- tabel pendapatan -->
        <div class="container">

            <table class="table table-striped">
                <thead>

                    <tr>
                        <th scope="col">No</th>
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
                            <td>{{ $i }}</td>
                            <td>{{ $income->deskripsi }}</td>
                            <td>{{ $income->jumlah_penjualan }}</td>
                            <td>{{ $income->pendapatan_bersih }}</td>
                            @if ($income->status == 'Not Approved')
                                <td style="color:red;">{{ $income->status }}</td>
                            @elseif($income->status == 'Approved')
                                <td style="color:green;">{{ $income->status }}</td>
                            @endif
                            <td><a href="/editpendapatan/{{ $income->id }}" class="fa fa-edit"></a>
                                <button type="button " class="border-0 text-danger bg-transparent" data-toggle="modal"
                                    data-target="#deleteModal{{ $income->id }}">
                                    <i class=" fa fa-trash"> </i>
                                </button>
                            </td>

                        </tr>
                        @php
                        $i++
                        @endphp

<div class="modal fade" id="deleteModal{{ $income->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Delete Pendapatan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Anda yakin ingin menghapus pendapatan?
        </div>
        <form action="/pendapatanbiro/{{ $income->id }}" method="POST">
            @method('delete')
            @csrf
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
        </form>
    </div>
</div>
</div>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
