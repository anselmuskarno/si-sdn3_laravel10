<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;


class BeritaController extends Controller
{
    public function hapusBerita($id)
    {
        $berita = Berita::find($id);
        if ($berita->foto_berita != null) { //Hapus gambar lama
            Storage::delete($berita->foto_berita);
        }
        $berita->delete();

        return redirect('/beritaAdmin');
    }

    public function updateBerita(Request $request, $id)
    {

        $validateData = $request->validate([
            'judul_berita' => 'required',
            'penulis_berita' => 'required',
            'tanggal_berita' => 'required',
            'foto_berita' => 'mimes:jpg,png,jpeg|image|max:2048',
            'isi_berita' => 'required'
        ]);

        $berita           = Berita::find($id);


        if ($request->hasFile('foto_berita')) { //Jika ada gambar yang diupload

            if ($request->foto_berita_lama) { //Hapus gambar lama
                Storage::delete($request->foto_berita_lama);
            }
            $path = $request->file('foto_berita')->store('upload_foto_berita');
        } else { //jika tidak ada gambar yang diupload
            $path = $berita->foto_berita;
        }

        $berita->judul_berita    = $validateData['judul_berita'];
        $berita->penulis_berita    = $validateData['penulis_berita'];
        $berita->tanggal_berita    = $validateData['tanggal_berita'];
        $berita->foto_berita  = $path;
        $berita->isi_berita    = $validateData['isi_berita'];

        $berita->save();
        return redirect('/beritaAdmin');
    }

    public function tambahBerita(Request $request)
    {

        $validateData = $request->validate([
            'judul_berita' => 'required',
            'penulis_berita' => 'required',
            'tanggal_berita' => 'required',
            'foto_berita' => 'mimes:jpg,png,jpeg|image|max:2048',
            'isi_berita' => 'required'
        ]);


        if ($request->hasFile('foto_berita')) { //Jika ada gambar yang diupload
            $path = $request->file('foto_berita')->store('upload_foto_berita');
        } else { //jika tidak ada gambar yang diupload
            $path = '';
        }

        $validateData['foto_berita'] = $path;

        Berita::create($validateData);

        // $guru->save();
        return redirect('/beritaAdmin');
    }
}
