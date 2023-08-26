<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Raport1;
use App\Models\Raport2;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // mengarah pada file login yang ada di folder view
        return view('login', [
            'judul' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();
        if ($user == null) {
            $request->session()->flash('gagal', 'NIS Atau Password Salah  !');
            return redirect()->intended('/');
        }
        $username = $user->username;
        $password = $user->password;
        $jabatan =  $user->jabatan;
        $kelas =  $user->kelas;
        // return $kelas;

        if ($request->password == $password && $request->username == $username && $jabatan == "admin") {
            return redirect()->intended('/halamanAdmin');
        } else if ($request->password == $password && $request->username == $username && $jabatan == "guru") {
            return redirect()->intended('/halamanGuru');
        } else if ($request->password == $password && $request->username == $username && $jabatan == "walikelas") {
            $raport = Raport1::where('kelas', $kelas)->get();
            $siswa = Siswa::where('kelas', $kelas)->get();
            $daftar_kelas = Kelas::where('nama_kelas', $kelas)->get();
            // return  $siswa->count();
            return view('admin/indexWaliKelas', [
                'kelas' => '1',
                'semester' => '1',
                'kelassemester' => '1',
                "nama" => "anselmus",
                "judul" => "user",
                'admin' => User::count(),
                'siswa' => Siswa::count(),
                'raport' => $raport,
                'raport2' => Raport2::all(),
                'daftar_kelas' => $daftar_kelas,
                'mapel' => Mapel::all(),
                'daftarsiswa' => $siswa,
                'kelaswali' => $kelas
            ]);
        }

        $request->session()->flash('gagal', 'Username atau password salah !');
        return redirect()->intended('/');
    }

    public function loginSiswa(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $siswa = Siswa::where('nis_siswa', $request->username)->first();
        if ($siswa == null) {
            $request->session()->flash('gagal', 'NIS Atau Password Salah  !');
            return redirect('raport');
        }
        $nis = $siswa->nis_siswa;
        $password = $siswa->password_siswa;

        if ($request->password == $password && $request->username == $nis) {
            $dataku = Raport1::where('nis', $nis)->get();
            $idraport1 = Raport1::where('nis', $nis)->first();
            $Count = Raport1::where('nis', $nis)->count();

            if ($Count == 0) {
                $request->session()->flash('notFound', 'Raport Belum Diinput! Silahkan Menghubungi Wali Kelas');
                return redirect('raport');
            }
            $idraport2 = $idraport1->id - 5;
            $dataku2 = Raport2::where('id', $idraport2)->get();
            $mapel = Mapel::all();
            $kelas = Kelas::all();
            return view('admin/raportku', [
                'judul' => 'Registrasi',
                'dataku' => $dataku,
                'dataku2' => $dataku2,
                'mapel' => $mapel,
                'kelas' => $kelas,
            ]);
        } else {
            $request->session()->flash('gagal', 'NIS Atau Password Salah  !');
            return redirect('raport');
        }

        return view('cetakRaport', [
            'sampul' => $siswa->sampul_raport
        ]);
        return $siswa->nama_siswa;
    }

    public function loginSiswa2($nama_siswa)
    {
        $dataku = Raport1::where('nama_siswa', $nama_siswa)->get();
        $idraport1 = Raport1::where('nama_siswa', $nama_siswa)->first();
        $idraport2 = $idraport1->id - 5;
        $dataku2 = Raport2::where('id', $idraport2)->get();
        $mapel = Mapel::all();
        return view('admin/raportku4', [
            'judul' => 'Registrasi',
            'dataku' => $dataku,
            'dataku2' => $dataku2,
            'mapel' => $mapel
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flash('keluar', 'Logout Berhasil !');
        return redirect('/');
    }

    public function hapusSiswa($id)
    {
        $pemasukan = User::find($id);
        $pemasukan->delete();

        return redirect('/siswa');
    }

    public function hapusGuru($id)
    {
        $pemasukan = User::find($id);
        $pemasukan->delete();

        return redirect('/guruAdmin');
    }

    public function updateSiswa(Request $request, $id)
    {
        $siswa           = User::find($id);
        $passwordLama = $siswa->password;
        $siswa->nama    = $request->nama;
        $siswa->username  = $request->username;
        if ($request->password != null) {
            $siswa->password  = $request->password;
        } else {
            $siswa->password =  $siswa->password;
        }
        $siswa->save();
        return redirect('/siswa');
    }
}
