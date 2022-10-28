@extends('layouts.global')

@section('title')
    Add Data
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('baju.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="tipe" class="form-label ">Tipe</label>
                <select name="tipe" id="tipe" class="form-select @error('tipe') is-invalid @enderror"
                    aria-label="Default select example">
                    <option value="" selected>Pilih</option>
                    @foreach ($pakaians as $pk)
                        <option value={{ $pk->id }}>{{ $pk->model }}</option>
                    @endforeach
                </select>
                @error('prodi_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ukuran" class="form-label ">Ukuran</label>
                <select name="ukuran" id="ukuran" class="form-select @error('ukuran') is-invalid @enderror"
                    aria-label="Default select example">
                    <option value="" selected>Pilih</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>

                </select>
                @error('ukuran')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="warna" class="form-label">Warna</label>
                <input type="text" class="form-control @error('warna') is-invalid @enderror" id="warna" name="warna"
                    placeholder="Warna Baju..." required>
                @error('warna')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah"
                    name="jumlah" placeholder="Jumlah..." required>
                @error('jumlah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>
@endsection
