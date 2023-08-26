<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\Support\Facades\Storage;


class KelasController extends Controller
{
    public function hapusKelas($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        return redirect('/kelasAdmin');
    }

    public function updateKelas(Request $request, $id)
    {

        $validateData = $request->validate([
            'nama_kelas' => 'required'
        ]);

        $kelas           = Kelas::find($id);
        $kelas->nama_kelas    = $validateData['nama_kelas'];
        $kelas->save();
        return redirect('/kelasAdmin');
    }

    public function tambahKelas(Request $request)
    {

        $validateData = $request->validate([
            'nama_kelas' => 'required'

        ]);

        Kelas::create($validateData);

        // $guru->save();
        return redirect('/kelasAdmin');
    }
}
