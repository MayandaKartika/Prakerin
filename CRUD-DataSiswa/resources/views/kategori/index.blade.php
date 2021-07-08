@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Data Kelas</h2>

        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \session::get('success')}} </p> 
        </div>
            
        @endif

        <div class="row">
            <div class="col-sm">
                <a href="{{route('kategori.store')}} " class="btn btn-primary">
                    Tambah Data
                </a>
            </div>
            <div class="col-sm">
                <a href="{{route('siswa.index')}} ">Siswa</a>
            </div>
            <div class="col-sm">
                {{ $data_kategori->links() }}
            </div>

        </div>
        <br>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data_kategori as $kategori)
                    <tr>
                        <td>{{$kategori['id_kategori']}} </td>
                        <td>{{$kategori['nama_kategori']}} </td>
                        <td>
                            <a href="{{route('kategori.edit',$kategori['id_kategori'])}} " class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('kategori.destroy',$kategori['id_kategori'])}} " method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">

                                <button class="btn btn-danger" type="submit">
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