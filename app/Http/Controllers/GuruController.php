<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use Illuminate\Support\Facades\Storage;


class GuruController extends Controller
{
    public function hapusGuru($id)
    {
        $guru = Guru::find($id);
        if ($guru->foto != null) { //Hapus gambar lama
            Storage::delete($guru->foto);
        }
        $guru->delete();

        return redirect('/guruAdmin');
    }

    public function updateGuru(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama_guru' => 'required',
            'nip_guru' => 'max:18',
            'tempat_lahir' => 'required',
            'tanggal_lahir_guru' => 'required',
            'jabatan' => '',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'nomor_hp' => '',
            'email' => '',
            'kelas_yang_diajar' => 'required',
            'alamat' => 'required',
            'foto' => 'mimes:jpg,png,jpeg|image|max:2048'
            // 'username' => 'required|min:3|unique:users',
            // 'password' => 'min:5'

        ]);

        $guru           = Guru::find($id);


        if ($request->hasFile('foto')) { //Jika ada gambar yang diupload

            if ($request->gambarLama) { //Hapus gambar lama
                Storage::delete($request->gambarLama);
            }
            $path = $request->file('foto')->store('upload_foto_guru');
        } else { //jika tidak ada gambar yang diupload
            $path = $guru->foto;
        }


        $guru->nama_guru    = $validateData['nama_guru'];
        $guru->nip_guru  = $validateData['nip_guru'];
        $guru->tempat_lahir  = $validateData['tempat_lahir'];
        $guru->tanggal_lahir_guru  = $validateData['tanggal_lahir_guru'];
        $guru->jabatan  = $validateData['jabatan'];
        $guru->jenis_kelamin  = $validateData['jenis_kelamin'];
        $guru->agama  = $validateData['agama'];
        $guru->nomor_hp  = $validateData['nomor_hp'];
        $guru->email  = $validateData['email'];
        $guru->kelas_yang_diajar  = $validateData['kelas_yang_diajar'];
        $guru->alamat  = $validateData['alamat'];
        $guru->foto  = $path;
        // return $path;

        $guru->save();
        return redirect('/guruAdmin');
    }

    public function tambahGuru(Request $request)
    {
        $validateData = $request->validate([
            'nama_guru' => 'required',
            'nip_guru' => 'max:18',
            'tempat_lahir' => 'required',
            'tanggal_lahir_guru' => 'required',
            'jabatan' => '',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'nomor_hp' => '',
            'email' => '',
            'kelas_yang_diajar' => 'required',
            'alamat' => 'required',
            'foto' => 'mimes:jpg,png,jpeg|image|max:2048'
            // 'username' => 'required|min:3|unique:users',
            // 'password' => 'min:5'

        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('upload_foto_guru');
        } else {
            $path = '';
        }
        if ($validateData['nomor_hp'] == null && $validateData['email'] == null) {
            $validateData['nomor_hp'] = '-';
            $validateData['email'] = '-';
        } else if ($validateData['nomor_hp'] != null && $validateData['email'] == null) {
            $validateData['email'] = '-';
        } else if ($validateData['nomor_hp'] == null && $validateData['email'] != null) {
            $validateData['nomor_hp'] = '-';
        }

        $validateData['foto'] = $path;

        Guru::create($validateData);

        // $guru->save();
        return redirect('/guruAdmin');
    }
}
