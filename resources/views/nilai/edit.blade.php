@extends('layouts.master')

@section('content')
<div class="container">
<h1>Edit Data</h1>

<form action="/nilai/{{$nilai->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$nilai->nama}}">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nilai</label>
    <input type="text" name="nilai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$nilai->nilai}}">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$nilai->email}}">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No.HP</label>
    <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$nilai->no_hp}}">

  </div>
    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pilih Jenis Kelamin</label>
    <select class="form-select" name="jenis_kelamin">   
        <option value="L" @if($nilai->jenis_kelamin == "L") selected @endif >Laki-Laki</option>    
        <option value="P" @if($nilai->jenis_kelamin == "L") selected @endif >Perempuan</option>    
    </select><br>
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
    <textarea class="form-control" name="jurusan" rows="5">{{$nilai->jurusan}}</textarea><br>
    </div>
    <input type="submit" name="submit" class="btn btn-success" value="Update">

</form>
</div>

@endsection 