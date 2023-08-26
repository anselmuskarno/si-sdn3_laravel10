<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Raport1 extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_siswa',
        'nis',
        'nisn',
        'semester',
        'tahun_pelajaran',
        'kelas',
        'nama_sekolah',
        'alamat_sekolah',
        'nama_sikap1',
        'deskripsi_sikap1',

        'nama_sikap2',
        'deskripsi_sikap2',
        'nama_mapel1',
        'nilai_pengetahuan_mapel1',
        'predikat_pengetahuan_mapel1',
        'deskripsi_pengetahuan_mapel1',
        'nilai_keterampilan_mapel1',
        'predikat_keterampilan_mapel1',
        'deskripsi_keterampilan_mapel1',
        'nama_mapel2',

        'nilai_pengetahuan_mapel2',
        'predikat_pengetahuan_mapel2',
        'deskripsi_pengetahuan_mapel2',
        'nilai_keterampilan_mapel2',
        'predikat_keterampilan_mapel2',
        'deskripsi_keterampilan_mapel2',
        'nama_mapel3',
        'nilai_pengetahuan_mapel3',
        'predikat_pengetahuan_mapel3',
        'deskripsi_pengetahuan_mapel3',

        'nilai_keterampilan_mapel3',
        'predikat_keterampilan_mapel3',
        'deskripsi_keterampilan_mapel3',
        'nama_mapel4',
        'nilai_pengetahuan_mapel4',
        'predikat_pengetahuan_mapel4',
        'deskripsi_pengetahuan_mapel4',
        'nilai_keterampilan_mapel4',
        'predikat_keterampilan_mapel4',
        'deskripsi_keterampilan_mapel4',

        'nama_mapel5',
        'nilai_pengetahuan_mapel5',
        'predikat_pengetahuan_mapel5',
        'deskripsi_pengetahuan_mapel5',
        'nilai_keterampilan_mapel5',
        'predikat_keterampilan_mapel5',
        'deskripsi_keterampilan_mapel5',
        'nama_mapel6',
        'nilai_pengetahuan_mapel6',
        'predikat_pengetahuan_mapel6',

        'deskripsi_pengetahuan_mapel6',
        'nilai_keterampilan_mapel6',
        'predikat_keterampilan_mapel6',
        'deskripsi_keterampilan_mapel6',
        'nama_mapel7',
        'nilai_pengetahuan_mapel7',
        'predikat_pengetahuan_mapel7',
        'deskripsi_pengetahuan_mapel7',
        'nilai_keterampilan_mapel7',
        'predikat_keterampilan_mapel7',

        'deskripsi_keterampilan_mapel7',
        'nama_mapel8',
        'nilai_pengetahuan_mapel8',
        'predikat_pengetahuan_mapel8',
        'deskripsi_pengetahuan_mapel8',
        'nilai_keterampilan_mapel8',
        'predikat_keterampilan_mapel8',
        'deskripsi_keterampilan_mapel8',
        'nama_mapel9',
        'nilai_pengetahuan_mapel9',

        'predikat_pengetahuan_mapel9',
        'deskripsi_pengetahuan_mapel9',
        'nilai_keterampilan_mapel9',
        'predikat_keterampilan_mapel9',
        'deskripsi_keterampilan_mapel9',

    ];
}
