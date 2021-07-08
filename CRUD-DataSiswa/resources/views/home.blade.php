@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('You are logged in!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-sm">
        <a href="{{route('kategori.index')}} ">Kategori Siswa</a>
    </div>
    <div class="col-sm">
        <a href="{{route('siswa.index')}} ">Siswa</a>
    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
