<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::latest()->get();
        return view('home', compact('mahasiswas'));
    }

    public function add(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|unique:mahasiswas,nim|min:6|max:20',
            'email' => 'required|email|unique:mahasiswas,email|max:255',
            'jenis_kelamin' => 'required|in:L,P',
        ],[
            'name.required' => 'Nama harus diisi',
            'nim.required' => 'NIM harus diisi',
            'nim.unique' => 'NIM sudah terdaftar',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'jenis_kelamin.required' => 'Jenis kelamin harus dipilih',
        ]);

        Mahasiswa::create($validated);
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    public function delete(Mahasiswa $mahasiswa){
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
