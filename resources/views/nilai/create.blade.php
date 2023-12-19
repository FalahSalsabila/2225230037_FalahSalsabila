@extends('layouts.master')

@section('content')

<div class="container">
<h1>Data Nilai</h1>
<form action="/nilai/store" method="POST">
    @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nilai</label>
    <input type="text" name="nilai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No.HP</label>
    <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pilih Jenis Kelamin</label>
    <select class="form-select" name="jenis_kelamin">   
        <option value="L">Laki-Laki</option>    
        <option value="P">Perempuan</option>    
    </select><br>
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
    <textarea class="form-control" name="jurusan" rows="5"></textarea><br>
    </div>
    <input type="submit" name="submit" class="btn btn-success" value="Save">
    </form>
</div>

@endsection