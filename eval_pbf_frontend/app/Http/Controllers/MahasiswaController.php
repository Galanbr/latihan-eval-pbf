<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8080/mahasiswa');
        $mahasiswas = $response->json();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'nim' => 'required|numeric',
        'email' => 'required|email',
        'prodi' => 'required',
    ]);

    Http::post('http://localhost:8080/mahasiswa', $request->all());
    return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan!');
}

    public function edit($nim)
    {
        $response = Http::get("http://localhost:8080/mahasiswa/{$nim}");
        $mahasiswa = $response->json();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

   public function update(Request $request, $nim)
{
    $request->validate([
        'nama' => 'required',
        'nim' => 'required|numeric',
        'email' => 'required|email',
        'prodi' => 'required',
    ]);

    Http::put("http://localhost:8080/mahasiswa/{$nim}", $request->all());
    return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil diupdate!');
}

    public function delete($nim)
    {
        Http::delete("http://localhost:8080/mahasiswa/{$nim}");
        return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil dihapus!');
    }
}
