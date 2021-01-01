@extends('layout.maininti')
@section('title')
User
@endsection()
@section('container')
<div class="container mt-5">
    <a href="/tambahakun" class="btn btn-primary">Tambah Akun</a>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>

                    <!-- id
                email
                fullname
                kategori_id
                nim
                divisi -->
                    <th>No</th>
                    <th>Email</th>
                    <th>Full Name</th>
                    <th>Role</th>
                    <th>NIM</th>
                    <th>Divisi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1
                @endphp
                @foreach ($users as $user)
                <tr>
                    <?php
                    $role = "no role";
                    if ($user->kategori_id == 1) {
                        $role = "Inti";
                    } else {
                        $role = "Biro";
                    }
                    ?>
                    <td>{{$i}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $role }}</td>
                    <td>{{ $user->nim }}</td>
                    <td>{{ $user->divisi }}</td>
                    <td><a href="listuser/{{$user->id}}" class="btn btn-primary">edit</a>
                        <form action="/user/{{ $user->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
                @php
                $i++
                @endphp
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection()