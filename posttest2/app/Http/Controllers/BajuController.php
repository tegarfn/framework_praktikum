<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use App\Models\Pakaian;
use Illuminate\Http\Request;

class BajuController extends Controller
{
    public function index()
    {
        return view('baju.index', [
            'bajus' => Baju::all(),
            'title' => 'Baju'
        ]);
    }
    public function create()
    {
        return view('baju.create', [
            "pakaians" => Pakaian::all(),
            'title' => 'baju'
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'tipe_id' => 'required',
            'Ukuran' => 'required|unique:mahasiswas|string',
            'warna' => 'required|string|max:100',
            'jumlah' => 'required|integer|max:100',
        ]);

        Baju::create($validateData);

        return redirect()->route('baju.index')->with('success', 'baju Berhasil Ditambahkan');
    }
    public function show(Baju $id)
    {
        return view('baju.show', [
            'baju' => $id,
            'title' => 'baju',
        ]);
    }
}
