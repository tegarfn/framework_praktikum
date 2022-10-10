@extends('layouts.global')

@section('title')
    Selamat datang
@endsection

@section('content')
    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Good Bye Worlds!</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Prodi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bajus as $bj)
                    <tr>
                        <th scope="row">{{ $bj->id }}</th>
                        <td>{{ $bj->tipe->model }}</td>
                        <td>{{ $bj->ukuran }}</td>
                        <td>{{ $bj->warna }}</td>
                        <td>{{ $bj->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
