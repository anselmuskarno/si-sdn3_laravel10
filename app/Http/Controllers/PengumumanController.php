<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Storage;


class PengumumanController extends Controller
{
    public function hapusPengumuman($id)
    {
        $pengumuman = Pengumuman::find($id);
        if ($pengumuman->foto_pengumuman != null) { //Hapus gambar lama
            Storage::delete($pengumuman->foto_pengumuman);
        }
        $pengumuman->delete();

        return redirect('/pengumumanAdmin');
    }

    public function updatePengumuman(Request $request, $id)
    {

        $validateData = $request->validate([
            'judul_pengumuman' => 'required',
            'penulis_pengumuman' => 'required',
            'tanggal_pengumuman' => 'required',
            'foto_pengumuman' => 'mimes:jpg,png,jpeg|image|max:2048',
            'isi_pengumuman' => 'required',
            'quotes' => 'required'
        ]);

        $pengumuman           = Pengumuman::find($id);


        if ($request->hasFile('foto_pengumuman')) { //Jika ada gambar yang diupload

            if ($request->foto_pengumuman_lama) { //Hapus gambar lama
                Storage::delete($request->foto_pengumuman_lama);
            }
            $path = $request->file('foto_pengumuman')->store('upload_foto_pengumuman');
        } else { //jika tidak ada gambar yang diupload
            $path = $pengumuman->foto_pengumuman;
        }

        $pengumuman->judul_pengumuman    = $validateData['judul_pengumuman'];
        $pengumuman->penulis_pengumuman    = $validateData['penulis_pengumuman'];
        $pengumuman->tanggal_pengumuman    = $validateData['tanggal_pengumuman'];
        $pengumuman->foto_pengumuman  = $path;
        $pengumuman->isi_pengumuman    = $validateData['isi_pengumuman'];
        $pengumuman->quotes    = $validateData['quotes'];
        $pengumuman->save();
        return redirect('/pengumumanAdmin');
    }

    public function tambahPengumuman(Request $request)
    {

        $validateData = $request->validate([
            'judul_pengumuman' => 'required',
            'penulis_pengumuman' => 'required',
            'tanggal_pengumuman' => 'required',
            'foto_pengumuman' => 'mimes:jpg,png,jpeg|image|max:2048',
            'isi_pengumuman' => 'required',
            'quotes' => 'required'
        ]);


        if ($request->hasFile('foto_pengumuman')) { //Jika ada gambar yang diupload
            $path = $request->file('foto_pengumuman')->store('upload_foto_pengumuman');
        } else { //jika tidak ada gambar yang diupload
            $path = '';
        }

        $validateData['foto_pengumuman'] = $path;

        Pengumuman::create($validateData);

        // $guru->save();
        return redirect('/pengumumanAdmin');
    }
}
