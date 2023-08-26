<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DaftarController extends Controller
{
    //Tambah Admin
    public function store(Request $request)
    {


        // return $request->mapel;
        //Validasi setiap inputan user

        //rules 
        //1. required = harus diisi
        //2. max = nilai maksimal berapa karakter
        //3. min = nilai minimum berapa karakter
        //4. unique:users = tidak boleh sama dengan yang ada di tabel users
        $validateData = $request->validate([
            'nama' => 'required|unique:users',
            'username' => 'required|min:3|unique:users',
            'password' => '',
            'jabatan' => '',
            'mapel' => '',
            'kelas' => 'required|unique:users'

        ]);

        $dataku = User::select('*')
            ->where([
                ['nama', '=', $request->nama],
                ['kelas', '=', $request->kelas]
            ])
            ->count();




        // echo $validateData['password'];
        //Enkripsi password

        // return;

        // return  $validateData['password'];

        // dd('Berhasil');


        //masukkan ke database
        User::create($validateData);
        // return "berhasil";
        //Pesan Berhasil
        $request->session()->flash('berhasil', 'Pendaftaran Berhasil. Silahkan Login');

        //arahkan ke route login
        return redirect('/adminWaliKelas');
    }

    public function updateWaliKelas(Request $request, $id)
    {
        // return 'ok';
        $validateData = $request->validate([
            'nama' => '',
            'username' => '',
            'password' => '',
            'jabatan' => '',
            'kelas' => '',
            'mapel' => ''

        ]);

        $walikelas           = User::find($id);
        $walikelas->nama    = $validateData['nama'];
        $walikelas->username  = $validateData['username'];
        $walikelas->password  = $validateData['password'];
        $walikelas->jabatan  = $validateData['jabatan'];
        $walikelas->kelas  = $validateData['kelas'];
        $walikelas->mapel  = $validateData['mapel'];
        // return $walikelas->jabatan;
        $walikelas->save();
        return redirect('/adminWaliKelas');
    }

    public function hapusWaliKelas($id)
    {
        $waliKelas = User::find($id);
        $waliKelas->delete();

        return redirect('/adminWaliKelas');
    }

    //Tambah Siswa
    public function tambahSiswa(Request $request)
    {

        $validateData = $request->validate([
            'nama' => '',
            'username' => 'min:3|unique:users',
            'password' => 'min:5',
            'jabatan' => '',
            'file' => ''
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['jabatan'] = '1';
        $validateData['file'] = '';

        User::create($validateData);
        $request->session()->flash('berhasil', 'Pendaftaran Berhasil. Silahkan Login');

        //arahkan ke route login
        return redirect('/siswa');
    }

    //Tambah Guru
    public function tambahGuru(Request $request)
    {

        $validateData = $request->validate([
            'nama' => '',
            'username' => 'min:3|unique:users',
            'password' => 'min:5',
            'jabatan' => ''

        ]);

        $validateData['password'] = bcrypt($validateData['password']);


        User::create($validateData);
        $request->session()->flash('berhasil', 'Pendaftaran Berhasil. Silahkan Login');

        //arahkan ke route login
        return redirect('/guruAdmin');
    }
}
