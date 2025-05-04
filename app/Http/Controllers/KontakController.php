<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    // Menampilkan daftar kontak dengan fitur pencarian
    public function index(Request $request)
    {
        // Ambil query pencarian jika ada
        $query = Kontak::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('pesan', 'like', "%{$search}%");
        }

        // Ambil data terbaru dengan pagination
        $kontaks = $query->latest()->paginate(10);

        return view('kontak.index', compact('kontaks'));
    }

    // Menampilkan form tambah kontak
    public function create()
    {
        return view('kontak.create');
    }

    // Menyimpan data kontak yang diinput
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string',
        ]);

        // Menyimpan data kontak ke database
        Kontak::create($request->all());

        return redirect()->route('kontak.index')->with('success', 'Pesan berhasil dikirim!');
    }

    // Menampilkan detail kontak
    public function show($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('kontak.show', compact('kontak'));
    }

    // Menampilkan form edit kontak
    public function edit($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('kontak.edit', compact('kontak'));
    }

    // Mengupdate data kontak
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);
    
        // Cari kontak dan update
        $kontak = Kontak::findOrFail($id);
        $kontak->nama = $request->nama;
        $kontak->email = $request->email;
        $kontak->pesan = $request->pesan;
        $kontak->save();
    
        // Redirect kembali dengan pesan sukses
        return redirect()->route('kontak.index')->with('success', 'Pesan berhasil diperbarui!');
    }

    // Menghapus kontak
    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();

        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil dihapus.');
    }
}
