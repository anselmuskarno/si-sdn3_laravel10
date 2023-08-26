<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Raport2 extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_ekstrakurikuler1',
        'keterangan_nama_ekstrakurikuler1',
        'nama_ekstrakurikuler2',
        'keterangan_nama_ekstrakurikuler2',
        'saran_saran',
        'tinggi_badan_semester1',
        'tinggi_badan_semester2',
        'berat_badan_semester1',

        'berat_badan_semester2',
        'nama_aspek_fisik1',
        'keterangan_aspek_fisik1',
        'nama_aspek_fisik2',
        'keterangan_aspek_fisik2',
        'nama_aspek_fisik3',
        'keterangan_aspek_fisik3',
        'nama_aspek_fisik4',
        'keterangan_aspek_fisik4',
        'jenis_prestasi1',

        'keterangan_prestasi1',
        'jenis_prestasi2',
        'keterangan_prestasi2',
        'jumlah_sakit',
        'jumlah_izin',
        'jumlah_tanpa_keterangan',
        'tanggal_penulisan_raport',
        'nama_wali_kelas',
        'nip_wali_kelas',
        'keputusan_naik_kelas'
    ];
}
