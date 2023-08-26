<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KelasController;
use App\Models\User;
use App\Models\Berita;
use App\Models\Agenda;
use App\Models\Kelas;
use App\Models\Guru;
use App\Models\Pengumuman;
use App\Models\Galleri;
use App\Models\Siswa;
use App\Models\Pemasukan;
use App\Models\Raport1;
use App\Models\Raport2;
use App\Models\Mapel;
use App\Models\GuruMapel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/pengumuman', function () {
    // return User::all();
    return view('pengumuman', [
        'pengumuman' => Pengumuman::All(),
        'totalPengumuman' => Pengumuman::count()
    ]);
});

Route::get('/', function () {
    // return User::all();
    return view('home');
});

Route::get('/agenda', function () {
    // return User::all();
    return view('agenda', [
        'agenda' => Agenda::All()
    ]);
});


Route::get('/catatan', function () {
    // return User::all();
    return view('catatan', [
        'catatan' => Siswa::All()
    ]);
});

Route::get('/berita', function () {
    // return User::all();
    return view('berita', [
        'berita' => Berita::All()
    ]);
});

Route::get('/guruAdmin', function () {
    // return User::all();
    return view('admin/guru', [
        'guru' => Guru::All(),
        'totalGuru' => Guru::count(),
    ]);
});

Route::get('/galleriAdmin', function () {
    // return User::all();
    return view('admin/galleri');
});

Route::get('/agendaAdmin', function () {
    // return User::all();
    return view('admin/agenda', [
        'agenda' => Agenda::All(),
        'totalAgenda' => Agenda::count(),
    ]);
});

Route::get('/kelasAdmin', function () {
    // return User::all();
    return view('admin/kelas', [
        'kelas' => Kelas::All(),
        'totalKelas' => Kelas::count(),
    ]);
});

Route::get('/beritaAdmin', function () {
    // return User::all();
    return view('admin/berita', [
        'berita' => Berita::All(),
        'totalBerita' => Berita::count()
    ]);
});

Route::get('/pengumumanAdmin', function () {
    // return User::all();
    return view('admin/pengumuman', [
        'pengumuman' => Pengumuman::All(),
        'totalPengumuman' => Pengumuman::count()
    ]);
});

Route::get('/siswa', function () {
    // return User::all();
    return view('admin/siswa', [
        'siswa' => Siswa::All(),
        'kelas' => Kelas::All(),
        'totalSiswa' => Siswa::count()
    ]);
});
Route::get('/adminWaliKelas', function () {
    $walikelas = User::where('jabatan', 'walikelas')->get();
    $totalwalikelas = User::where('jabatan', 'walikelas')->count();
    $guru = User::where('jabatan', 'guru')->get();
    $totalguru = User::where('jabatan', 'guru')->count();
    // return User::all();
    return view('admin/waliKelas', [
        'agenda' => Agenda::All(),
        'totalAgenda' => Agenda::count(),
        'walikelas' => $walikelas,
        'totalwalikelas' => $totalwalikelas,
        'guru' => $guru,
        'totalguru' => $totalguru,
        'kelas' => Kelas::All(),
    ]);
});



Route::get('/galleri', function () {
    // return User::all();
    return view('galleri');
});
Route::get('/raport', function () {
    // return User::all();
    return view('raport');
});

Route::get('/guru', function () {
    // return User::all();
    return view('guru', [
        'guru' => Guru::All(),
        'totalGuru' => Guru::count()
    ]);
});

Route::get('/dashboard', function () {
    // return User::all();
    return view('welcome', [
        "nama" => "anselmus",
        "judul" => "dashboard"
    ]);
});


Route::get('/pengeluaran', function () {
    return view('pengeluaran', [
        "nama" => "anselmus",
        "judul" => "pengeluaran"
    ]);
});

Route::resource('/tambahPemasukan', PemasukanController::class);
Route::get('/pemasukan', function () {
    return view('pemasukan', [
        "nama" => "anselmus",
        "judul" => "pemasukan",
        'pemasukan' => Pemasukan::all()
    ]);
});

Route::get('/user', function () {
    return view('user', [
        "nama" => "anselmus",
        "judul" => "user",
        'user' => User::all()
    ]);
});

Route::get('/halamanAdmin', function () {
    return view('admin/index', [
        "nama" => "anselmus",
        "judul" => "user",
        'admin' => User::count(),
        'siswa' => Siswa::count(),
        'galleri' => Galleri::count(),
        'pengumuman' => Pengumuman::count(),
        'guru' => Guru::count(),
        'berita' => Berita::count(),
        'agenda' => Agenda::count(),
    ]);
});

Route::get('/halamanGuru', function () {
    return view('admin/indexGuru', [
        "nama" => "anselmus",
        "judul" => "user",
        'admin' => User::count(),
        'siswa' => Siswa::count(),
        'galleri' => Galleri::count(),
        'pengumuman' => Pengumuman::count(),
        'guru' => Guru::count(),
        'berita' => Berita::count(),
        'agenda' => Agenda::count(),
        'agenda' => GuruMapel::All(),
        'totalAgenda' => GuruMapel::count(),
    ]);
});

Route::get('/halamanWaliKelas', function () {


    return view('admin/indexWaliKelas', [
        'kelas' => '1',
        'semester' => '1',
        'kelassemester' => '1',
        "nama" => "anselmus",
        "judul" => "user",
        'admin' => User::count(),
        'siswa' => Siswa::count(),
        'galleri' => Galleri::count(),
        'pengumuman' => Pengumuman::count(),
        'guru' => Guru::count(),
        'berita' => Berita::count(),
        'agenda' => Agenda::count(),
        'raport' => Raport1::all(),
        'raport2' => Raport2::all(),
        'mapel' => Mapel::all(),
        'daftarsiswa' => Siswa::all(),
        'kelaswali' => session('kelas')
    ]);
});

Route::get('/raportAdmin', function () {
    return view('admin/raport', [
        'kelas' => '1',
        'semester' => '1',
        'kelassemester' => '1',
        "nama" => "anselmus",
        "judul" => "user",
        'admin' => User::count(),
        'siswa' => Siswa::count(),
        'galleri' => Galleri::count(),
        'pengumuman' => Pengumuman::count(),
        'guru' => Guru::count(),
        'berita' => Berita::count(),
        'agenda' => Agenda::count(),
        'raport' => Raport1::all(),
        'raport2' => Raport2::all(),
        'mapel' => Mapel::all(),
        'daftarsiswa' => Siswa::all(),
    ]);
});

//gagal
Route::get('/raportAdmin2', function () {

    return view('admin/indexWaliKelas', [
        'kelas' => '2',
        'semester' => '2',
        'kelassemester' => '2',
        "nama" => "anselmus",
        "judul" => "user",
        'admin' => User::count(),
        'siswa' => Siswa::count(),
        'galleri' => Galleri::count(),
        'pengumuman' => Pengumuman::count(),
        'guru' => Guru::count(),
        'berita' => Berita::count(),
        'agenda' => Agenda::count(),
        'raport' => Raport1::all(),
        'raport2' => Raport2::all(),
        'mapel' => Mapel::all(),
        'daftarsiswa' => Siswa::all(),
    ]);
});

//berhasil
Route::get('/raportAdmin3', function () {

    return view('admin/indexWaliKelas', [
        'kelas' => '3',
        'semester' => '3',
        'kelassemester' => '3',
        "nama" => "anselmus",
        "judul" => "user",
        'admin' => User::count(),
        'siswa' => Siswa::count(),
        'galleri' => Galleri::count(),
        'pengumuman' => Pengumuman::count(),
        'guru' => Guru::count(),
        'berita' => Berita::count(),
        'agenda' => Agenda::count(),
        'raport' => Raport1::all(),
        'raport2' => Raport2::all(),
        'mapel' => Mapel::all(),
        'daftarsiswa' => Siswa::all(),
    ]);
});

//berhasilUpdate
Route::get('/raportAdmin4', function () {

    return view('admin/indexWaliKelas', [
        'kelas' => '4',
        'semester' => '4',
        'kelassemester' => '4',
        "nama" => "anselmus",
        "judul" => "user",
        'admin' => User::count(),
        'siswa' => Siswa::count(),
        'galleri' => Galleri::count(),
        'pengumuman' => Pengumuman::count(),
        'guru' => Guru::count(),
        'berita' => Berita::count(),
        'agenda' => Agenda::count(),
        'raport' => Raport1::all(),
        'raport2' => Raport2::all(),
        'mapel' => Mapel::all(),
        'daftarsiswa' => Siswa::all(),
    ]);
});

//Method get dan mengarah pada /login maka arahkan ke controller Login dengan memanggil class index
// Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/hapusPemasukan/{id}', [PemasukanController::class, 'destroy']);
Route::post('/editPemasukan/{id}', [PemasukanController::class, 'update']);
Route::get('/cobaku/{id}', [SiswaController::class, 'raportsemester']);
Route::get('/cobaku/{id}/{id2}/{id3}', [SiswaController::class, 'raportsemester']);
Route::post('/loginAdmin', [LoginController::class, 'authenticate']);
Route::post('/loginSiswa', [LoginController::class, 'loginSiswa']);
Route::post('/editGuru/{id}', [GuruController::class, 'updateGuru']);
Route::post('/tambahGuru', [GuruController::class, 'tambahGuru']);
Route::get('/hapusGuru/{id}', [GuruController::class, 'hapusGuru']);
Route::post('/tambahRaport', [SiswaController::class, 'tambahRaportSiswa']);
Route::post('/editRaport', [SiswaController::class, 'EditRaportSiswa']);
Route::post('/ubahSemester', [SiswaController::class, 'ubahSemester']);
Route::post('/tambahWaliKelas', [DaftarController::class, 'store']);
// Route::post('/loginAdmi', [LoginController::class, 'authenticate']);

//Method post dan mengarah pada /daftar maka arahkan ke controller daftar dengan memanggil class store
Route::post('/daftarAdmin', [DaftarController::class, 'store']);
Route::post('/tambahSiswa', [SiswaController::class, 'tambahSiswa']);
Route::post('/editSiswa/{id}', [SiswaController::class, 'updateSiswa']);
Route::get('/hapusSiswa/{id}', [SiswaController::class, 'hapusSiswa']);
Route::post('/hapusRaport', [SiswaController::class, 'hapusRaport']);

Route::post('/tambahPengumuman', [PengumumanController::class, 'tambahPengumuman']);
Route::post('/editPengumuman/{id}', [PengumumanController::class, 'updatePengumuman']);
Route::get('/hapusPengumuman/{id}', [PengumumanController::class, 'hapusPengumuman']);

Route::post('/tambahKelas', [KelasController::class, 'tambahKelas']);
Route::post('/editKelas/{id}', [KelasController::class, 'updateKelas']);
Route::get('/hapusKelas/{id}', [KelasController::class, 'hapusKelas']);

Route::post('/tambahBerita', [BeritaController::class, 'tambahBerita']);
Route::post('/editBerita/{id}', [BeritaController::class, 'updateBerita']);
Route::get('/hapusBerita/{id}', [BeritaController::class, 'hapusBerita']);

Route::post('/tambahAgenda', [AgendaController::class, 'tambahAgenda']);
Route::post('/editAgenda/{id}', [AgendaController::class, 'updateAgenda']);
Route::get('/hapusAgenda/{id}', [AgendaController::class, 'hapusAgenda']);
Route::post('/editWaliKelas/{id}', [DaftarController::class, 'updateWaliKelas']);
Route::get('/hapusWaliKelas/{id}', [DaftarController::class, 'hapusWaliKelas']);

//Method get dan mengarah pada /daftar maka arahkan ke view daftar
Route::get('/daftar', function () {
    return view('daftar', [
        'judul' => 'Registrasi'
    ]);
})->middleware('guest');

Route::get('/raportku', function () {
    return 'ok';

    return view('admin/raportku', [
        'judul' => 'Registrasi',
        'kelas' => Kelas::All()
    ]);
});

Route::get('/cetakGuru', function () {
    return view('cetakGuru', [
        'guru' => User::All()
    ]);
});
Route::get('/cetakSiswa', function () {
    return view('cetakSiswa', [
        'siswa' => User::All()
    ]);
});

Route::get('/cetakExcel', function () {
    return view('exportExcelGuru', [
        'siswa' => User::All()
    ]);
});
