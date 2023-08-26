<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Guru extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_guru',
        'nip_guru',
        'tempat_lahir',
        'tanggal_lahir_guru',
        'jabatan',
        'jenis_kelamin',
        'agama',
        'nomor_hp',
        'email',
        'kelas_yang_diajar',
        'alamat',
        'foto'
    ];
}
