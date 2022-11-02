@extends('layouts.global')

@section('title')
    Data {{$baju->pakaian->model}}
@endsection

@section('content')
    <div class="container">
        <h3><strong>Detail Pesanan</strong></h3>
        <hr>
        <br>
        <table class="table table-borderless">

            <tr>
                <td>
                    <h4>Tipe</h4>
                </td>
                <td>
                    <h4>:</h4>
                </td>
                <td>
                    <h4>{{ $baju->pakaian->model }}</h4>
                </td>
            </tr>



            <tr>
                <td>
                    <h4>Ukuran</h4>
                </td>
                <td>
                    <h4>:</h4>
                </td>
                <td>
                    <h4>{{ $baju->ukuran }}</h4>
                </td>
            </tr>



            <tr>
                <td>
                    <h4>Warna</h4>
                </td>
                <td>
                    <h4>:</h4>
                </td>
                <td>
                    <h4>{{ $baju->warna }}</h4>
                </td>
            </tr>



            <tr>
                <td>
                    <h4>Jumlah</h4>
                </td>
                <td>
                    <h4>:</h4>
                </td>
                <td>
                    <h4>{{ $baju->jumlah }}</h4>
                </td>
            </tr>

        </table>
    </div>
@endsection
