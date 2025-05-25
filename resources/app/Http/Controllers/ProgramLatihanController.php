<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProgramLatihan;

class ProgramLatihanController extends Controller
{
    // Untuk trainee
    public function programlatihan()
    {
        return view('pages.programlatihan');
    }

    // Untuk trainer - TAMPILKAN semua data latihan dari trainer
    public function programlatihan_trainer()
    {
        $programs = ProgramLatihan::where('id_user', Auth::id())->get();
        return view('pages.trainer.ProgramLatihan', compact('programs'));
    }

    // SIMPAN data baru dari trainer
public function store(Request $request)
{
    ProgramLatihan::create([
        'id_user' => Auth::id(),
        'nama' => $request->nama,
        'tanggal' => $request->tanggal,
        'jenis_latihan' => $request->jenis_latihan,
        'detail' => $request->detail,
        'status' => $request->status,
    ]);

    return redirect()->back()->with('success', 'Program berhasil ditambahkan!');
}


    // UPDATE data latihan
    public function update(Request $request, $id)
    {
        $latihan = ProgramLatihan::findOrFail($id);
        $latihan->update($request->all());

        return redirect()->back()->with('success', 'Program latihan berhasil diperbarui!');
    }

    // HAPUS data latihan
    public function destroy($id)
    {
      $latihan = ProgramLatihan::where('id_user', Auth::id())->get();

        $latihan->delete();

        return redirect()->back()->with('success', 'Program latihan berhasil dihapus!');
    }
}
