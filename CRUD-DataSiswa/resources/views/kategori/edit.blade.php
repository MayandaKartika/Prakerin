@extends('layouts.app')


@section('content')
    <div class="container">
        <h2>Mengedit Data Kelas</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error}} </li>
                    @endforeach
                </ul>
            </div>
            
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}} </p>
        </div>
            <br/>
        @endif


        <form action="{{route('kategori.edit', $id)}} " method="post" enctype="multipart/form-data">
        
        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PATCH">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-form-group col-md-4">
                <label for="nama_kategori">Nama Kelas :</label>
                <input type="text" name="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}} ">
            </div>
        </div>
    </div>
        
    <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    Update
                </button>
                <a href="/kategori" class="btn btn-warning">Kembali</a>
            </div>
        </div>
        </form>
    </div>
@endsection