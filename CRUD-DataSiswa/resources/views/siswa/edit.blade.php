@extends('layouts.app')


@section('content')
    <div class="container">
        <h2>Mengedit Data Siswa</h2>
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


        <form action="{{route('siswa.edit', $id)}} " method="post" enctype="multipart/form-data">
        
        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PATCH">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-form-group col-md-4">
                <label for="nama_siswa">Nama Siswa :</label>
                <input type="text" name="nama_siswa" class="form-control" value="{{$siswa->nama_siswa}} ">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-form-group col-md-4">
                <label for="id_kategori">ID Kategori : </label>
                <select name="id_kategori" id="id_kategori" class="form-control">

                    @foreach ($data_kategori as $kategori)
                        <option value="{{ $kategori->id_kategori}} " {{$kategori->id_kategori === $siswa->nama_kategori ? 'selected' : ''}} >
                        {{$kategori->nama_kategori}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="jenis_kelamin"> Jenis Kelamin : </label>
            <input type="text" name="jenis_kelamin"class="form-control" value="{{$siswa->jenis_kelamin}}" >
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="asal"> Asal : </label>
            <input type="text" name="asal"class="form-control" value="{{$siswa->asal}}">
            </textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="agama"> Agama : </label>
            <input type="text" name="agama"class="form-control" value="{{$siswa->agama}}">
            </textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="alamat"> Alamat : </label>
            <input type="text" name="alamat"class="form-control" value="{{$siswa->alamat}}">
            </textarea>
        </div>
    </div>
        
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    Update
                </button>
                <a href="/siswa" class="btn btn-warning">Kembali</a>
            </div>
        </div>
        </form>
    </div>
@endsection