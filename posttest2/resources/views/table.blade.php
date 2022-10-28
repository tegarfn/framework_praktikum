@extends('layouts.global')

@section('title')
    Selamat datang
@endsection

@section('content')
    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Data Baju</h2>
        @if (session('success'))
            <div class="alert alert-success">
                <b>Yeah!</b> {{ session('success') }}
            </div>
        @endif
        <a href="{{route('baju.create')}}" class=""><Button class="btn btn-primary mb-3">Tambah</Button></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Ukuran</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bajus as $baju)
                    <tr>
                        <th scope="row">{{ $baju->id }}</th>
                        <td>{{ $baju->pakaian->model }}</td>
                        <td>{{ $baju->ukuran }}</td>
                        <td>{{ $baju->warna }}</td>
                        <td>{{ $baju->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
