@extends('layouts.global')

@section('title')
    Selamat datang
@endsection

@section('content')
    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Data Baju</h2>
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
                @foreach ($bajus as $bj)
                    <tr>
                        <th scope="row">{{ $bj->id }}</th>
                        <td>{{ $bj->tipe }}</td>
                        <td>{{ $bj->ukuran }}</td>
                        <td>{{ $bj->warna }}</td>
                        <td>{{ $bj->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
