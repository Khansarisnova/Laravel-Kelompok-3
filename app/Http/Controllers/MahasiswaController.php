<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_Mahasiswa = Mahasiswa::where('nama_lengkap', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_Mahasiswa = Mahasiswa::all();
        }
        return view('Mahasiswa.index', ['data_Mahasiswa' => $data_Mahasiswa]);
    }

    public function create(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect('/dashboard')->with('Suksess', 'Data Berhasil');
    }

    public function Edit($id)
    {
        $Mahasiswa = Mahasiswa::find($id);
        return view('Mahasiswa.edit', ['Mahasiswa' => $Mahasiswa]);
    }
    

    public function Update(Request $request, $id)
{
    $Mahasiswa = \App\Models\Mahasiswa::findOrFail($id);
    $Mahasiswa->update($request->only(['angkatan', 'jurusan', 'email', 'alamat', 'nim', 'nama','jenis_kelamin']));
    
    return redirect('/dashboard')->with('Suksess', 'Data Berhasil Diupdate');

}


    public function Delete(Request $request, $id)
    {
        $Mahasiswa = Mahasiswa::find($id);
        $Mahasiswa->delete();
        return redirect('/dashboard')->with('Suksess', 'Data Berhasil Dihapus');
    }
}
