@extends('layouts.app')

@section('content')

<div class="container">
    
<h2>Data Siswa</h2>

@if (\Session::has('success'))
<div class="alert alert-success">
    <p>{{\Session::get('success') }} </p>
</div>
    
@endif

<div class="row">
    <div class="col-sm">
        <a href="{{route('siswa.create')}} " class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="col-sm">
        <a href="{{route('kategori.index')}} ">Kategori Siswa</a>
    </div>
    <div class="col-sm">
        {{$data_siswa->links()}}
    </div>
</div>
<br/>

<table class="table striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Asal</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th colspan="2" >Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($data_siswa as $siswa)
            <tr>
                <td>{{$siswa['id_siswa']}} </td>
                <td>{{$siswa['nama_siswa']}} </td>
                <td>{{$siswa->Kategori->nama_kategori}} </td>
                <td>{{$siswa['jenis_kelamin']}} </td>
                <td>{{$siswa['asal']}} </td>
                <td>{{$siswa['agama']}} </td>
                <td>{{$siswa['alamat']}} </td>
                <td>
                <a href="{{route('siswa.edit',$siswa['id_siswa'])}} " class="btn btn-warning">Edit</a>    
                </td>
                <td>
                    <form action="{{route('siswa.destroy',$siswa['id_siswa'])}} " method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>    
@endsection