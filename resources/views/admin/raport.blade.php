<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> ADMIN - SDN 3 Toraja Utara </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/handayani.png">

  <link href="admin/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

  <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/fontawesome.min.css">

  <link rel="stylesheet" href="admin/assets/css/fullcalendar.min.css">

  <link rel="stylesheet" href="admin/assets/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="admin/assets/plugins/morris/morris.css">

  <link rel="stylesheet" href="admin/assets/css/style.css">
  <!--[if lt IE 9]>
		<script src="admin/assets/js/html5shiv.min.js"></script>
		<script src="admin/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

  <div class="main-wrapper">

    <div class="header-outer">
      <div class="header">
        <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars" aria-hidden="true"></i></a>
        <a id="toggle_btn" class="float-left" href="javascript:void(0);">
          <img src="admin/assets/img/sidebar/icon-21.png" alt="">
        </a>

        <ul class="nav user-menu float-right">


          <li class="nav-item dropdown has-arrow">
            <a href="#" class=" nav-link user-link" data-toggle="dropdown">
              <span class="user-img"><img class="rounded-circle" src="admin/assets/img/user-06.jpg" width="30" alt="Admin">
                <span class="status online"></span></span>
              <span>Admin</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </li>
        </ul>
        <div class="dropdown mobile-user-menu float-right">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>


    <div class="sidebar" id="sidebar">
      <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
          <div class="header-left">
            <a href="/halamanAdmin" class="logo">
              <img src="smartedu-master\images\lainnya\handayani.png" width="40" height="40" alt="">
              <span class="text-uppercase">SDN 3 TORUT</span>
            </a>
          </div>
          <ul class="sidebar-ul">
            <li class="menu-title">Menu</li>
            <li class="">
              <a href="/halamanAdmin"><img src="admin/assets/img/sidebar/icon-1.png" alt="icon"><span>Dashboard</span></a>
            </li>
            <li class="">
              <a href="/guruAdmin"><img src="admin/assets/img/sidebar/icon-2.png" alt="icon"> <span> Guru</span>
              </a>
            </li>
            <li class="">
              <a href="/siswa"><img src="admin/assets/img/sidebar/icon-3.png" alt="icon"> <span> Siswa</span>
              </a>
            </li>
            <li>
              <a href="/beritaAdmin"><img src="admin/assets/img/sidebar/icon-6.png" alt="icon">
                <span>Berita/Blog</span></a>
            </li>
            <li>
              <a href="/pengumumanAdmin"><img src="admin/assets/img/sidebar/icon-9.png" alt="icon"><span>
                  Pengumuman</span></a>
            </li>
            <li>
              <a href="/agendaAdmin"><img src="admin/assets/img/sidebar/icon-9.png" alt="icon"><span>
                  Agenda</span></a>
            </li>
            <li class="active">
              <a href="/agendaAdmin"><img src="admin/assets/img/sidebar/icon-9.png" alt="icon"><span>
                  Raport</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>


    <div class="page-wrapper">
      <div class="content container-fluid">

        <div class="page-header">
          <div class="row">
            <div class="col-md-6">
              <h3 class="page-title mb-0">Manajemen Raport Siswa</h3>
              @if (session()->has('kelas'))
              <div class="alert alert-success" role="alert">
                {{ session('kelas') }}
              </div>
              @endif
            </div>
            <div class="col-md-6">
              <ul class="breadcrumb mb-0 p-0 float-right">
                <button style="background-color: blue; color:white" data-bs-toggle="modal" data-bs-target="#tambahModal" class="btn mr-2"><i class="fe fe-file-plus"></i><span class="ml-2">Tambah Data</span></button>
              </ul>
            </div>
          </div>
        </div>
        <?php if ($kelas == "2") { ?>
          <div class="alert alert-danger">Penambahan Data Raport Gagal! Silahkan masukkan ulang isian raport dengan memperhatikan inputan kelas dan raport </div>
        <?php } else if ($kelas == "3") { ?>
          <div class="alert alert-success">Penambahan Data Raport Berhasil! </div>
        <?php } else if ($kelas == "4") { ?>
          <div class="alert alert-success"> Data Raport Berhasil Diubah! </div>
        <?php } ?>
        <!-- Modal Tambah -->
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Raport Siswa</h5>
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
              </div>
              <div class="modal-body bg-light">
                <form action="/tambahRaport" method="post">
                  @csrf
                  <div class="text-center" style="margin-bottom: 30px;">
                    <h4>Data Pribadi</h4>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Siswa</label>
                        <div class="col-md-9">
                          <select required class="form-control" name="nama_siswa">
                            @foreach ($daftarsiswa as $d)
                            <option value="{{ $d->nama_siswa }}">{{ $d->nama_siswa }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">NIS</label>
                        <div class="col-md-9">
                          <input required type="text" class="form-control" name="nis">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">NISN</label>
                        <div class="col-md-9">
                          <input required type="text" class="form-control" name="nisn">
                        </div>
                      </div>
                      <input type="hidden" name="nama_sekolah" value="SDN 3 Rantepao">
                      <input type="hidden" name="alamat_sekolah" value="jln.123">
                    </div>

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Kelas</label>
                        <div class="col-md-9">
                          <select required class="form-control" name="kelas">
                            <option value="0">Pilih Kelas</option>
                            <option value="1">I (satu)</option>
                            <option value="2">II (dua)</option>
                            <option value="3">III (tiga)</option>
                            <option value="4">IV (empat)</option>
                            <option value="5">V (lima)</option>
                            <option value="6">VI (enam)</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Semester</label>
                        <div class="col-md-9">
                          <select required class="form-control" name="semester">
                            <option value="0">Pilih Semester</option>
                            <option value="ganjil">ganjil</option>
                            <option value="genap">genap</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Tahun Pelajaran</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="tahun_pelajaran" required>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- DATA NILAI SEMESTER (SIKAP) -->
              <div class="modal-body">
                <div class="text-center" style="margin-bottom: 15px;">
                  <h4>Data Nilai Semester</h4>
                </div>
                <h5 class="bg-secondary text-center text-white py-1">Sikap</h5>
                <div style="margin-bottom: 25px;"></div>
                <div class="row">
                  <div class="col-md-6">
                    <input type="hidden" name="nama_sekolah" value="SDN 3 Rantepao">
                    <input type="hidden" name="alamat_sekolah" value="jln.123">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Sikap1</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nama_sikap1" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Sikap 1</label>
                      <div class="col-md-9">
                        <textarea required class="form-control" name="deskripsi_sikap1" id="" cols="30" rows="3"></textarea>
                      </div>
                    </div>

                  </div>

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Sikap2</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="nama_sikap2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Sikap 2</label>
                      <div class="col-md-9">
                        <textarea required class="form-control" name="deskripsi_sikap2" id="" cols="30" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- DATA NILAI SEMESTER (MAPEL) -->
              <div class="modal-body">
                <h5 class="bg-secondary text-center text-white py-1">Mata Pelajaran</h5>
                <div style="margin-bottom: 25px;"></div>
                <div class="row">
                  @foreach ($mapel as $m)
                  <div class="col-12 bg-light" style="margin-bottom: 15px;"><b> {{ $loop->iteration }}. {{ $m->nama_mapel }} </b></div>

                  <input type="hidden" name="nama_mapel{{ $loop->iteration }}" value="{{ $m->nama_mapel }}">
                  <div class="col-md-6">
                    <input type="hidden" name="nama_sekolah" value="SDN 3 Rantepao">
                    <input type="hidden" name="alamat_sekolah" value="jln.123">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nilai Pengetahuan</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="nilai_pengetahuan_mapel{{ $loop->iteration }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Predikat Pengetahuan</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="predikat_pengetahuan_mapel{{ $loop->iteration }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Pengetahuan</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="deskripsi_pengetahuan_mapel{{ $loop->iteration }}">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nilai Keterampilan</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="nilai_keterampilan_mapel{{ $loop->iteration }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Predikat Keterampilan</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="predikat_keterampilan_mapel{{ $loop->iteration }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Keterampilan</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="deskripsi_keterampilan_mapel{{ $loop->iteration }}">
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <!-- DATA NILAI SEMESTER (LAINNYA) -->
              <div class="modal-body">
                <h5 class="bg-secondary text-center text-white py-1">Lainnya</h5>
                <div style="margin-bottom: 25px;"></div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Ekstrakurikuler 1</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="nama_ekstrakurikuler1">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Keterangan Ekstrakurikuler 1</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="keterangan_nama_ekstrakurikuler1">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Saran-saran</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="saran_saran">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Tinggi Badan Semester 1 (cm)</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="tinggi_badan_semester1">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Tinggi Badan Semester 2 (cm)</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="tinggi_badan_semester2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Aspek Fisik 1</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="nama_aspek_fisik1">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Keterangan Aspek Fisik 1</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="keterangan_aspek_fisik1">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Aspek Fisik 2</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="nama_aspek_fisik2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Keterangan Aspek Fisik 2</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="keterangan_aspek_fisik2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Jenis Prestasi 1</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="jenis_prestasi1">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Keterangan Prestasi 1</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="keterangan_prestasi1">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Jumlah Sakit</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="jumlah_sakit">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Jumlah Izin</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="jumlah_izin">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Jumlah Tanpa Keterangan</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="jumlah_tanpa_keterangan">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Ekstrakurikuler 2</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="nama_ekstrakurikuler2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Ekstrakurikuler 2</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="keterangan_nama_ekstrakurikuler2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Berat Badan Semester 1 (kg)</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="berat_badan_semester1">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Berat Badan Semester 2 (kg)</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="berat_badan_semester2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Aspek Fisik 3</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="nama_aspek_fisik3">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Keterangan Aspek Fisik 3</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="keterangan_aspek_fisik3">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Aspek Fisik 4</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="nama_aspek_fisik4">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Keterangan Aspek Fisik 4</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="keterangan_aspek_fisik4">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Jenis Prestasi 2</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="jenis_prestasi2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Keterangan Prestasi 2</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="keterangan_prestasi2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Tanggal Penulisan Raport</label>
                      <div class="col-md-9">
                        <input required type="date" class="form-control" name="tanggal_penulisan_raport">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Wali Kelas</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="nama_wali_kelas">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">NIP Wali Kelas</label>
                      <div class="col-md-9">
                        <input required type="text" class="form-control" name="nip_wali_kelas">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Keputusan Naik Kelas</label>
                      <div class="col-md-9">
                        <input required type="test" class="form-control" name="keputusan_naik_kelas">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Modal Detail -->
        @foreach ($raport as $r)
        <?php $idRaport2 =  $r->id - 5 ?>
        <div class="modal fade" id="detailModal{{ $r->id }}{{ $idRaport2 }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Raport {{ $r->nama_siswa }} Kelas {{ $r->kelas }} Semester {{ $r->semester }}</h5>
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
              </div>
              <div class="modal-body bg-light">
                <form action="/tambahRaport" method="post">
                  @csrf
                  <div class="text-center" style="margin-bottom: 30px;">
                    <h4>Data Pribadi</h4>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Siswa</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r->nama_siswa }}" autofocus>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">NIS</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r->nis }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">NISN</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r->nisn }}">
                        </div>
                      </div>
                      <input type="hidden" value="{{ $r->nama_sekolah }}" value="SDN 3 Rantepao">
                      <input type="hidden" value="{{ $r->alamat_sekolah }}" value="jln.123">
                    </div>

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Kelas</label>
                        <div class="col-md-9">
                          <select disabled class="form-control">
                            <option value="{{ $r->kelas }}">{{ $r->kelas }}</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Semester</label>
                        <div class="col-md-9">
                          <select disabled class="form-control">
                            <option value="{{ $r->semester }}">{{ $r->semester }}</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Tahun Pelajaran</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r->tahun_pelajaran }}">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- DATA NILAI SEMESTER (SIKAP) -->
              <div class="modal-body">
                <div class="text-center" style="margin-bottom: 15px;">
                  <h4>Data Nilai Semester</h4>
                </div>
                <h5 class="bg-secondary text-center text-white py-1">Sikap</h5>
                <div style="margin-bottom: 25px;"></div>
                <div class="row">
                  <div class="col-md-6">
                    <input type="hidden" value="{{ $r->nama_sekolah }}" value="SDN 3 Rantepao">
                    <input type="hidden" value="{{ $r->alamat_sekolah }}" value="jln.123">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Sikap1</label>
                      <div class="col-md-9">
                        <input disabled type="text" class="form-control" value="{{ $r->nama_sikap1 }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Sikap 1</label>
                      <div class="col-md-9">
                        <textarea disabled class="form-control" value="" id="" cols="30" rows="3">{{ $r->deskripsi_sikap1 }}</textarea>
                      </div>
                    </div>

                  </div>

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Sikap2</label>
                      <div class="col-md-9">
                        <input disabled type="text" class="form-control" value="{{ $r->nama_sikap2 }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Sikap 2</label>
                      <div class="col-md-9">
                        <textarea disabled class="form-control" value="{{ $r->deskripsi_sikap2 }}" id="" cols="30" rows="3">{{ $r->deskripsi_sikap2 }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- DATA NILAI SEMESTER (MAPEL) -->
              <div class="modal-body">
                <h5 class="bg-secondary text-center text-white py-1">Mata Pelajaran</h5>
                <div style="margin-bottom: 25px;"></div>
                <div class="row">
                  @foreach ($mapel as $m)
                  <div class="col-12 bg-light" style="margin-bottom: 15px;"><b> {{ $loop->iteration }}. {{ $m->nama_mapel }} </b></div>
                  <div class="col-md-6">
                    <input type="hidden" value="{{ $r->nama_sekolah }}">
                    <input type="hidden" value="{{ $r->alamat_sekolah }}">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nilai Pengetahuan </label>
                      <div class="col-md-9">
                        <?php if ($loop->iteration == 1) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_pengetahuan_mapel1  ?>">
                        <?php } else if ($loop->iteration == 2) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_pengetahuan_mapel2  ?>">
                        <?php } else if ($loop->iteration == 3) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_pengetahuan_mapel3  ?>">
                        <?php } else if ($loop->iteration == 4) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_pengetahuan_mapel4  ?>">
                        <?php } else if ($loop->iteration == 5) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_pengetahuan_mapel5  ?>">
                        <?php } else if ($loop->iteration == 6) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_pengetahuan_mapel6  ?>">
                        <?php } else if ($loop->iteration == 7) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_pengetahuan_mapel7  ?>">
                        <?php } else if ($loop->iteration == 8) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_pengetahuan_mapel8  ?>">
                        <?php } else if ($loop->iteration == 9) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_pengetahuan_mapel9  ?>">
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Predikat Pengetahuan</label>
                      <div class="col-md-9">
                        <?php if ($loop->iteration == 1) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_pengetahuan_mapel1  ?>">
                        <?php } else if ($loop->iteration == 2) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_pengetahuan_mapel2  ?>">
                        <?php } else if ($loop->iteration == 3) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_pengetahuan_mapel3  ?>">
                        <?php } else if ($loop->iteration == 4) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_pengetahuan_mapel4  ?>">
                        <?php } else if ($loop->iteration == 5) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_pengetahuan_mapel5  ?>">
                        <?php } else if ($loop->iteration == 6) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_pengetahuan_mapel6  ?>">
                        <?php } else if ($loop->iteration == 7) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_pengetahuan_mapel7  ?>">
                        <?php } else if ($loop->iteration == 8) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_pengetahuan_mapel8  ?>">
                        <?php } else if ($loop->iteration == 9) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_pengetahuan_mapel9  ?>">
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Pengetahuan</label>
                      <div class="col-md-9">
                        <?php if ($loop->iteration == 1) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_pengetahuan_mapel1  ?>">
                        <?php } else if ($loop->iteration == 2) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_pengetahuan_mapel2  ?>">
                        <?php } else if ($loop->iteration == 3) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_pengetahuan_mapel3  ?>">
                        <?php } else if ($loop->iteration == 4) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_pengetahuan_mapel4  ?>">
                        <?php } else if ($loop->iteration == 5) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_pengetahuan_mapel5  ?>">
                        <?php } else if ($loop->iteration == 6) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_pengetahuan_mapel6  ?>">
                        <?php } else if ($loop->iteration == 7) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_pengetahuan_mapel7  ?>">
                        <?php } else if ($loop->iteration == 8) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_pengetahuan_mapel8  ?>">
                        <?php } else if ($loop->iteration == 9) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_pengetahuan_mapel9  ?>">
                        <?php } ?>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nilai Keterampilan</label>
                      <div class="col-md-9">
                        <?php if ($loop->iteration == 1) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_keterampilan_mapel1  ?>">
                        <?php } else if ($loop->iteration == 2) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_keterampilan_mapel2  ?>">
                        <?php } else if ($loop->iteration == 3) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_keterampilan_mapel3  ?>">
                        <?php } else if ($loop->iteration == 4) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_keterampilan_mapel4  ?>">
                        <?php } else if ($loop->iteration == 5) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_keterampilan_mapel5  ?>">
                        <?php } else if ($loop->iteration == 6) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_keterampilan_mapel6  ?>">
                        <?php } else if ($loop->iteration == 7) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_keterampilan_mapel7  ?>">
                        <?php } else if ($loop->iteration == 8) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_keterampilan_mapel8  ?>">
                        <?php } else if ($loop->iteration == 9) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->nilai_keterampilan_mapel9  ?>">
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Predikat Keterampilan</label>
                      <div class="col-md-9">
                        <?php if ($loop->iteration == 1) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_keterampilan_mapel1  ?>">
                        <?php } else if ($loop->iteration == 2) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_keterampilan_mapel2  ?>">
                        <?php } else if ($loop->iteration == 3) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_keterampilan_mapel3  ?>">
                        <?php } else if ($loop->iteration == 4) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_keterampilan_mapel4  ?>">
                        <?php } else if ($loop->iteration == 5) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_keterampilan_mapel5  ?>">
                        <?php } else if ($loop->iteration == 6) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_keterampilan_mapel6  ?>">
                        <?php } else if ($loop->iteration == 7) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_keterampilan_mapel7  ?>">
                        <?php } else if ($loop->iteration == 8) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_keterampilan_mapel8  ?>">
                        <?php } else if ($loop->iteration == 9) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->predikat_keterampilan_mapel9  ?>">
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Keterampilan</label>
                      <div class="col-md-9">
                        <?php if ($loop->iteration == 1) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_keterampilan_mapel1  ?>">
                        <?php } else if ($loop->iteration == 2) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_keterampilan_mapel2  ?>">
                        <?php } else if ($loop->iteration == 3) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_keterampilan_mapel3  ?>">
                        <?php } else if ($loop->iteration == 4) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_keterampilan_mapel4  ?>">
                        <?php } else if ($loop->iteration == 5) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_keterampilan_mapel5  ?>">
                        <?php } else if ($loop->iteration == 6) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_keterampilan_mapel6  ?>">
                        <?php } else if ($loop->iteration == 7) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_keterampilan_mapel7  ?>">
                        <?php } else if ($loop->iteration == 8) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_keterampilan_mapel8  ?>">
                        <?php } else if ($loop->iteration == 9) { ?>
                          <input disabled type="text" class="form-control" value="<?= $r->deskripsi_keterampilan_mapel9  ?>">
                        <?php } ?>
                      </div>
                    </div>
                  </div>

                  @endforeach
                </div>
              </div>
              <!-- DATA NILAI SEMESTER (LAINNYA) -->
              @foreach ($raport2 as $r2)
              <?php if ($r2->id != $idRaport2) { ?>
              <?php  } else { ?>
                <div class="modal-body">
                  <h5 class="bg-secondary text-center text-white py-1">Lainnya</h5>
                  <div style="margin-bottom: 25px;"></div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Ekstrakurikuler 1</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->nama_ekstrakurikuler1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Ekstrakurikuler 1</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->keterangan_nama_ekstrakurikuler1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Saran-saran</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->saran_saran }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Tinggi Badan Semester 1 (cm)</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->tinggi_badan_semester1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Tinggi Badan Semester 2 (cm)</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->tinggi_badan_semester2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Aspek Fisik 1</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->nama_aspek_fisik1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Aspek Fisik 1</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->keterangan_aspek_fisik1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Aspek Fisik 2</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->nama_aspek_fisik2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Aspek Fisik 2</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->keterangan_aspek_fisik2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jenis Prestasi 1</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->jenis_prestasi1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Prestasi 1</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->keterangan_prestasi1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jumlah Sakit</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->jumlah_sakit }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jumlah Izin</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->jumlah_izin }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jumlah Tanpa Keterangan</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->jumlah_tanpa_keterangan }}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Ekstrakurikuler 2</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->nama_ekstrakurikuler2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Deskripsi Ekstrakurikuler 2</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->keterangan_nama_ekstrakurikuler2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Berat Badan Semester 1 (kg)</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->berat_badan_semester1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Berat Badan Semester 2 (kg)</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->berat_badan_semester2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Aspek Fisik 3</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->nama_aspek_fisik3 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Aspek Fisik 3</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->keterangan_aspek_fisik3 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Aspek Fisik 4</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->nama_aspek_fisik4 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Aspek Fisik 4</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->keterangan_aspek_fisik4 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jenis Prestasi 2</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->jenis_prestasi2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Prestasi 2</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->keterangan_prestasi2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Tanggal Penulisan Raport</label>
                        <div class="col-md-9">
                          <input disabled type="date" class="form-control" value="{{ $r2->tanggal_penulisan_raport }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Wali Kelas</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->nama_wali_kelas }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">NIP Wali Kelas</label>
                        <div class="col-md-9">
                          <input disabled type="text" class="form-control" value="{{ $r2->nip_wali_kelas }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keputusan Naik Kelas</label>
                        <div class="col-md-9">
                          <input disabled type="test" class="form-control" value="{{ $r2->keputusan_naik_kelas }}">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
              @endforeach
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        @endforeach

        <!-- Modal Edit -->
        @foreach ($raport as $r)
        <?php $idRaport2 =  $r->id - 5 ?>
        <div class="modal fade" id="editModal{{ $r->id }}{{ $idRaport2 }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Raport {{ $r->nama_siswa }} Kelas {{ $r->kelas }} Semester {{ $r->semester }}</h5>
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
              </div>
              <div class="modal-body bg-light">
                <form action="/editRaport" method="post">
                  @csrf
                  <input type="hidden" name="idraport1" value="{{ $r->id }}">
                  <input type="hidden" name="idraport2" value="{{ $idRaport2 }}">
                  <div class="text-center" style="margin-bottom: 30px;">
                    <h4>Data Pribadi</h4>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Siswa</label>
                        <div class="col-md-9">
                          <select required class="form-control" name="nama_siswa">
                            <option value="{{ $r->nama_siswa }}"> {{ $r->nama_siswa }}</option>
                            @foreach ($daftarsiswa as $d)
                            <option value="{{ $d->nama_siswa }}">{{ $d->nama_siswa }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">NIS</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" value="{{ $r->nis }}" name="nis">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">NISN</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" value="{{ $r->nisn }}" name="nisn">
                        </div>
                      </div>
                      <input type="hidden" name="nama_sekolah" value="SDN 3 Rantepao">
                      <input type="hidden" name="alamat_sekolah" value="jln.123">
                    </div>

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Kelas</label>
                        <div class="col-md-9">
                          <select class="form-control" name="kelas">
                            <option value="{{ $r->kelas }}">{{ $r->kelas }}</option>
                            <option value="1">I (satu)</option>
                            <option value="2">II (dua)</option>
                            <option value="3">III (tiga)</option>
                            <option value="4">IV (empat)</option>
                            <option value="5">V (lima)</option>
                            <option value="6">VI (enam)</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Semester</label>
                        <div class="col-md-9">
                          <select class="form-control" name="semester">
                            <option value="{{ $r->semester }}">{{ $r->semester }}</option>
                            <option value="ganjil">ganjil</option>
                            <option value="genap">genap</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Tahun Pelajaran</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" value="{{ $r->tahun_pelajaran }}" name="tahun_pelajaran">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- DATA NILAI SEMESTER (SIKAP) -->
              <div class="modal-body">
                <div class="text-center" style="margin-bottom: 15px;">
                  <h4>Data Nilai Semester</h4>
                </div>
                <h5 class="bg-secondary text-center text-white py-1">Sikap</h5>
                <div style="margin-bottom: 25px;"></div>
                <div class="row">
                  <div class="col-md-6">
                    <input type="hidden" name="nama_sekolah" value="SDN 3 Rantepao">
                    <input type="hidden" name="alamat_sekolah" value="jln.123">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Sikap1</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nama_sikap1" value="{{ $r->nama_sikap1 }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Sikap 1</label>
                      <div class="col-md-9">
                        <textarea class="form-control" name="deskripsi_sikap1" value="" id="" cols="30" rows="3">{{ $r->deskripsi_sikap1 }}</textarea>
                      </div>
                    </div>

                  </div>

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama Sikap2</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nama_sikap2" value="{{ $r->nama_sikap2 }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Sikap 2</label>
                      <div class="col-md-9">
                        <textarea class="form-control" value="" id="" cols="30" name="deskripsi_sikap2" rows="3">{{ $r->deskripsi_sikap2 }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- DATA NILAI SEMESTER (MAPEL) -->
              <div class="modal-body">
                <h5 class="bg-secondary text-center text-white py-1">Mata Pelajaran</h5>
                <div style="margin-bottom: 25px;"></div>
                <div class="row">
                  @foreach ($mapel as $m)
                  <div class="col-12 bg-light" style="margin-bottom: 15px;"><b> {{ $loop->iteration }}. {{ $m->nama_mapel }} </b></div>
                  <div class="col-md-6">
                    <input type="hidden" value="{{ $r->nama_sekolah }}">
                    <input type="hidden" value="{{ $r->alamat_sekolah }}">

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nilai Pengetahuan </label>
                      <div class="col-md-9">
                        <?php if ($loop->iteration == 1) { ?>
                          <input type="hidden" name="nama_mapel1" value="{{ $m->nama_mapel }}">
                          <input type="text" class="form-control" name="nilai_pengetahuan_mapel1" value="<?= $r->nilai_pengetahuan_mapel1  ?>">
                        <?php } else if ($loop->iteration == 2) { ?>
                          <input type="hidden" name="nama_mapel2" value="{{ $m->nama_mapel }}">
                          <input type="text" class="form-control" name="nilai_pengetahuan_mapel2" value="<?= $r->nilai_pengetahuan_mapel2  ?>">
                        <?php } else if ($loop->iteration == 3) { ?>
                          <input type="hidden" name="nama_mapel3" value="{{ $m->nama_mapel }}">
                          <input type="text" class="form-control" name="nilai_pengetahuan_mapel3" value="<?= $r->nilai_pengetahuan_mapel3  ?>">
                        <?php } else if ($loop->iteration == 4) { ?>
                          <input type="hidden" name="nama_mapel4" value="{{ $m->nama_mapel }}">
                          <input type="text" class="form-control" name="nilai_pengetahuan_mapel4" value="<?= $r->nilai_pengetahuan_mapel4  ?>">
                        <?php } else if ($loop->iteration == 5) { ?>
                          <input type="hidden" name="nama_mapel5" value="{{ $m->nama_mapel }}">
                          <input type="text" class="form-control" name="nilai_pengetahuan_mapel5" value="<?= $r->nilai_pengetahuan_mapel5  ?>">
                        <?php } else if ($loop->iteration == 6) { ?>
                          <input type="hidden" name="nama_mapel6" value="{{ $m->nama_mapel }}">
                          <input type="text" class="form-control" name="nilai_pengetahuan_mapel6" value="<?= $r->nilai_pengetahuan_mapel6  ?>">
                        <?php } else if ($loop->iteration == 7) { ?>
                          <input type="hidden" name="nama_mapel7" value="{{ $m->nama_mapel }}">
                          <input type="text" class="form-control" name="nilai_pengetahuan_mapel7" value="<?= $r->nilai_pengetahuan_mapel7  ?>">
                        <?php } else if ($loop->iteration == 8) { ?>
                          <input type="hidden" name="nama_mapel8" value="{{ $m->nama_mapel }}">
                          <input type="text" class="form-control" name="nilai_pengetahuan_mapel8" value="<?= $r->nilai_pengetahuan_mapel8  ?>">
                        <?php } else if ($loop->iteration == 9) { ?>
                          <input type="hidden" name="nama_mapel9" value="{{ $m->nama_mapel }}">
                          <input type="text" class="form-control" name="nilai_pengetahuan_mapel9" value="<?= $r->nilai_pengetahuan_mapel9  ?>">
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Predikat Pengetahuan</label>
                      <div class="col-md-9">
                        <?php if ($loop->iteration == 1) { ?>
                          <input type="text" class="form-control" name="predikat_pengetahuan_mapel1" value="<?= $r->predikat_pengetahuan_mapel1  ?>">
                        <?php } else if ($loop->iteration == 2) { ?>
                          <input type="text" class="form-control" name="predikat_pengetahuan_mapel2" value="<?= $r->predikat_pengetahuan_mapel2  ?>">
                        <?php } else if ($loop->iteration == 3) { ?>
                          <input type="text" class="form-control" name="predikat_pengetahuan_mapel3" value="<?= $r->predikat_pengetahuan_mapel3  ?>">
                        <?php } else if ($loop->iteration == 4) { ?>
                          <input type="text" class="form-control" name="predikat_pengetahuan_mapel4" value="<?= $r->predikat_pengetahuan_mapel4  ?>">
                        <?php } else if ($loop->iteration == 5) { ?>
                          <input type="text" class="form-control" name="predikat_pengetahuan_mapel5" value="<?= $r->predikat_pengetahuan_mapel5  ?>">
                        <?php } else if ($loop->iteration == 6) { ?>
                          <input type="text" class="form-control" name="predikat_pengetahuan_mapel6" value="<?= $r->predikat_pengetahuan_mapel6  ?>">
                        <?php } else if ($loop->iteration == 7) { ?>
                          <input type="text" class="form-control" name="predikat_pengetahuan_mapel7" value="<?= $r->predikat_pengetahuan_mapel7  ?>">
                        <?php } else if ($loop->iteration == 8) { ?>
                          <input type="text" class="form-control" name="predikat_pengetahuan_mapel8" value=" <?= $r->predikat_pengetahuan_mapel8  ?>">
                        <?php } else if ($loop->iteration == 9) { ?>
                          <input type="text" class="form-control" name="predikat_pengetahuan_mapel9" value="<?= $r->predikat_pengetahuan_mapel9  ?>">
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Pengetahuan</label>
                      <div class="col-md-9">
                        <?php if ($loop->iteration == 1) { ?>
                          <input type="text" class="form-control" name="deskripsi_pengetahuan_mapel1" value="<?= $r->deskripsi_pengetahuan_mapel1  ?>">
                        <?php } else if ($loop->iteration == 2) { ?>
                          <input type="text" class="form-control" name="deskripsi_pengetahuan_mapel2" value="<?= $r->deskripsi_pengetahuan_mapel2  ?>">
                        <?php } else if ($loop->iteration == 3) { ?>
                          <input type="text" class="form-control" name="deskripsi_pengetahuan_mapel3" value="<?= $r->deskripsi_pengetahuan_mapel3  ?>">
                        <?php } else if ($loop->iteration == 4) { ?>
                          <input type="text" class="form-control" name="deskripsi_pengetahuan_mapel4" value="<?= $r->deskripsi_pengetahuan_mapel4  ?>">
                        <?php } else if ($loop->iteration == 5) { ?>
                          <input type="text" class="form-control" name="deskripsi_pengetahuan_mapel5" value="<?= $r->deskripsi_pengetahuan_mapel5  ?>">
                        <?php } else if ($loop->iteration == 6) { ?>
                          <input type="text" class="form-control" name="deskripsi_pengetahuan_mapel6" value="<?= $r->deskripsi_pengetahuan_mapel6  ?>">
                        <?php } else if ($loop->iteration == 7) { ?>
                          <input type="text" class="form-control" name="deskripsi_pengetahuan_mapel7" value="<?= $r->deskripsi_pengetahuan_mapel7  ?>">
                        <?php } else if ($loop->iteration == 8) { ?>
                          <input type="text" class="form-control" name="deskripsi_pengetahuan_mapel8" value="<?= $r->deskripsi_pengetahuan_mapel8  ?>">
                        <?php } else if ($loop->iteration == 9) { ?>
                          <input type="text" class="form-control" name="deskripsi_pengetahuan_mapel9" value="<?= $r->deskripsi_pengetahuan_mapel9  ?>">
                        <?php } ?>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nilai Keterampilan</label>
                      <div class="col-md-9">
                        <?php if ($loop->iteration == 1) { ?>
                          <input type="text" class="form-control" name="nilai_keterampilan_mapel1" value="<?= $r->nilai_keterampilan_mapel1  ?>">
                        <?php } else if ($loop->iteration == 2) { ?>
                          <input type="text" class="form-control" name="nilai_keterampilan_mapel2" value="<?= $r->nilai_keterampilan_mapel2  ?>">
                        <?php } else if ($loop->iteration == 3) { ?>
                          <input type="text" class="form-control" name="nilai_keterampilan_mapel3" value="<?= $r->nilai_keterampilan_mapel3  ?>">
                        <?php } else if ($loop->iteration == 4) { ?>
                          <input type="text" class="form-control" name="nilai_keterampilan_mapel4" value="<?= $r->nilai_keterampilan_mapel4  ?>">
                        <?php } else if ($loop->iteration == 5) { ?>
                          <input type="text" class="form-control" name="nilai_keterampilan_mapel5" value="<?= $r->nilai_keterampilan_mapel5  ?>">
                        <?php } else if ($loop->iteration == 6) { ?>
                          <input type="text" class="form-control" name="nilai_keterampilan_mapel6" value="<?= $r->nilai_keterampilan_mapel6  ?>">
                        <?php } else if ($loop->iteration == 7) { ?>
                          <input type="text" class="form-control" name="nilai_keterampilan_mapel7" value="<?= $r->nilai_keterampilan_mapel7  ?>">
                        <?php } else if ($loop->iteration == 8) { ?>
                          <input type="text" class="form-control" name="nilai_keterampilan_mapel8" value="<?= $r->nilai_keterampilan_mapel8  ?>">
                        <?php } else if ($loop->iteration == 9) { ?>
                          <input type="text" class="form-control" name="nilai_keterampilan_mapel9" value="<?= $r->nilai_keterampilan_mapel9  ?>">
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Predikat Keterampilan</label>
                      <div class="col-md-9">
                        <?php if ($loop->iteration == 1) { ?>
                          <input type="text" class="form-control" name="predikat_keterampilan_mapel1" value="<?= $r->predikat_keterampilan_mapel1  ?>">
                        <?php } else if ($loop->iteration == 2) { ?>
                          <input type="text" class="form-control" name="predikat_keterampilan_mapel2" value="<?= $r->predikat_keterampilan_mapel2  ?>">
                        <?php } else if ($loop->iteration == 3) { ?>
                          <input type="text" class="form-control" name="predikat_keterampilan_mapel3" value="<?= $r->predikat_keterampilan_mapel3  ?>">
                        <?php } else if ($loop->iteration == 4) { ?>
                          <input type="text" class="form-control" name="predikat_keterampilan_mapel4" value="<?= $r->predikat_keterampilan_mapel4  ?>">
                        <?php } else if ($loop->iteration == 5) { ?>
                          <input type="text" class="form-control" name="predikat_keterampilan_mapel5" value="<?= $r->predikat_keterampilan_mapel5  ?>">
                        <?php } else if ($loop->iteration == 6) { ?>
                          <input type="text" class="form-control" name="predikat_keterampilan_mapel6" value="<?= $r->predikat_keterampilan_mapel6  ?>">
                        <?php } else if ($loop->iteration == 7) { ?>
                          <input type="text" class="form-control" name="predikat_keterampilan_mapel7" value="<?= $r->predikat_keterampilan_mapel7  ?>">
                        <?php } else if ($loop->iteration == 8) { ?>
                          <input type="text" class="form-control" name="predikat_keterampilan_mapel8" value="<?= $r->predikat_keterampilan_mapel8  ?>">
                        <?php } else if ($loop->iteration == 9) { ?>
                          <input type="text" class="form-control" name="predikat_keterampilan_mapel9" value="<?= $r->predikat_keterampilan_mapel9  ?>">
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Deskripsi Keterampilan</label>
                      <div class="col-md-9">
                        <?php if ($loop->iteration == 1) { ?>
                          <input type="text" class="form-control" name="deskripsi_keterampilan_mapel1" value="<?= $r->deskripsi_keterampilan_mapel1  ?>">
                        <?php } else if ($loop->iteration == 2) { ?>
                          <input type="text" class="form-control" name="deskripsi_keterampilan_mapel2" value="<?= $r->deskripsi_keterampilan_mapel2  ?>">
                        <?php } else if ($loop->iteration == 3) { ?>
                          <input type="text" class="form-control" name="deskripsi_keterampilan_mapel3" value="<?= $r->deskripsi_keterampilan_mapel3  ?>">
                        <?php } else if ($loop->iteration == 4) { ?>
                          <input type="text" class="form-control" name="deskripsi_keterampilan_mapel4" value="<?= $r->deskripsi_keterampilan_mapel4  ?>">
                        <?php } else if ($loop->iteration == 5) { ?>
                          <input type="text" class="form-control" name="deskripsi_keterampilan_mapel5" value="<?= $r->deskripsi_keterampilan_mapel5  ?>">
                        <?php } else if ($loop->iteration == 6) { ?>
                          <input type="text" class="form-control" name="deskripsi_keterampilan_mapel6" value="<?= $r->deskripsi_keterampilan_mapel6  ?>">
                        <?php } else if ($loop->iteration == 7) { ?>
                          <input type="text" class="form-control" name="deskripsi_keterampilan_mapel7" value="<?= $r->deskripsi_keterampilan_mapel7  ?>">
                        <?php } else if ($loop->iteration == 8) { ?>
                          <input type="text" class="form-control" name="deskripsi_keterampilan_mapel8" value="<?= $r->deskripsi_keterampilan_mapel8  ?>">
                        <?php } else if ($loop->iteration == 9) { ?>
                          <input type="text" class="form-control" name="deskripsi_keterampilan_mapel9" value="<?= $r->deskripsi_keterampilan_mapel9  ?>">
                        <?php } ?>
                      </div>
                    </div>
                  </div>

                  @endforeach
                </div>
              </div>
              <!-- DATA NILAI SEMESTER (LAINNYA) -->
              @foreach ($raport2 as $r2)
              <?php if ($r2->id != $idRaport2) { ?>
              <?php  } else { ?>
                <div class="modal-body">
                  <h5 class="bg-secondary text-center text-white py-1">Lainnya</h5>
                  <div style="margin-bottom: 25px;"></div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Ekstrakurikuler 1</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="nama_ekstrakurikuler1" value="{{ $r2->nama_ekstrakurikuler1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Ekstrakurikuler 1</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="keterangan_nama_ekstrakurikuler1" value="{{ $r2->keterangan_nama_ekstrakurikuler1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Saran-saran</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="saran_saran" value="{{ $r2->saran_saran }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Tinggi Badan Semester 1 (cm)</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="tinggi_badan_semester1" value="{{ $r2->tinggi_badan_semester1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Tinggi Badan Semester 2 (cm)</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="tinggi_badan_semester2" value="{{ $r2->tinggi_badan_semester2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Aspek Fisik 1</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="nama_aspek_fisik1" value="{{ $r2->nama_aspek_fisik1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Aspek Fisik 1</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="keterangan_aspek_fisik1" value="{{ $r2->keterangan_aspek_fisik1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Aspek Fisik 2</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="nama_aspek_fisik2" value="{{ $r2->nama_aspek_fisik2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Aspek Fisik 2</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="keterangan_aspek_fisik2" value="{{ $r2->keterangan_aspek_fisik2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jenis Prestasi 1</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="jenis_prestasi1" value="{{ $r2->jenis_prestasi1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Prestasi 1</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="keterangan_prestasi1" value="{{ $r2->keterangan_prestasi1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jumlah Sakit</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="jumlah_sakit" value="{{ $r2->jumlah_sakit }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jumlah Izin</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="jumlah_izin" value="{{ $r2->jumlah_izin }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jumlah Tanpa Keterangan</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="jumlah_tanpa_keterangan" value="{{ $r2->jumlah_tanpa_keterangan }}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Ekstrakurikuler 2</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="nama_ekstrakurikuler2" value="{{ $r2->nama_ekstrakurikuler2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Deskripsi Ekstrakurikuler 2</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="keterangan_nama_ekstrakurikuler2" value="{{ $r2->keterangan_nama_ekstrakurikuler2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Berat Badan Semester 1 (kg)</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="berat_badan_semester1" value="{{ $r2->berat_badan_semester1 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Berat Badan Semester 2 (kg)</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="berat_badan_semester2" value="{{ $r2->berat_badan_semester2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Aspek Fisik 3</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="nama_aspek_fisik3" value="{{ $r2->nama_aspek_fisik3 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Aspek Fisik 3</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="keterangan_aspek_fisik3" value="{{ $r2->keterangan_aspek_fisik3 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Aspek Fisik 4</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="nama_aspek_fisik4" value="{{ $r2->nama_aspek_fisik4 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Aspek Fisik 4</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="keterangan_aspek_fisik4" value="{{ $r2->keterangan_aspek_fisik4 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jenis Prestasi 2</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="jenis_prestasi2" value="{{ $r2->jenis_prestasi2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keterangan Prestasi 2</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="keterangan_prestasi2" value="{{ $r2->keterangan_prestasi2 }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Tanggal Penulisan Raport</label>
                        <div class="col-md-9">
                          <input type="date" class="form-control" name="tanggal_penulisan_raport" value="{{ $r2->tanggal_penulisan_raport }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Wali Kelas</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="nama_wali_kelas" value="{{ $r2->nama_wali_kelas }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">NIP Wali Kelas</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="nip_wali_kelas" value="{{ $r2->nip_wali_kelas }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Keputusan Naik Kelas</label>
                        <div class="col-md-9">
                          <input type="test" class="form-control" name="keputusan_naik_kelas" value="{{ $r2->keputusan_naik_kelas }}">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
              @endforeach
              <div class="modal-footer">
                <button type="symit" class="btn btn-primary" data-bs-dismiss="modal">Simpan Perubahan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        @endforeach

        <div class="container-fluid">
          <table class="table custom-table">
            <thead class="thead-light">
              <tr>
                <th>Nama Siswa </th>
                <th>NISN</th>
                <th>Kelas/Semester</th>
                <th class="text-right">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($raport as $r)
              <tr>
                <td>{{ $r->nama_siswa }} </td>
                <td>{{ $r->nisn }}</td>
                <td> {{ $r->kelas }} / {{ $r->semester }} </td>
                <td class=" text-right d-flex">
                  <?php $idRaport2 =  $r->id - 5 ?>
                  <a href="" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailModal{{ $r->id }}{{ $idRaport2 }}">Detail</a>
                  <a href="" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $r->id }}{{ $idRaport2 }}">Edit</a>
                  <form action="/hapusRaport" method="post">
                    @csrf
                    <input type="hidden" name="idraport1" value="{{ $r->id }}">
                    <input type="hidden" name="idraport2" value="{{ $idRaport2 }}">
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                  </form>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>

  </div>


  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <script src="bootstrap.bundle.min.js"></script>
  <script src="admin/assets/js/jquery-3.6.0.min.js"></script>

  <script src="admin/assets/js/bootstrap.bundle.min.js"></script>

  <script src="admin/assets/js/jquery.slimscroll.js"></script>

  <script src="admin/assets/js/select2.min.js"></script>
  <script src="admin/assets/js/moment.min.js"></script>

  <script src="admin/assets/js/fullcalendar.min.js"></script>
  <script src="admin/assets/js/jquery.fullcalendar.js"></script>

  <script src="admin/assets/plugins/morris/morris.min.js"></script>
  <script src="admin/assets/plugins/raphael/raphael-min.js"></script>
  <script src="admin/assets/js/apexcharts.js"></script>
  <script src="admin/assets/js/chart-data.js"></script>

  <script src="admin/assets/js/app.js"></script>
</body>

</html>