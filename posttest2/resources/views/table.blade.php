@extends('layouts.global')

@section('title')
    Data Baju
@endsection

@section('content')
    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Data Baju</h2>
        @if (session('success'))
            <div class="alert alert-success">
                <b>Yeah!</b> {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('baju.create') }}" class=""><Button class="btn btn-primary mb-3">Tambah</Button></a>
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
                        <td>
                            <a href="/baju/show/{{$baju->id}}" class=""><Button class="btn btn-success mb-2">Lihat</Button></a>
                        </td>
                        <td>
                            <a href="/baju/{{$baju->id}}/edit" class=""><Button class="btn btn-warning mb-2">Edit</Button></a>
                        </td>
                        <td>
                            <form action="{{ route('baju.delete', $baju->id)}}" method="post" style="display: inline" onsubmit="confirm('Yakin menghapus?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger mb-3">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
