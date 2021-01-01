@extends('layout.main')
@section('title')
Anggota
@endsection()
@section('container')
<div class="row justify-content-center mt-4">
  <div class="col-sm-6">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title text-center">Edit Anggota</h3>
      </div>
      <form action="/anggotabiro/{{$member->id}}/update" method="post">
        @method('patch')
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="Nama2" style="color:black">Nama Anggota</label>
            <input type="text" class="form-control" id="nama2" placeholder="Nama Anggota" name="fullname" value="{{$member->fullname}}">
          </div>
          <div class="form-group">
            <label for="Nim2" style="color:black">Nim</label>
            <input type="text" class="form-control" id="nim2" placeholder="Nim" name="nim" value="{{$member->nim}}">
          </div>
          <div class="form-group">
            <label for="Angkatan" style="color:black">Angkatan</label>
            <p> </p>
            <input type="radio" id="radio2" name="angkatan" value="2016" @if($member->angkatan == 2016)
            checked
            @endif/>&nbsp; 2016 &nbsp;
            <input type="radio" id="radio2" name="angkatan" value="2017" @if($member->angkatan == 2017)
            checked
            @endif/>&nbsp; 2017 &nbsp;
            <input type="radio" id="radio2" name="angkatan" value="2018" @if($member->angkatan == 2018)
            checked
            @endif />&nbsp; 2018 &nbsp;
            <input type="radio" id="radio2" name="angkatan" value="2019" @if($member->angkatan == 2019)
            checked
            @endif />&nbsp; 2019 &nbsp;
            <input type="radio" id="radio2" name="angkatan" value="2020" @if($member->angkatan == 2020)
            checked
            @endif />&nbsp; 2020 &nbsp;
          </div>
          <div class="form-group">
            <label for="departemen">Departemen</label>
            <select class="custom-select" id="departemen" aria-label="Example select with button addon" name="divisi">
              <option value="{{$member->divisi}}">{{$member->divisi}}</option>
            </select>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-info" data-dismiss="modal" style="color:black">Close</button>
          <button type="submit" class="btn btn-outline-info" style="color:black" name="submit">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection()