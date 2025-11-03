<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'nim' => 'required|string|unique:students,nim',
            'email' => 'required|email',
            'jurusan' => 'required|string',
            'alamat' => 'required|string',
        ]);

        mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('berhasil', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function show(mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit(mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'nim' => 'required|string|unique:students,nim,' . $mahasiswa->id,
            'email' => 'required|email',
            'jurusan' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('berhasil', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
