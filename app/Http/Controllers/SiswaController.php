<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Raport1;
use App\Models\Raport2;
use App\Models\Mapel;
use App\Models\Kelas;
use Illuminate\Support\Facades\Storage;
use Mockery\Generator\Parameter;

class SiswaController extends Controller
{
    public function hapusSiswa($id)
    {
        $siswa = Siswa::find($id);
        if ($siswa->sampul_raport != null) { //Hapus gambar lama
            Storage::delete($siswa->sampul_raport);
        }
        $siswa->delete();

        return redirect('/siswa');
    }

    public function raportsemester($kelas, $nama_siswa, $semester)
    {
        // echo $kelas . '<br>';
        // echo $nama_siswa . '<br>';
        // echo $semester . '<br>';
        // return;
        // // return $semester;
        // if ($semester == "1ganjil") {
        //     $parameter1 = "1";
        //     $parameter2 = "ganjil";
        // } else if ($semester == "1genap") {
        //     $parameter1 = "1";
        //     $parameter2 = "genap";
        // } else  if ($semester == "2ganjil") {
        //     $parameter1 = "2";
        //     $parameter2 = "ganjil";
        // } else if ($semester == "2genap") {
        //     $parameter1 = "2";
        //     $parameter2 = "genap";
        // } else  if ($semester == "3ganjil") {
        //     $parameter1 = "3";
        //     $parameter2 = "ganjil";
        // } else if ($semester == "3genap") {
        //     $parameter1 = "3";
        //     $parameter2 = "genap";
        // } else  if ($semester == "4ganjil") {
        //     $parameter1 = "4";
        //     $parameter2 = "ganjil";
        // } else if ($semester == "4genap") {
        //     $parameter1 = "4";
        //     $parameter2 = "genap";
        // } else  if ($semester == "5ganjil") {
        //     $parameter1 = "5";
        //     $parameter2 = "ganjil";
        // } else if ($semester == "5genap") {
        //     $parameter1 = "5";
        //     $parameter2 = "genap";
        // } else  if ($semester == "6ganjil") {
        //     $parameter1 = "6";
        //     $parameter2 = "ganjil";
        // } else if ($semester == "6genap") {
        //     $parameter1 = "6";
        //     $parameter2 = "genap";
        // }
        $parameter3 = $nama_siswa;
        // $siswa = Siswa::where('nis_siswa', $semester)->first();

        $dataku = Raport1::select('*')
            ->where([
                ['nama_siswa', '=', $parameter3],
                ['kelas', '=', $kelas],
                ['semester', '=', $semester]
            ])
            ->get();

        $mapel = Mapel::all();
        if ($dataku->count() != 0) {
            $idRaport1 = Raport1::select('*')
                ->where([
                    ['nama_siswa', '=', $parameter3],
                    ['kelas', '=', $kelas],
                    ['semester', '=', $semester]
                ])
                ->first();

            $idraport2 = $idRaport1->id - 5;

            $dataku2 = Raport2::select('*')
                ->where([
                    ['id', '=', $idraport2]
                ])
                ->get();
            return view('admin/raportku2', [
                'judul' => 'Registrasi',
                'kelas' => Kelas::all(),
                'dataku' => $dataku,
                'dataku2' => $dataku2,
                'mapel' => $mapel
            ]);
        } else {

            return view('admin/raportku3', [
                'judul' => 'Registrasi',
                'dataku' => $dataku,
                'mapel' => $mapel
            ]);
        }
    }

    public function ubahSemester()
    {
        return 'ok';
        $siswa = Siswa::find($id);
        if ($siswa->sampul_raport != null) { //Hapus gambar lama
            Storage::delete($siswa->sampul_raport);
        }
        $siswa->delete();

        return redirect('/siswa');
    }


    public function hapusRaport(Request $request)
    {
        // return $request->kelasku;
        // return $request->idraport2;
        $raport1 = Raport1::find($request->idraport1);
        $raport2 = Raport2::find($request->idraport2);
        $raport1->delete();
        $raport2->delete();
        // return $raport1->kelas;
        $raport = Raport1::where('kelas', $request->kelasku)->get();
        $daftar_kelas = Kelas::where('nama_kelas', $raport1->kelas)->get();
        return view('admin/indexWaliKelas', [
            'kelas' => '0',
            'semester' => '0',
            'kelassemester' => '0',
            "nama" => "anselmus",
            "judul" => "user",
            'siswa' => Siswa::count(),
            'raport' => $raport,
            'raport2' => Raport2::all(),
            'mapel' => Mapel::all(),
            'daftarsiswa' => Siswa::all(),
            'kelaswali' => $request->kelasku,
            'daftar_kelas' => $daftar_kelas,
        ]);
    }

    public function updateSiswa(Request $request, $id)
    {

        $validateData = $request->validate([
            'nama_siswa' => 'required',
            'nis_siswa' => 'required',
            'nisn' => 'required',
            'password_siswa' => '',
            'sampul_raport' => 'mimes:jpg,png,jpeg|image|max:2048',
            'tanggal_lahir_siswa' => 'required',
            'catatan' => '',
            'kelas' => '',
        ]);

        $siswa           = Siswa::find($id);


        if ($request->hasFile('sampul_raport')) { //Jika ada gambar yang diupload

            if ($request->sampulLama) { //Hapus gambar lama
                Storage::delete($request->sampulLama);
            }
            $path = $request->file('sampul_raport')->store('upload_sampul_raport');
        } else { //jika tidak ada gambar yang diupload
            $path = $siswa->sampul_raport;
        }

        // return $validateData['password_siswa'];

        $siswa->nama_siswa    = $validateData['nama_siswa'];
        $siswa->nis_siswa  = $validateData['nis_siswa'];
        $siswa->nisn  = $validateData['nisn'];
        $siswa->password_siswa  = $validateData['password_siswa'];
        $siswa->tanggal_lahir_siswa  = $validateData['tanggal_lahir_siswa'];
        $siswa->catatan  = $validateData['catatan'];
        $siswa->kelas  = $validateData['kelas'];
        $siswa->sampul_raport  = $path;

        $siswa->save();
        return redirect('/siswa');
    }

    public function tambahSiswa(Request $request)
    {

        $validateData = $request->validate([
            'nama_siswa' => 'required',
            'nis_siswa' => 'required',
            'nisn' => 'required',
            'password_siswa' => 'required',
            'sampul_raport' => 'mimes:jpg,png,jpeg|image|max:2048',
            'tanggal_lahir_siswa' => 'required',
            'catatan' => '',
            'kelas' => '',
        ]);

        if ($request->hasFile('sampul_raport')) { //Jika ada gambar yang diupload
            $path = $request->file('sampul_raport')->store('upload_sampul_raport');
        } else { //jika tidak ada gambar yang diupload
            $path = '';
        }
        $validateData['sampul_raport'] = $path;

        Siswa::create($validateData);

        // $guru->save();
        return redirect('/siswa');
    }
    public function tambahRaportSiswa(Request $request)
    {
        if ($request->kelas == "0" && $request->semester == "0") {
            return redirect('/raportAdmin2');
        } elseif ($request->kelas == "0" && $request->semester != "0") {
            return redirect('/raportAdmin2');
        } elseif ($request->kelas != "0" && $request->semester == "0") {
            return redirect('/raportAdmin2');
        }
        $validateData = $request->validate([
            'nama_siswa' => 'required',
            'nis' => '',
            'nisn' => '',
            'semester' => 'required',
            'tahun_pelajaran' => 'required',
            'kelas' => 'required',
            'nama_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'nama_sikap1' => 'required',
            'deskripsi_sikap1' => 'required',
            'nama_sikap2' => 'required',
            'deskripsi_sikap2' => 'required',
            'nama_mapel1' => '',
            'nilai_pengetahuan_mapel1' => '',
            'predikat_pengetahuan_mapel1' => '',
            'deskripsi_pengetahuan_mapel1' => '',
            'nilai_keterampilan_mapel1' => '',
            'predikat_keterampilan_mapel1' => '',
            'deskripsi_keterampilan_mapel1' => '',
            'nama_mapel2' => '',
            'nilai_pengetahuan_mapel2' => '',
            'predikat_pengetahuan_mapel2' => '',
            'deskripsi_pengetahuan_mapel2' => '',
            'nilai_keterampilan_mapel2' => '',
            'predikat_keterampilan_mapel2' => '',
            'deskripsi_keterampilan_mapel2' => '',
            'nama_mapel3' => '',
            'nilai_pengetahuan_mapel3' => '',
            'predikat_pengetahuan_mapel3' => '',
            'deskripsi_pengetahuan_mapel3' => '',
            'nilai_keterampilan_mapel3' => '',
            'predikat_keterampilan_mapel3' => '',
            'deskripsi_keterampilan_mapel3' => '',
            'nama_mapel4' => '',
            'nilai_pengetahuan_mapel4' => '',
            'predikat_pengetahuan_mapel4' => '',
            'deskripsi_pengetahuan_mapel4' => '',
            'nilai_keterampilan_mapel4' => '',
            'predikat_keterampilan_mapel4' => '',
            'deskripsi_keterampilan_mapel4' => '',
            'nama_mapel5' => '',
            'nilai_pengetahuan_mapel5' => '',
            'predikat_pengetahuan_mapel5' => '',
            'deskripsi_pengetahuan_mapel5' => '',
            'nilai_keterampilan_mapel5' => '',
            'predikat_keterampilan_mapel5' => '',
            'deskripsi_keterampilan_mapel5' => '',
            'nama_mapel6' => '',
            'nilai_pengetahuan_mapel6' => '',
            'predikat_pengetahuan_mapel6' => '',
            'deskripsi_pengetahuan_mapel6' => '',
            'nilai_keterampilan_mapel6' => '',
            'predikat_keterampilan_mapel6' => '',
            'deskripsi_keterampilan_mapel6' => '',
            'nama_mapel7' => '',
            'nilai_pengetahuan_mapel7' => '',
            'predikat_pengetahuan_mapel7' => '',
            'deskripsi_pengetahuan_mapel7' => '',
            'nilai_keterampilan_mapel7' => '',
            'predikat_keterampilan_mapel7' => '',
            'deskripsi_keterampilan_mapel7' => '',
            'nama_mapel8' => '',
            'nilai_pengetahuan_mapel8' => '',
            'predikat_pengetahuan_mapel8' => '',
            'deskripsi_pengetahuan_mapel8' => '',
            'nilai_keterampilan_mapel8' => '',
            'predikat_keterampilan_mapel8' => '',
            'deskripsi_keterampilan_mapel8' => '',
            'nama_mapel9' => '',
            'nilai_pengetahuan_mapel9' => '',
            'predikat_pengetahuan_mapel9' => '',
            'deskripsi_pengetahuan_mapel9' => '',
            'nilai_keterampilan_mapel9' => '',
            'predikat_keterampilan_mapel9' => '',
            'deskripsi_keterampilan_mapel9' => '',
        ]);
        $validateData2 = $request->validate([
            'nama_ekstrakurikuler1' => '',
            'keterangan_nama_ekstrakurikuler1' => '',
            'nama_ekstrakurikuler2' => '',
            'keterangan_nama_ekstrakurikuler2' => '',
            'saran_saran' => '',
            'tinggi_badan_semester1' => '',
            'tinggi_badan_semester2' => '',
            'berat_badan_semester1' => '',
            'berat_badan_semester2' => '',
            'nama_aspek_fisik1' => '',
            'keterangan_aspek_fisik1' => '',
            'nama_aspek_fisik2' => '',
            'keterangan_aspek_fisik2' => '',
            'nama_aspek_fisik3' => '',
            'keterangan_aspek_fisik3' => '',
            'nama_aspek_fisik4' => '',
            'keterangan_aspek_fisik4' => '',
            'jenis_prestasi1' => '',
            'keterangan_prestasi1' => '',
            'jenis_prestasi2' => '',
            'keterangan_prestasi2' => '',
            'jumlah_sakit' => '',
            'jumlah_izin' => '',
            'jumlah_tanpa_keterangan' => '',
            'tanggal_penulisan_raport' => '',
            'nama_wali_kelas' => '',
            'nip_wali_kelas' => '',
            'keputusan_naik_kelas' => '',
        ]);
        $siswa = Siswa::where('nama_siswa', $request->nama_siswa)->first();
        // return $validateData['nama_siswa'];
        // $siswa = Siswa::find($validateData['nama_siswa']);
        // return $siswa->nama_siswa;
        // echo ($siswa->nis_siswa) . '<br>';
        // return $siswa->nisn;
        $validateData['nis'] = $siswa->nis_siswa;
        $validateData['nisn'] = $siswa->nisn;
        Raport1::create($validateData);
        Raport2::create($validateData2);
        // return 'okmbbbb';

        // $guru->save();
        $daftar_kelas = Kelas::where('nama_kelas', $request->kelas)->get();
        $raport = Raport1::where('kelas', $request->kelasku)->get();
        return view('admin/indexWaliKelas', [
            'kelas' => '3',
            'semester' => '3',
            'kelassemester' => '3',
            "nama" => "anselmus",
            "judul" => "user",
            'siswa' => Siswa::count(),
            'raport' => $raport,
            'raport2' => Raport2::all(),
            'mapel' => Mapel::all(),
            'daftarsiswa' => Siswa::all(),
            'kelaswali' => $request->kelasku,
            'daftar_kelas' => $daftar_kelas,
        ]);
    }


    public function editRaportSiswa(Request $request)
    {
        // return $request->kelasku;
        $raport1           = Raport1::find($request->idraport1);
        $raport2           = Raport2::find($request->idraport2);

        if ($request->kelas == "0" && $request->semester == "0") {
            return redirect('/raportAdmin2');
        } elseif ($request->kelas == "0" && $request->semester != "0") {
            return redirect('/raportAdmin2');
        } elseif ($request->kelas != "0" && $request->semester == "0") {
            return redirect('/raportAdmin2');
        }

        $validateData = $request->validate([
            'nama_siswa' => 'required',
            'nis' => 'required',
            'nisn' => 'required',
            'semester' => 'required',
            'tahun_pelajaran' => 'required',
            'kelas' => 'required',
            'nama_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'nama_sikap1' => 'required',
            'deskripsi_sikap1' => 'required',
            'nama_sikap2' => 'required',
            'deskripsi_sikap2' => 'required',
            'nama_mapel1' => '',
            'nilai_pengetahuan_mapel1' => '',
            'predikat_pengetahuan_mapel1' => '',
            'deskripsi_pengetahuan_mapel1' => '',
            'nilai_keterampilan_mapel1' => '',
            'predikat_keterampilan_mapel1' => '',
            'deskripsi_keterampilan_mapel1' => '',
            'nama_mapel2' => '',
            'nilai_pengetahuan_mapel2' => '',
            'predikat_pengetahuan_mapel2' => '',
            'deskripsi_pengetahuan_mapel2' => '',
            'nilai_keterampilan_mapel2' => '',
            'predikat_keterampilan_mapel2' => '',
            'deskripsi_keterampilan_mapel2' => '',
            'nama_mapel3' => '',
            'nilai_pengetahuan_mapel3' => '',
            'predikat_pengetahuan_mapel3' => '',
            'deskripsi_pengetahuan_mapel3' => '',
            'nilai_keterampilan_mapel3' => '',
            'predikat_keterampilan_mapel3' => '',
            'deskripsi_keterampilan_mapel3' => '',
            'nama_mapel4' => '',
            'nilai_pengetahuan_mapel4' => '',
            'predikat_pengetahuan_mapel4' => '',
            'deskripsi_pengetahuan_mapel4' => '',
            'nilai_keterampilan_mapel4' => '',
            'predikat_keterampilan_mapel4' => '',
            'deskripsi_keterampilan_mapel4' => '',
            'nama_mapel5' => '',
            'nilai_pengetahuan_mapel5' => '',
            'predikat_pengetahuan_mapel5' => '',
            'deskripsi_pengetahuan_mapel5' => '',
            'nilai_keterampilan_mapel5' => '',
            'predikat_keterampilan_mapel5' => '',
            'deskripsi_keterampilan_mapel5' => '',
            'nama_mapel6' => '',
            'nilai_pengetahuan_mapel6' => '',
            'predikat_pengetahuan_mapel6' => '',
            'deskripsi_pengetahuan_mapel6' => '',
            'nilai_keterampilan_mapel6' => '',
            'predikat_keterampilan_mapel6' => '',
            'deskripsi_keterampilan_mapel6' => '',
            'nama_mapel7' => '',
            'nilai_pengetahuan_mapel7' => '',
            'predikat_pengetahuan_mapel7' => '',
            'deskripsi_pengetahuan_mapel7' => '',
            'nilai_keterampilan_mapel7' => '',
            'predikat_keterampilan_mapel7' => '',
            'deskripsi_keterampilan_mapel7' => '',
            'nama_mapel8' => '',
            'nilai_pengetahuan_mapel8' => '',
            'predikat_pengetahuan_mapel8' => '',
            'deskripsi_pengetahuan_mapel8' => '',
            'nilai_keterampilan_mapel8' => '',
            'predikat_keterampilan_mapel8' => '',
            'deskripsi_keterampilan_mapel8' => '',
            'nama_mapel9' => '',
            'nilai_pengetahuan_mapel9' => '',
            'predikat_pengetahuan_mapel9' => '',
            'deskripsi_pengetahuan_mapel9' => '',
            'nilai_keterampilan_mapel9' => '',
            'predikat_keterampilan_mapel9' => '',
            'deskripsi_keterampilan_mapel9' => '',
        ]);

        $raport1->nama_siswa    = $validateData['nama_siswa'];
        $raport1->nis = $validateData['nis'];
        $raport1->nisn = $validateData['nisn'];
        $raport1->semester = $validateData['semester'];
        $raport1->tahun_pelajaran = $validateData['tahun_pelajaran'];
        $raport1->kelas = $validateData['kelas'];
        $raport1->nama_sekolah = $validateData['nama_sekolah'];
        $raport1->alamat_sekolah = $validateData['alamat_sekolah'];
        $raport1->nama_sikap1 = $validateData['nama_sikap1'];
        $raport1->deskripsi_sikap1 = $validateData['deskripsi_sikap1'];
        $raport1->nama_sikap2 = $validateData['nama_sikap2'];
        $raport1->deskripsi_sikap2 = $validateData['deskripsi_sikap2'];
        $raport1->nama_mapel1 = $validateData['nama_mapel1'];
        $raport1->nilai_pengetahuan_mapel1 = $validateData['nilai_pengetahuan_mapel1'];
        $raport1->predikat_pengetahuan_mapel1 = $validateData['predikat_pengetahuan_mapel1'];
        $raport1->deskripsi_pengetahuan_mapel1 = $validateData['deskripsi_pengetahuan_mapel1'];
        $raport1->nilai_keterampilan_mapel1 = $validateData['nilai_keterampilan_mapel1'];
        $raport1->predikat_keterampilan_mapel1 = $validateData['predikat_keterampilan_mapel1'];
        $raport1->deskripsi_keterampilan_mapel1 = $validateData['deskripsi_keterampilan_mapel1'];
        $raport1->nama_mapel2 = $validateData['nama_mapel2'];
        $raport1->nilai_pengetahuan_mapel2 = $validateData['nilai_pengetahuan_mapel2'];
        $raport1->predikat_pengetahuan_mapel2 = $validateData['predikat_pengetahuan_mapel2'];
        $raport1->deskripsi_pengetahuan_mapel2 = $validateData['deskripsi_pengetahuan_mapel2'];
        $raport1->nilai_keterampilan_mapel2 = $validateData['nilai_keterampilan_mapel2'];
        $raport1->predikat_keterampilan_mapel2 = $validateData['predikat_keterampilan_mapel2'];
        $raport1->deskripsi_keterampilan_mapel2 = $validateData['deskripsi_keterampilan_mapel2'];
        $raport1->nama_mapel3 = $validateData['nama_mapel3'];
        $raport1->nilai_pengetahuan_mapel3 = $validateData['nilai_pengetahuan_mapel3'];
        $raport1->predikat_pengetahuan_mapel3 = $validateData['predikat_pengetahuan_mapel3'];
        $raport1->deskripsi_pengetahuan_mapel3 = $validateData['deskripsi_pengetahuan_mapel3'];
        $raport1->nilai_keterampilan_mapel3 = $validateData['nilai_keterampilan_mapel3'];
        $raport1->predikat_keterampilan_mapel3 = $validateData['predikat_keterampilan_mapel3'];
        $raport1->deskripsi_keterampilan_mapel3 = $validateData['deskripsi_keterampilan_mapel3'];
        $raport1->nama_mapel4 = $validateData['nama_mapel4'];
        $raport1->nilai_pengetahuan_mapel4 = $validateData['nilai_pengetahuan_mapel4'];
        $raport1->predikat_pengetahuan_mapel4 = $validateData['predikat_pengetahuan_mapel4'];
        $raport1->deskripsi_pengetahuan_mapel4 = $validateData['deskripsi_pengetahuan_mapel4'];
        $raport1->nilai_keterampilan_mapel4 = $validateData['nilai_keterampilan_mapel4'];
        $raport1->predikat_keterampilan_mapel4 = $validateData['predikat_keterampilan_mapel4'];
        $raport1->deskripsi_keterampilan_mapel4 = $validateData['deskripsi_keterampilan_mapel4'];
        $raport1->nama_mapel5 = $validateData['nama_mapel5'];
        $raport1->nilai_pengetahuan_mapel5 = $validateData['nilai_pengetahuan_mapel5'];
        $raport1->predikat_pengetahuan_mapel5 = $validateData['predikat_pengetahuan_mapel5'];
        $raport1->deskripsi_pengetahuan_mapel5 = $validateData['deskripsi_pengetahuan_mapel5'];
        $raport1->nilai_keterampilan_mapel5 = $validateData['nilai_keterampilan_mapel5'];
        $raport1->predikat_keterampilan_mapel5 = $validateData['predikat_keterampilan_mapel5'];
        $raport1->deskripsi_keterampilan_mapel5 = $validateData['deskripsi_keterampilan_mapel5'];
        $raport1->nama_mapel6 = $validateData['nama_mapel6'];
        $raport1->nilai_pengetahuan_mapel6 = $validateData['nilai_pengetahuan_mapel6'];
        $raport1->predikat_pengetahuan_mapel6 = $validateData['predikat_pengetahuan_mapel6'];
        $raport1->deskripsi_pengetahuan_mapel6 = $validateData['deskripsi_pengetahuan_mapel6'];
        $raport1->nilai_keterampilan_mapel6 = $validateData['nilai_keterampilan_mapel6'];
        $raport1->predikat_keterampilan_mapel6 = $validateData['predikat_keterampilan_mapel6'];
        $raport1->deskripsi_keterampilan_mapel6 = $validateData['deskripsi_keterampilan_mapel6'];
        $raport1->nama_mapel7 = $validateData['nama_mapel7'];
        $raport1->nilai_pengetahuan_mapel7 = $validateData['nilai_pengetahuan_mapel7'];
        $raport1->predikat_pengetahuan_mapel7 = $validateData['predikat_pengetahuan_mapel7'];
        $raport1->deskripsi_pengetahuan_mapel7 = $validateData['deskripsi_pengetahuan_mapel7'];
        $raport1->nilai_keterampilan_mapel7 = $validateData['nilai_keterampilan_mapel7'];
        $raport1->predikat_keterampilan_mapel7 = $validateData['predikat_keterampilan_mapel7'];
        $raport1->deskripsi_keterampilan_mapel7 = $validateData['deskripsi_keterampilan_mapel7'];
        $raport1->nama_mapel8 = $validateData['nama_mapel8'];
        $raport1->nilai_pengetahuan_mapel8 = $validateData['nilai_pengetahuan_mapel8'];
        $raport1->predikat_pengetahuan_mapel8 = $validateData['predikat_pengetahuan_mapel8'];
        $raport1->deskripsi_pengetahuan_mapel8 = $validateData['deskripsi_pengetahuan_mapel8'];
        $raport1->nilai_keterampilan_mapel8 = $validateData['nilai_keterampilan_mapel8'];
        $raport1->predikat_keterampilan_mapel8 = $validateData['predikat_keterampilan_mapel8'];
        $raport1->deskripsi_keterampilan_mapel8 = $validateData['deskripsi_keterampilan_mapel8'];
        $raport1->nama_mapel9 = $validateData['nama_mapel9'];
        $raport1->nilai_pengetahuan_mapel9 = $validateData['nilai_pengetahuan_mapel9'];
        $raport1->predikat_pengetahuan_mapel9 = $validateData['predikat_pengetahuan_mapel9'];
        $raport1->deskripsi_pengetahuan_mapel9 = $validateData['deskripsi_pengetahuan_mapel9'];
        $raport1->nilai_keterampilan_mapel9 = $validateData['nilai_keterampilan_mapel9'];
        $raport1->predikat_keterampilan_mapel9 = $validateData['predikat_keterampilan_mapel9'];
        $raport1->deskripsi_keterampilan_mapel9 = $validateData['deskripsi_keterampilan_mapel9'];
        $raport1->save();

        $validateData2 = $request->validate([
            'nama_ekstrakurikuler1' => '',
            'keterangan_nama_ekstrakurikuler1' => '',
            'nama_ekstrakurikuler2' => '',
            'keterangan_nama_ekstrakurikuler2' => '',
            'saran_saran' => '',
            'tinggi_badan_semester1' => '',
            'tinggi_badan_semester2' => '',
            'berat_badan_semester1' => '',
            'berat_badan_semester2' => '',
            'nama_aspek_fisik1' => '',
            'keterangan_aspek_fisik1' => '',
            'nama_aspek_fisik2' => '',
            'keterangan_aspek_fisik2' => '',
            'nama_aspek_fisik3' => '',
            'keterangan_aspek_fisik3' => '',
            'nama_aspek_fisik4' => '',
            'keterangan_aspek_fisik4' => '',
            'jenis_prestasi1' => '',
            'keterangan_prestasi1' => '',
            'jenis_prestasi2' => '',
            'keterangan_prestasi2' => '',
            'jumlah_sakit' => '',
            'jumlah_izin' => '',
            'jumlah_tanpa_keterangan' => '',
            'tanggal_penulisan_raport' => '',
            'nama_wali_kelas' => '',
            'nip_wali_kelas' => '',
            'keputusan_naik_kelas' => '',
        ]);

        $raport2->nama_ekstrakurikuler1 =  $validateData2['nama_ekstrakurikuler1'];
        $raport2->keterangan_nama_ekstrakurikuler1 =  $validateData2['keterangan_nama_ekstrakurikuler1'];
        $raport2->nama_ekstrakurikuler2 =  $validateData2['nama_ekstrakurikuler2'];
        $raport2->keterangan_nama_ekstrakurikuler2 =  $validateData2['keterangan_nama_ekstrakurikuler2'];
        $raport2->saran_saran =  $validateData2['saran_saran'];
        $raport2->tinggi_badan_semester1 =  $validateData2['tinggi_badan_semester1'];
        $raport2->tinggi_badan_semester2 =  $validateData2['tinggi_badan_semester2'];
        $raport2->berat_badan_semester1 =  $validateData2['berat_badan_semester1'];
        $raport2->berat_badan_semester2 =  $validateData2['berat_badan_semester2'];
        $raport2->nama_aspek_fisik1 =  $validateData2['nama_aspek_fisik1'];
        $raport2->keterangan_aspek_fisik1 =  $validateData2['keterangan_aspek_fisik1'];
        $raport2->nama_aspek_fisik2 =  $validateData2['nama_aspek_fisik2'];
        $raport2->keterangan_aspek_fisik2 =  $validateData2['keterangan_aspek_fisik2'];
        $raport2->nama_aspek_fisik3 =  $validateData2['nama_aspek_fisik3'];
        $raport2->keterangan_aspek_fisik3 =  $validateData2['keterangan_aspek_fisik3'];
        $raport2->nama_aspek_fisik4 =  $validateData2['nama_aspek_fisik4'];
        $raport2->keterangan_aspek_fisik4 =  $validateData2['keterangan_aspek_fisik4'];
        $raport2->jenis_prestasi1 =  $validateData2['jenis_prestasi1'];
        $raport2->keterangan_prestasi1 =  $validateData2['keterangan_prestasi1'];
        $raport2->jenis_prestasi2 =  $validateData2['jenis_prestasi2'];
        $raport2->keterangan_prestasi2 =  $validateData2['keterangan_prestasi2'];
        $raport2->jumlah_sakit =  $validateData2['jumlah_sakit'];
        $raport2->jumlah_izin =  $validateData2['jumlah_izin'];
        $raport2->jumlah_tanpa_keterangan =  $validateData2['jumlah_tanpa_keterangan'];
        $raport2->tanggal_penulisan_raport =  $validateData2['tanggal_penulisan_raport'];
        $raport2->nama_wali_kelas =  $validateData2['nama_wali_kelas'];
        $raport2->nip_wali_kelas =  $validateData2['nip_wali_kelas'];
        $raport2->keputusan_naik_kelas =  $validateData2['keputusan_naik_kelas'];
        $raport2->save();


        $daftar_kelas = Kelas::where('nama_kelas', $request->kelas)->get();
        // return "berhasil woiii";
        $raport = Raport1::where('kelas', $request->kelasku)->get();
        return view('admin/indexWaliKelas', [
            'kelas' => '4',
            'semester' => '4',
            'kelassemester' => '4',
            "nama" => "anselmus",
            "judul" => "user",
            'siswa' => Siswa::count(),
            'raport' => $raport,
            'raport2' => Raport2::all(),
            'mapel' => Mapel::all(),
            'daftarsiswa' => Siswa::all(),
            'kelaswali' => $request->kelasku,
            'daftar_kelas' => $daftar_kelas,
        ]);
    }
}
