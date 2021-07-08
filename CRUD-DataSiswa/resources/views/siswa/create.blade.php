@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Menambah Siswa Baru </h2>

    @if ($errors->any())
    <div class="alert danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error }} </li>
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

    <form action="{{route('siswa.store')}} " method="post" enctype="multipart/form-data">
    
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="nama_siswa"> Nama Siswa :</label>
            <input type="text" name="nama_siswa" class="form-control">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="id_kategori"> Kategori : </label>

                    <select name="id_kategori" id="id_kategori" class="form-control input-sm">
        @foreach ($data_kategori as $kategori)
            <option value="{{$kategori->id_kategori}} ">{{$kategori->nama_kategori}} </option>
        @endforeach

            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="jenis_kelamin"> Jenis Kelamin : </label>
            <input type="text" name="jenis_kelamin"class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="asal"> Asal : </label>
            <input type="text" name="asal"class="form-control">
            </textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="agama"> Agama : </label>
            <input type="text" name="agama"class="form-control">
            </textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="alamat"> Alamat : </label>
            <input type="text" name="alamat"class="form-control">
            </textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-3">
            <button type="submit" class="btn btn-success">
                Simpan
            </button>
        </div>
        <div class="form-group col-md-2">
            <a href="{{route('siswa.store')}} ">Batal</a>
        </div>
    </div>
    </form>
</div>
    
@endsection