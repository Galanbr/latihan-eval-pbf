<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DosenController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8080/dosen');
        $dosens = $response->json();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        Http::post('http://localhost:8080/dosen', $request->all());
        return redirect('/dosen')->with('success', 'Dosen berhasil ditambahkan!');
    }

    public function edit($nidn)
    {
        $response = Http::get("http://localhost:8080/dosen/{$nidn}");
        $dosen = $response->json();
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $nidn)
    {
        Http::put("http://localhost:8080/dosen/{$nidn}", $request->all());
        return redirect('/dosen')->with('success', 'Dosen berhasil diupdate!');
    }

    public function delete($nidn)
    {
        Http::delete("http://localhost:8080/dosen/{$nidn}");
        return redirect('/dosen')->with('success', 'Dosen berhasil dihapus!');
    }
}
