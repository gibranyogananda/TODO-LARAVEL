<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Menampilkan semua ToDo
    public function index()
    {
        $todos = Todo::orderBy('prioritas', 'desc')
                     ->orderBy('created_at', 'desc')
                     ->get();

        return view('todos.index', compact('todos'));
    }

    // Menampilkan form tambah ToDo
    public function create()
    {
        return view('todos.create');
    }

    // Menyimpan ToDo baru ke database
    public function store(Request $request)
    {
        $selesai = $request->has('selesai');
        $prioritas = $request->has('prioritas');

        Todo::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'selesai' => $selesai,
            'tanggal_selesai' => $selesai ? now() : null,
            'prioritas' => $prioritas,
        ]);

        return redirect('/');
    }

    // Menampilkan form edit ToDo
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);

        return view('todos.edit', compact('todo'));
    }

    // Menyimpan perubahan ToDo
    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);

        $selesai = $request->has('selesai');
        $prioritas = $request->has('prioritas');

        $todo->update([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'selesai' => $selesai,
            'tanggal_selesai' => $selesai
                ? ($todo->tanggal_selesai ?? now())
                : null,
            'prioritas' => $prioritas,
        ]);

        return redirect('/');
    }

    // Menghapus ToDo
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);

        $todo->delete();

        return redirect('/');
    }
}