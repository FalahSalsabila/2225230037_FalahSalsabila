@extends('layouts.master')

@section('content')
    <div class="container">
    <a class="btn btn-warning" href="/nilai/create">Masukkan Nilai</a>
<table class="table table-hover">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>NILAI</th>
        <th>EMAIL</th>
        <th>NO.HP</th>
        <th>JENIS KELAMIN</th>
        <th>JURUSAN</th>
        <th>AKSI</th>
    </tr>
    @foreach($nilai as $n)
    <tr>
        <td>{{$n->id}}</td>
        <td>{{$n->nama}}</td>
        <td>{{$n->nilai}}</td>
        <td>{{$n->email}}</td>
        <td>{{$n->no_hp}}</td>
        <td>{{$n->jenis_kelamin}}</td>
        <td>{{$n->jurusan}}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="/nilai/{{$n->id}}/edit">Edit</a>
                <form action="/nilai/{{$n->id}}" method="POST">
                    @csrf 
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
    </div>
@endsection


