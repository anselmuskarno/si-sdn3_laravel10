<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>
    Cetak Raport
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/handayani.png">

  <link href="admin/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

  <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/fontawesome.min.css">

  <link rel="stylesheet" href="admin/assets/plugins/icons/feather/feather.css">

  <link rel="stylesheet" href="admin/assets/css/fullcalendar.min.css">

  <link rel="stylesheet" href="admin/assets/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="admin/assets/plugins/morris/morris.css">

  <link rel="stylesheet" href="admin/assets/css/style.css">
  <style>
    @media print {
      body {
        -webkit-print-color-adjust: exact;
      }
    }
  </style>
  <!--[if lt IE 9]>
		<script src="admin/assets/js/html5shiv.min.js"></script>
		<script src="admin/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

  <div class="mt-3"></div>
  <div class=" coba m-auto d-flex" style="width: 500px; ">
    <select id="pilihkelas" class="form-control">
      <option disabled value="kosong">Pilih Kelas</option>
      @foreach ( $kelas as $k)
      <option value="{{ $k->nama_kelas }}">Kelas {{ $k->nama_kelas }}</option>
      @endforeach
    </select>
    <select id="pilihsemester" class="form-control">
      <option disabled value="kosong">Pilih Semester</option>
      <option value="ganjil">Ganjil</option>
      <option value="genap">Genap</option>
    </select> &nbsp;&nbsp;&nbsp;
    <div class="btn btn-warning btn-sm px-4" onclick="display();">Cari</div>
  </div>
  <div class="text-center mt-3">
    <a href="javascript:void(0);" class="btn btn-primary" onclick="printPageArea('printableArea')">Print</a>
    <a href="/raport" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin ingin meninggalkan halaman ini?')">Logout</a>
  </div>



  <div class="main-wrapper py-2 px-2" id="printableArea">

    @foreach ($dataku as $dk)
    <?php if ($loop->iteration == 1) { ?>
      <!-- AWAL SAMPUL -->
      <div class="text-center mb-5" style="margin-top: 300px;">
        <img style="width: 70px;" src="smartedu-master\images\lainnya\handayani.png" alt="">
      </div>
      <div class="text-center">
        <h3>RAPORT</h3>
        <h3>PESERTA DIDIK</h3>
        <h3>SEKOLAH DASAR</h3>
      </div>

      <div style="margin-top: 150px; " class="text-center">
        <h4>NAMA PESERTA DIDIK</h4>
        <div class="mb-2"></div>
        <table border="1" align="center">
          <tr>
            <td style="width: 400px; height:50px">
              <h3> {{ $dk->nama_siswa }} </h3>
            </td>
          </tr>
        </table>
        <div class="mb-2"></div>
        <h4>NISN/NIS</h4>
        <div class="mb-2"></div>
        <table border="1" align="center">
          <tr>
            <td style="width: 400px; height:50px">
              <h3>{{ $dk->nis }}</h3>
            </td>
          </tr>
        </table>
      </div>

      <div style="margin-top:300px; margin-bottom:200px" class="text-center">
        <h3>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h3>
        <h3>REPUBLIK INDONESIA</h3>
      </div>
      <div class="" style="margin-bottom:400px"></div>
      <!-- AKHIR SAMPUL -->

      <div style="height:200px"></div>

      <!-- AWAL HALAMAN DATA SEKOLAH -->
      <div>
        <div class="container text-center">
          <h3>RAPORT PESERTA DIDIK</h3>
          <h3>SEKOLAH DASAR</h3>
          <div style="height:100px"></div>
          <table align="center" style="font-size: 20px;" class="text-left">
            <tr>
              <td style="width: 300px; padding-left:5px">Nama Sekolah</td>
              <td style="width: 450px; padding-left:5px">: SDN 3 Rantepao</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">NPSN</td>
              <td style="width: 300px; padding-left:5px">: 40306750</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">NISN / NIS</td>
              <td style="width: 300px; padding-left:5px">: {{ $dk->nis }} </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Alamat Sekolah</td>
              <td style="width: 300px; padding-left:5px">: Jln. Budi Utomo No.10 Rantepao</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px"></td>
              <td style="width: 300px; padding-left:5px"> Kode Pos : 91831</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Kelurahan/Desa</td>
              <td style="width: 300px; padding-left:5px">: Rantepao</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Kecamatan</td>
              <td style="width: 300px; padding-left:5px">: Rantepao</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Kabupaten/Kota</td>
              <td style="width: 300px; padding-left:5px">: Toraja Utara</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Provinsi</td>
              <td style="width: 300px; padding-left:5px">: Sulawesi Selatan</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Website</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">E-mail</td>
              <td style="width: 300px; padding-left:5px">: sdn.3rantepao@gmail.com</td>
            </tr>
          </table>
          <div style="height: 800px;"></div>
        </div>
      </div>
      <!-- AKHIR HALAMAN DATA SEKOLAH -->

      <!-- AWAL HALAMAN IDENTITAS PESERTA DIDIK -->
      <div>
        <div class="container text-center">
          <div style="height:100px"></div>
          <h3 class="mb-3">IDENTITAS PESERTA DIDIK</h3>
          <div style="height: 50px;"></div>
          <table align="center" style="font-size: 20px;" class="text-left">
            <tr>
              <td style="width: 300px; padding-left:5px">Nama Peserta Didik</td>
              <td style="width: 450px; padding-left:5px">: SDN 3 Rantepao</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">NISN/NIS</td>
              <td style="width: 300px; padding-left:5px">: {{ $dk->nis }}</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Tempat, Tanggal Lahir</td>
              <td style="width: 300px; padding-left:5px">: 12345</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Jenis Kelamin</td>
              <td style="width: 300px; padding-left:5px">: Jln. Budi Utomo No.10 Rantepao</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Agama</td>
              <td style="width: 300px; padding-left:5px"> Kode Pos : 91831</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Pendidikan Sebelumnya</td>
              <td style="width: 300px; padding-left:5px">: Rantepao</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Alamat Peserta Didik</td>
              <td style="width: 300px; padding-left:5px">: Rantepao</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Nama Orang Tua</td>
              <td style="width: 300px; padding-left:5px"></td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Ayah</td>
              <td style="width: 300px; padding-left:5px">: Sulawesi Selatan</td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Ibu</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Pekerjaan Orang Tua</td>
              <td style="width: 300px; padding-left:5px"></td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Ayah</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Ibu</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Alamat Orang Tua</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Kelurahan/Desa</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Kecamatan</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Kabupaten/Kota</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Provinsi</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Wali Peserta Didik</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Nama</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Pekerjaan</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
            <tr>
              <td style="width: 300px; padding-left:5px">Alamat</td>
              <td style="width: 300px; padding-left:5px">: </td>
            </tr>
          </table>
          <div style="height: 100px;"></div>
          <table align="right" class="text-left">
            <tr>
              <td class="" style="width: 200px; padding-left:5px;"></td>
              <td class="" style="width: 200px; padding-left:5px;">Rantepao, 10 Juli 2017</td>
            </tr>
            <tr>
              <td style="width: 200px; padding-left:5px;"></td>
              <td style="width: 200px; padding-left:5px;">Kepala Sekolah</td>
            </tr>
            <tr>
              <td style="width: 200px; height:100px; padding-left:5px;"></td>
              <td style="width: 200px; height:100px; padding-left:5px;"></td>
            </tr>
            <tr>
              <td style="width: 200px; padding-left:5px; text-decoration:underline"> </td>
              <td style="width: 200px; padding-left:5px; text-decoration:underline"> <b>L. RATURANTE</b> </td>
            </tr>
            <tr>
              <td style="width: 200px; padding-left:5px; "> </td>
              <td style="width: 200px; padding-left:5px; "> NIP.- </td>
            </tr>
          </table>
        </div>
      </div>
      <!-- AKHIR HALAMAN IDENTITAS PESERTA DIDIK -->

      <div style="height: 500px;"></div>

      <div class="margin-top:900px"></div>
      <h4 class="text-center"><b> RAPORT PESERTA DIDIK DAN PROFIL PESERTA DIDIK</b></h4>
    <?php } else { ?>
      <div style="height: 150px;"></div>
      <h4 class="text-center"><b> RAPORT PESERTA DIDIK DAN PROFIL PESERTA DIDIK</b></h4>
    <?php } ?>
    <div class="mt-3"></div>
    <table align="center">
      <tr>
        <td style="width: 150px;">Nama Peserta Didik</td>
        <input id="nama_siswa" type="hidden" value="{{ $dk->nama_siswa }}">
        <td>: {{ $dk->nama_siswa }} </td>
        <td style="width: 100px;"></td>
        <td style="width: 150px;">Kelas</td>
        <td>:{{ $dk->kelas }}</td>
      </tr>
      <tr>
        <td>NISN/NIS</td>
        <td>:{{ $dk->nisn }}/{{ $dk->nis }}</td>
        <td></td>
        <td>Semester</td>
        <td>:{{ $dk->semester }}</td>
      </tr>
      <tr>
        <td>Nama Sekolah</td>
        <td>:SDN 3 Rantepao</td>
        <td></td>
        <td>Tahun Pelajaran</td>
        <td>:{{ $dk->tahun_pelajaran }}</td>
      </tr>
      <tr>
        <td>Alamat Sekolah</td>
        <td>:Jln. Budi Utomo No. 10 Rantepao</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
    <div style="margin-left: 170px;">
      <!-- SIKAP -->
      <div class="mt-4">
        <h5>A. Sikap</h5>
        <table border="1" style="width: 690px;">
          <tr>
            <td class="bg-light text-center" colspan="2"><b> Deskripsi </b></td>
          </tr>
          <tr>
            <td style="width: 190px;">1. {{ $dk->nama_sikap1 }}</td>
            <td style="width: 500px;">{{ $dk->deskripsi_sikap1 }} </td>
          </tr>
          <tr>
            <td style="width: 190px;">1. {{ $dk->nama_sikap2 }}</td>
            <td style="width: 500px;">{{ $dk->deskripsi_sikap2 }} </td>
          </tr>
        </table>
      </div>

      <!-- PENGETAHUAN KETERAMPILAN -->
      <div class="mt-4">
        <h5>B. Pengetahuan dan Keterampilan</h5>
        <table border="1" style="width: 690px;">
          <tr class="text-center bg-light">
            <th rowspan="2">No</th>
            <th rowspan="2">Muatan Pelajaran</th>
            <th colspan="3">Pengetahuan</th>
            <th colspan="3">Keterampilan</th>
          </tr>
          <tr class="text-center bg-light">
            <th>Nilai</th>
            <th>Predikat</th>
            <th>Deskripsi</th>
            <th>Nilai</th>
            <th>Predikat</th>
            <th>Deskripsi</th>
          </tr>
          @foreach ($mapel as $m )
          <tr>
            <td class="text-center" style="width: 30px;"> {{ $loop->iteration }} </td>
            <td class="text-center" style="width: 100px;">{{ $m->nama_mapel }}</td>
            <?php if ($loop->iteration == 1) { ?>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_pengetahuan_mapel1 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_pengetahuan_mapel1 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_pengetahuan_mapel1 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_keterampilan_mapel1 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_keterampilan_mapel1 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_keterampilan_mapel1 }} </td>
            <?php } else if ($loop->iteration == 2) { ?>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_pengetahuan_mapel2 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_pengetahuan_mapel2 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_pengetahuan_mapel2 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_keterampilan_mapel2 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_keterampilan_mapel2 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_keterampilan_mapel2 }} </td>
            <?php } else if ($loop->iteration == 3) { ?>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_pengetahuan_mapel3 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_pengetahuan_mapel3 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_pengetahuan_mapel3 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_keterampilan_mapel3 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_keterampilan_mapel3 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_keterampilan_mapel3 }} </td>
            <?php } else if ($loop->iteration == 4) { ?>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_pengetahuan_mapel4 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_pengetahuan_mapel4 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_pengetahuan_mapel4 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_keterampilan_mapel4 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_keterampilan_mapel4 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_keterampilan_mapel4 }} </td>
            <?php } else if ($loop->iteration == 5) { ?>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_pengetahuan_mapel5 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_pengetahuan_mapel5 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_pengetahuan_mapel5 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_keterampilan_mapel5 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_keterampilan_mapel5 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_keterampilan_mapel5 }} </td>
            <?php } else if ($loop->iteration == 6) { ?>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_pengetahuan_mapel6 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_pengetahuan_mapel6 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_pengetahuan_mapel6 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_keterampilan_mapel6 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_keterampilan_mapel6 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_keterampilan_mapel6 }} </td>
            <?php } else if ($loop->iteration == 7) { ?>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_pengetahuan_mapel7 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_pengetahuan_mapel7 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_pengetahuan_mapel7 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_keterampilan_mapel7 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_keterampilan_mapel7 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_keterampilan_mapel7 }} </td>
            <?php } else if ($loop->iteration == 8) { ?>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_pengetahuan_mapel8 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_pengetahuan_mapel8 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_pengetahuan_mapel8 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_keterampilan_mapel8 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_keterampilan_mapel8 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_keterampilan_mapel8 }} </td>
            <?php } else if ($loop->iteration == 9) { ?>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_pengetahuan_mapel9 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_pengetahuan_mapel9 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_pengetahuan_mapel9 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->nilai_keterampilan_mapel9 }} </td>
              <td class="text-center" style="width: 40px;"> {{ $dk->predikat_keterampilan_mapel9 }} </td>
              <td style="width: 200px; padding-left:5px;"> {{ $dk->deskripsi_keterampilan_mapel9 }} </td>
            <?php } ?>
          </tr>
          @endforeach
        </table>
      </div>

      @foreach ($dataku2 as $d2)
      <!-- EKSTRAKURIKULER -->
      <div class="mt-4">
        <h5>C. Ekstrakurikuler</h5>
        <table border="1" style="width: 690px;">
          <tr class="bg-light text-center">
            <th style="width: 30px;">No.</th>
            <th style="width: 250px;">Kegiatan Ekstrakurikuler</th>
            <th style="width: 410px;">Keterangan</th>
          </tr>
          <tr>
            <td style="width: 30px; padding-left:5px;">1</td>
            <td style="width: 250px; padding-left:5px;"> {{ $d2->nama_ekstrakurikuler1 }} </td>
            <td style="width: 410px; padding-left:5px;">{{ $d2->keterangan_nama_ekstrakurikuler1 }} </td>
          </tr>
          <tr>
            <td style="width: 30px; padding-left:5px;">2</td>
            <td style="width: 250px; padding-left:5px;"> {{ $d2->nama_ekstrakurikuler2 }} </td>
            <td style="width: 410px; padding-left:5px;">{{ $d2->keterangan_nama_ekstrakurikuler2 }} </td>
          </tr>
        </table>
      </div>

      <!-- SARAN -->
      <div class="mt-4">
        <h5>D. Saran-Saran</h5>
        <table border="1" style="width: 690px;">
          <tr class="">
            <td style="padding-left:5px; width: 690px; height:100px;">{{ $d2->saran_saran }} </td>
          </tr>
        </table>
      </div>

      <!-- TINGGI BERAT BADAN -->
      <div class="mt-4">
        <h5>E. Tinggi dan Berat Badan</h5>
        <table border="1" style="width: 690px;">
          <tr class="bg-light text-center">
            <th style="width: 30px;" rowspan="2">No.</th>
            <th style="width: 350px;" rowspan="2">Aspek yang Dinilai</th>
            <th style="width: 310px;" colspan="2">Semester</th>
          </tr>
          <tr class="bg-light">
            <td class="text-center" style=" width: 155px; padding-left:5px;">1</td>
            <td class="text-center" style=" width: 155px; padding-left:5px;">2</td>
          </tr>
          <tr>
            <td style="padding-left:5px">1</td>
            <td style="padding-left:5px">Tinggi Badan</td>
            <td style="padding-left:5px">{{ $d2->tinggi_badan_semester1 }} cm</td>
            <td style="padding-left:5px">{{ $d2->tinggi_badan_semester2 }} cm </td>
          </tr>
          <tr>
            <td style="padding-left:5px">2</td>
            <td style="padding-left:5px">Berat Badan</td>
            <td style="padding-left:5px">{{ $d2->berat_badan_semester1 }} kg</td>
            <td style="padding-left:5px">{{ $d2->berat_badan_semester2 }}</td>
          </tr>
        </table>
      </div>

      <!-- KONDISI KESEHATAN -->
      <div class="mt-4">
        <h5>F. Kondisi Kesehatan</h5>
        <table border="1" style="width: 690px;">
          <tr class="bg-light text-center">
            <th style="width: 30px;">No.</th>
            <th style="width: 250px;">Aspek Fisik</th>
            <th style="width: 410px;">Keterangan</th>
          </tr>
          <tr>
            <td style="width: 30px; padding-left:5px;">1</td>
            <td style="width: 250px; padding-left:5px;">{{ $d2->nama_aspek_fisik1 }}</td>
            <td style="width: 410px; padding-left:5px;">{{ $d2->keterangan_aspek_fisik1 }}</td>
          </tr>
          <tr>
            <td style="width: 30px; padding-left:5px;">2</td>
            <td style="width: 250px; padding-left:5px;">{{ $d2->nama_aspek_fisik2 }}</td>
            <td style="width: 410px; padding-left:5px;">{{ $d2->keterangan_aspek_fisik2 }}</td>
          </tr>
          <tr>
            <td style="width: 30px; padding-left:5px;">3</td>
            <td style="width: 250px; padding-left:5px;">{{ $d2->nama_aspek_fisik3 }}</td>
            <td style="width: 410px; padding-left:5px;">{{ $d2->keterangan_aspek_fisik3 }}</td>
          </tr>
          <tr>
            <td style="width: 30px; padding-left:5px;">4</td>
            <td style="width: 250px; padding-left:5px;">{{ $d2->nama_aspek_fisik4 }}</td>
            <td style="width: 410px; padding-left:5px;">{{ $d2->keterangan_aspek_fisik4 }}</td>
          </tr>
        </table>
      </div>

      <!-- PRESTASI -->
      <div class="mt-4">
        <h5>G. Prestasi</h5>
        <table border="1" style="width: 690px;">
          <tr class="bg-light text-center">
            <th style="width: 30px;">No.</th>
            <th style="width: 250px;">Jenis Prestasi</th>
            <th style="width: 410px;">Keterangan</th>
          </tr>
          <tr>
            <td style="width: 30px; padding-left:5px;">1</td>
            <td style="width: 250px; padding-left:5px;">{{ $d2->jenis_prestasi1 }}</td>
            <td style="width: 410px; padding-left:5px;">{{ $d2->keterangan_prestasi1 }}</td>
          </tr>
          <tr>
            <td style="width: 30px; padding-left:5px;">2</td>
            <td style="width: 250px; padding-left:5px;">{{ $d2->jenis_prestasi2 }}</td>
            <td style="width: 410px; padding-left:5px;">{{ $d2->keterangan_prestasi2 }}</td>
          </tr>
        </table>
      </div>

      <!-- KETIDAKHADIRAN -->
      <div class="mt-4">
        <h5>H. Ketidakhadiran</h5>
        <table border="1" style="width: 690px;">
          <tr>
            <td style="width: 280px; padding-left:5px;">Sakit</td>
            <td style="width: 440px; padding-left:5px;">: {{ $d2->jumlah_sakit }}</td>
          </tr>
          <tr>
            <td style="width: 280px; padding-left:5px;">Izin</td>
            <td style="width: 440px; padding-left:5px;">: {{ $d2->jumlah_izin }}</td>
          </tr>
          <tr>
            <td style="width: 280px; padding-left:5px;">Tanpa Keterangan</td>
            <td style="width: 440px; padding-left:5px;">: {{ $d2->jumlah_tanpa_keterangan }}</td>
          </tr>
        </table>
      </div>
      <div class="text-right mt-3" style="margin-right: 180px;">
        Rantepao, {{ $d2->tanggal_penulisan_raport }}
      </div>
    </div>

    <div class="text-center" style="margin-top:30px">
      <table align="center" style="width: 690px;">
        <tr>
          <td>
            Orang Tua/Wali,
          </td>
          <td>
            Guru Kelas,
          </td>
        </tr>
        <tr>
          <td>
            &nbsp;
          </td>
          <td style="height: 100px;">
            &nbsp;
          </td>
        </tr>
        <tr>
          <td style="font-weight: bold; text-decoration:underline">
            ..........................................
          </td>
          <td style="font-weight: bold; text-decoration:underline">
            {{ $d2->nama_wali_kelas }}
          </td>
        </tr>
        <tr>
          <td>
            &nbsp;
          </td>
          <td>
            NIP.:-
          </td>
        </tr>
      </table>
    </div>

    @endforeach
    <?php if ($loop->iteration == 1) { ?>
      <div style="margin-top: 400px;"></div>
    <?php } else { ?>
      <div style="margin-top: 0px;"></div>
    <?php } ?>
    @endforeach
  </div>

  <script>
    var count = 8; // dalam detik
    function countDown() {
      if (count > 0) {
        count--;
        var waktu = count + 1;
        setTimeout("countDown()", 1000);
      } else {
        localStorage.setItem('ulang', '1')
        window.location.reload();
      }
    }
    countDown();

    function display() {
      var x = document.getElementById('pilihkelas').value;
      var z = document.getElementById('pilihsemester').value;
      var y = document.getElementById('nama_siswa').value;
      if (x != "kosong") {
        return window.location.href = "http://localhost:8000/cobaku/" + x + "/" + y + "/" + z;
      }
      document.getElementById('anselku').innerHTML = x;
    }
  </script>


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
  <script>
    function printPageArea(areaID) {
      var printContent = document.getElementById(areaID).innerHTML;
      var originalContent = document.body.innerHTML;
      document.body.innerHTML = printContent;
      window.print();
      document.body.innerHTML = originalContent;
    }
  </script>

</body>

</html>