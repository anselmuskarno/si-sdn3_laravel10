<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title> SDN 3 Toraja Utara</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<link href="smartedu-master/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="smartedu-master/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="smartedu-master/assets/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="smartedu-master/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="smartedu-master/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

<!-- Site Icons -->
<link rel="shortcut icon" href="smartedu-master/images/lainnya/handayani.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="smartedu-master/images/lainnya/handayani.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="smartedu-master/css/bootstrap.min.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Site CSS -->
<link rel="stylesheet" href="smartedu-master/style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="smartedu-master/css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="smartedu-master/css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="smartedu-master/css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="smartedu-master/js/modernizer.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">
  <!-- Modal -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header tit-up">
          @if (session()->has('gagal'))
          <div class="alert alert-danger" role="alert">
            {{ session('gagal') }}
          </div>
          @endif
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body customer-box">
          <!-- Nav tabs -->

          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="Login">
              <form class="form-horizontal" action="/loginAdmin" method="post">
                @csrf
                <!-- <input type="hidden" name="id" value="1"> -->
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" id="username" name="username" placeholder="Username" type="text" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" id="password" name="password" placeholder="Password" type="password" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                      Masuk
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane" id="Registration">
              <form action="/daftarAdmin" method="post" role="form" class="form-horizontal">
                @csrf
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" placeholder="Nama" type="text" name="nama" id="nama">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" name="username" id="username" placeholder="username" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" name="password" id="password" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                      Save &amp; Continue
                    </button>
                    <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                      Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- LOADER -->
  <div id="preloader">
    <div class="loader-container">
      <div class="progress-br float shadow">
        <div class="progress__item"></div>
      </div>
    </div>
  </div>
  <!-- END LOADER -->

  <!-- Start header -->
  <header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="smartedu-master/images/logoSDN3.png" width="150px" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-host">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/guru">Profil Guru</a></li>
            <li class="nav-item"><a class="nav-link" href="/galleri">Galleri</a></li>

            <li class="nav-item"><a class="nav-link" href="/raport" target="_blank">Raport</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Lainnya
                <i class="bi bi-grid-3x3-gap"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="/agenda">Agenda </a>
                <a class="dropdown-item" href="/pengumuman">Pengumuman </a>
                <a class="dropdown-item" href="/berita">Berita</a>
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Login</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End header -->

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="smartedu-master/images/bg1.jpg" style="filter: brightness(50%); height: 560px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="text-warning">SD Negeri 3 Toraja Utara</h1>
          <p>Pendidikan adalah proses mempelajari apa yang kamu bahkan tidak
            tahu kamu tidak mengetahuinya.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="smartedu-master/images/bg3.jpg" style="filter: brightness(50%); height: 560px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="text-warning">SD Negeri 3 Toraja Utara</h1>
          <p>Pendidikan adalah proses mempelajari apa yang kamu bahkan tidak
            tahu kamu tidak mengetahuinya.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="smartedu-master/images/bg4.jpg" style="filter: brightness(50%); height: 560px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="text-warning">SD Negeri 3 Toraja Utara</h1>
          <p>Pendidikan adalah proses mempelajari apa yang kamu bahkan tidak
            tahu kamu tidak mengetahuinya.</p>
        </div>
      </div>
    </div>
  </div>

  <div id="pricing-box" class="section wb">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 wow fadeInLeft">
          <div class="pricingTable">
            <div class="pricingTable-header">
              <span class="heading">
                <h3>Identitas Sekolah</h3>
              </span>
              <span class="price-value"> <span>Informasi Umum Tentang Sekolah
                </span></span>
            </div>

            <div class="pricingContent px-2 py-2">

              <table class="table table-striped" style="text-align: left;">
                <tr>
                  <td>Nama Sekolah</td>
                  <td>:</td>
                  <td>SD Negeri 3 Toraja Utara</td>
                </tr>
                <tr>
                  <td>
                    Nomor Pokok</td>
                  <td>:</td>
                  <td>40306750</td>
                </tr>
                <tr>
                  <td>
                    Jenjang Pendidikan</td>
                  <td>:</td>
                  <td>SD</td>
                </tr>
                <tr>
                  <td>
                    Alamat Sekolah</td>
                  <td>:</td>
                  <td>Jln. Budi Utomo No. 10 Rantepao</td>
                </tr>
                <tr>
                  <td>
                    Kelurahan</td>
                  <td>:</td>
                  <td>Rantepao</td>
                </tr>
                <tr>
                  <td>
                    Kecamatan</td>
                  <td>:</td>
                  <td>Rantepao</td>
                </tr>
                <tr>
                  <td>
                    Kabupaten</td>
                  <td>:</td>
                  <td>Toraja Utara</td>
                </tr>
                <tr>
                  <td>
                    Provinsi</td>
                  <td>:</td>
                  <td>Sulawesi Selatan</td>
                </tr>
                <tr>
                  <td>
                    Akreditasi</td>
                  <td>:</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>
                    Kode Pos</td>
                  <td>:</td>
                  <td>91831</td>
                </tr>
                <tr>
                  <td>
                    Lokasi Geografis</td>
                  <td>:</td>
                  <td>Lintang -2 Bujur 119</td>
                </tr>
              </table>
            </div><!-- /  CONTENT BOX-->

            <div class="pricingTable-sign-up">
              <a href="#!" class="hover-btn-new orange"><span></span></a>
            </div><!-- BUTTON BOX-->
          </div>
        </div>

        <div class="col-md-4 col-sm-6 wow fadeInUp">
          <div class="pricingTable pink">
            <div class="pricingTable-header">
              <span class="heading">
                <h3>Izin dan Pendirian</h3>
              </span>
              <span class="price-value"> <span>Informasi Lanjutan 1
                </span></span>
            </div>

            <div class="pricingContent px-2 py-2 ">

              <table class="table table-striped" style="text-align: left;">
                <tr>
                  <td>SK Pendirian Sekolah</td>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>
                    Tanggal SK Pendirian</td>
                  <td>:</td>
                  <td>1956-01-02</td>
                </tr>
                <tr>
                  <td>
                    Status Kepemilikan</td>
                  <td>:</td>
                  <td>Negeri</td>
                </tr>
                <tr>
                  <td>
                    SK Izin Operasional</td>
                  <td>:</td>
                  <td>03/DP-TU/DIKDAS.1/IV/2014</td>
                </tr>
                <tr>
                  <td>
                    Tgl SK Izin</td>
                  <td>:</td>
                  <td>2014-04-01</td>
                </tr>
                <tr>
                  <td>
                    Kebutuhan Khusus</td>
                  <td>:</td>
                  <td>Tidak ada</td>
                </tr>
                <tr>
                  <td>
                    Nama Bank</td>
                  <td>:</td>
                  <td>BPD SULAWESI SELA...</td>
                </tr>
                <tr>
                  <td>
                    Cabang KCP/Unit</td>
                  <td>:</td>
                  <td>BPD SULAWESI SELATAN CABANG BOLU...</td>
                </tr>
                <tr>
                  <td>
                    Atas Nama Rekening</td>
                  <td>:</td>
                  <td>SDN3RANTEPAO(BOS)...</td>
                </tr>
                <tr>
                  <td>
                  </td>
                  <td> </td>
                  <td> </td>
                </tr>

              </table>
            </div><!-- /  CONTENT BOX-->

            <div class="pricingTable-sign-up">
              <a href="#!" class="hover-btn-new orange"><span></span></a>
            </div><!-- BUTTON BOX-->
          </div>
        </div>

        <div class="col-md-4 col-sm-6 wow fadeInRight">
          <div class="pricingTable">
            <div class="pricingTable-header">
              <span class="heading">
                <h3>Informasi Lainnya</h3>
              </span>
              <span class="price-value"> <span>Informasi Lanjutan 2
                </span></span>
            </div>

            <div class="pricingContent px-2 py-2 ">

              <table class="table table-striped" style="text-align: left;">
                <tr>
                  <td>Akreditasi</td>
                  <td>:</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>
                    Kurikulum</td>
                  <td>:</td>
                  <td>Kurikulum 2013</td>
                </tr>
                <tr>
                  <td>
                    Kepala Sekolah</td>
                  <td>:</td>
                  <td>Yonanis Isa Palindangan, S.Ag.</td>
                </tr>
                <tr>
                  <td>
                    Operator Data</td>
                  <td>:</td>
                  <td>Mirna Rachman</td>
                </tr>
                <tr>
                  <td>
                    Email</td>
                  <td>:</td>
                  <td>sdn.3rantepao@gmail.com</td>
                </tr>
                <tr>
                  <td>
                    Telepon</td>
                  <td>:</td>
                  <td>(0423) 25046</td>
                </tr>
                <tr>
                  <td>
                    Sumber Listrik</td>
                  <td>:</td>
                  <td>PLN</td>
                </tr>
                <tr>
                  <td>
                    Daya Listrik Sekolah</td>
                  <td>:</td>
                  <td>2300 Watt</td>
                </tr>
                <tr>
                  <td>
                    Akses Internet</td>
                  <td>:</td>
                  <td>Telkom Speedy</td>
                </tr>
                <tr>
                  <td>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>
                  </td>
                  <td></td>
                  <td><br></td>
                </tr>
              </table>
            </div><!-- /  CONTENT BOX-->

            <div class="pricingTable-sign-up">
              <a href="#!" class="hover-btn-new orange"><span></span></a>
            </div><!-- BUTTON BOX-->
          </div>
        </div>
      </div>
    </div>
  </div><!-- end section -->


  <!-- Visi Misi -->
  <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('smartedu-master/images/upacara/upacara3.jpg');">
    <div class="container">
      <div class="section-title text-center wow fadeInUp">
        <h3>Visi dan Misi SD Negeri 3 Toraja Utara</h3>
      </div><!-- end title -->
      <div class="row">
        <div class="col-md-4 col-sm-4 wow fadeInLeft">
          <div class="testi-carousel owl-carousel owl-theme">
            <div class="testimonial clearfix">
              <div class="desc bg-secondary">
                <h3 class="text-white"> VISI : <br>
                  Terwujudnya Peserta Didik Yang Berkarakter, Cerdas, Kreatif dan Berwawasan Global</h3>
              </div>
              <div class="desc">
                <p class="text-white">INDIKATOR VISI: <br>
                <p class="text-secondary" style="text-align: left;">
                  1. Berkarakter, mengimplementasikan Profil Pelajar Pancasila dalam aktualisasi kehidupan sehari-hari. <br>
                  2. Cerdas, Kemampuan seluruh warga sekolah untuk memperoleh, memaknai, informasi dan keterampilan. <br>
                  3. Kreatif, Kemampuan seluruh warga sekolah untuk melahirkan sesuatu yang baru berupa gagasan maupun karya nyata yang belum perna ada, dalam bentuk baru maupun kombinasi dengan hal-hal tersedia. <br>
                  4. Wawasan Global, sebagai cara pandang terhadap kondisi dan peradaban zaman yang semakin modern.
                </p>
              </div>
              <!-- end testi-meta -->
            </div>

          </div><!-- end carousel -->
        </div><!-- end col -->
        <div class="col-md-4 col-sm-4 wow fadeInRight">
          <div class="testi-carousel owl-carousel owl-theme">
            <div class="testimonial clearfix">

              <div class="desc bg-warning" style="text-align: left; padding-left:40px;">
                <h5 class="text-white">
                  <div class="text-center" style="font-size: 30px; padding-top:30px; margin-bottom:15px;"> MISI :</div> <br>
                  <hr>
                  1. Merancang pembelajaran yang menarik dan menyenangkan yang mampu memotivasi peserta didik untuk selalu belajar dan menemukan pembelajaran agar menjadi lulusan yang unggul secara akademik maupun non akademik. <br>
                  2. Menciptkan lingkungan sekolah yang kondusif terhadap peserta didik untuk memiliki akhlak mulia melalui kegiatan rutin keagamaamaan melalui interaksi sekolah. <br>
                  3. Mengembangkan kemandirian, bernalar secara kritis dan kreativitas keagamaan berdasarkan minat dan bakat peserta didik. <br>
                  4. Mengembangkan dan memfasilitasi peningkatan prestasi peserta didik sesuai minat dan bakatnya melalui proses pendampingan dan kerjasama dengan orang tua. <br>
                  5. Mengoptimalka pembelajaran yang berdiferensiasi melaui peningkatan kopetensi guru sesuai dengan tuntutan zaman. <br>
                  6. Membangun lingkungan sekolah yang menjunjung moderasi beragama dalam kebhinekaan global, mencintai budaya lokal dan menjunjung nilai gotong royong. Mengembangkan dan memfasilitasi pengingkatan kesadaran peduli lingkungan hidup.
              </div>

              <!-- end testi-meta -->
            </div>

          </div><!-- end carousel -->
        </div><!-- end col -->
        <div class="col-md-4 col-sm-4 wow fadeInLeft">
          <div class="testi-carousel owl-carousel owl-theme">
            <div class="testimonial clearfix">

              <div class="desc bg-success" style="text-align: left; padding-left:40px;">
                <h6 class="text-white">
                  <div class="text-center" style="font-size: 30px; padding-top:30px; margin-bottom:-10px;"> TATA TERTIB :</div> <br>
                </h6>
                <hr>
                <div class="accordion bg-success text-dark" id="accordionExample" style="font-size: 12px; ">
                  <div class="accordion-item ">
                    <h5 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        I. HAL MASUK SEKOLAH
                      </button>
                    </h5>
                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        1. Semua Peseta didik hadir di sekolah paling lambat 15 menit sebelum jam pelajaran dimulai; <br>
                        2. Peserta didik yang terlambat tidak diperkenankan langsung masuk ke kelas, melainkan harus melapor terlebih dahulu kepada satpam dan guru piket; <br>
                        3. Peserta didik dapat diberikan izin karena sangat penting (izin 1 hari melalui guru kelas, izin 2 hari melalui kepala sekolah, izin ke hari ke atas melalui dinas kabupaten); <br>
                        4. Urusan Keluarga dikerjakan di luar sekolah atau waktu libur; <br>
                        5. Tidak diperbolehkan meninggalkan sekolah sebelum pelajaran selesai; <br>
                        6. Tidak hadir karena sakit, perlu ada penyampaiand orangtua secara tertulis atau lisan <br>
                        7. Peserta didik tidak diantar langsung oleh orangtua ke dalam kelas
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h5 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        II. KEWAJIBAN SISWA
                      </button>
                    </h5>
                    <div id="collapseTwo" class="accordion-collapse collapse text-dark" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        1. Semua Peseta didik hadir di sekolah paling lambat 15 menit sebelum jam pelajaran dimulai; <br>
                        2. Peserta didik yang terlambat tidak diperkenankan langsung masuk ke kelas, melainkan harus melapor terlebih dahulu kepada satpam dan guru piket; <br>
                        3. Peserta didik dapat diberikan izin karena sangat penting (izin 1 hari melalui guru kelas, izin 2 hari melalui kepala sekolah, izin ke hari ke atas melalui dinas kabupaten); <br>
                        4. Urusan Keluarga dikerjakan di luar sekolah atau waktu libur; <br>
                        5. Tidak diperbolehkan meninggalkan sekolah sebelum pelajaran selesai; <br>
                        6. Tidak hadir karena sakit, perlu ada penyampaiand orangtua secara tertulis atau lisan <br>
                        7. Peserta didik tidak diantar langsung oleh orangtua ke dalam kelas
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h5 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        III. HAL ....
                      </button>
                    </h5>
                    <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        1. Semua Peseta didik hadir di sekolah paling lambat 15 menit sebelum jam pelajaran dimulai; <br>
                        2. Peserta didik yang terlambat tidak diperkenankan langsung masuk ke kelas, melainkan harus melapor terlebih dahulu kepada satpam dan guru piket; <br>
                        3. Peserta didik dapat diberikan izin karena sangat penting (izin 1 hari melalui guru kelas, izin 2 hari melalui kepala sekolah, izin ke hari ke atas melalui dinas kabupaten); <br>
                        4. Urusan Keluarga dikerjakan di luar sekolah atau waktu libur; <br>
                        5. Tidak diperbolehkan meninggalkan sekolah sebelum pelajaran selesai; <br>
                        6. Tidak hadir karena sakit, perlu ada penyampaiand orangtua secara tertulis atau lisan <br>
                        7. Peserta didik tidak diantar langsung oleh orangtua ke dalam kelas
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h5 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        IV. HAL PAKAIAN DAN LAIN - LAIN
                      </button>
                    </h5>
                    <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        1. Semua Peseta didik hadir di sekolah paling lambat 15 menit sebelum jam pelajaran dimulai; <br>
                        2. Peserta didik yang terlambat tidak diperkenankan langsung masuk ke kelas, melainkan harus melapor terlebih dahulu kepada satpam dan guru piket; <br>
                        3. Peserta didik dapat diberikan izin karena sangat penting (izin 1 hari melalui guru kelas, izin 2 hari melalui kepala sekolah, izin ke hari ke atas melalui dinas kabupaten); <br>
                        4. Urusan Keluarga dikerjakan di luar sekolah atau waktu libur; <br>
                        5. Tidak diperbolehkan meninggalkan sekolah sebelum pelajaran selesai; <br>
                        6. Tidak hadir karena sakit, perlu ada penyampaiand orangtua secara tertulis atau lisan <br>
                        7. Peserta didik tidak diantar langsung oleh orangtua ke dalam kelas
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h5 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsFive" aria-expanded="false" aria-controls="collapsFive">
                        V. HAL - HAL SISWA
                      </button>
                    </h5>
                    <div id="collapsFive" class="accordion-collapse collapse text-dark " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        1. Siswa berhak mengikuti/menerima pelajaran selama tidak melanggar tata tertib sekolah;<br>
                        2. Siswa dapat meminjam buku dari perpustakaan sekolah dengan menaati peraturan perpustakaan yang berlaku; <br>
                        3. Setiap siswa berhak mendapat perlakuan yang sama dengan siswa lain sepanjang tidak melanggar.<br>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h5 class="accordion-header " id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsSix" aria-expanded="false" aria-controls="collapsSix">
                        VI. HAL LES PRIVAT
                      </button>
                    </h5>
                    <div id="collapsSix" class="accordion-collapse collapse text-dark" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        1. Siswa yang terbelakang/belum tuntas dalam satu mata pelajaran dapat mengajukan permintaan les tambahan dengan surat/permohonan dari orangtua siswa kepada guru melalui kepala sekolah;<br>
                        2. Les Privat dari guru kelas/guru mata pelajaran sepengetahuan kepala sekolah;<br>
                        3. Les Privat hanya diberikan sampai siswa yang bersangkutan dapat mengejar pelajaran yang ketinggalan.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h5 class="accordion-header " id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsSeven" aria-expanded="false" aria-controls="collapsSeven">
                        VII. LAINNYA
                      </button>
                    </h5>
                    <div id="collapsSeven" class="accordion-collapse collapse text-dark" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        1. Hal-hal yang belum tercantum dalam peraturan tata tertib ini diatur oleh sekolah;<br>
                        2. Tata tertib ini berlaku sejak diumumakan. <br> <br>

                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h5 class="accordion-header " id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsEight" aria-expanded="false" aria-controls="collapsEight">
                        VIII. CATATAN
                      </button>
                    </h5>
                    <div id="collapsEight" class="accordion-collapse collapse text-dark" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        - Semua orang tua/wali peserta didik dimohon secara sadar dan positif membantu tata tertib sekolah dapat ditaati; <br>
                        - Semua orang tua/wali peserta didik wajib memberi perhatian dan pendamping kepada anak-anaknya untuk mencapai ketentuan belajar setiap anak; <br>
                        - Orang tua/wali peserta didik yang mengantarkan makanan dan lain-lain dititip melalui petugas satpam. <br><br>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="py-3 text-white"><i>
                      <h4>CATATAN :</h4>
                      - Semua orang tua/wali peserta didik dimohon secara sadar dan positif membantu tata tertib sekolah dapat ditaati; <br>
                      - Semua orang tua/wali peserta didik wajib memberi perhatian dan pendamping kepada anak-anaknya untuk mencapai ketentuan belajar setiap anak; <br>
                      - Orang tua/wali peserta didik yang mengantarkan makanan dan lain-lain dititip melalui petugas satpam. <br><br>
                    </i> </div> -->
                </div>
              </div>


              <!-- end testi-meta -->
            </div>

          </div><!-- end carousel -->

        </div><!-- end col -->

      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end section -->

  <div id="overviews" class="section wb">
    <div class="container">

      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="post-media wow fadeIn">
            <img src="smartedu-master/images/about_03.jpg" alt="" class="img-fluid img-rounded">
          </div><!-- end media -->
        </div><!-- end col -->

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="message-box">
            <h2>Sejarah SD Negeri 3 Rantepao</h2>
            <p>SD Negeri 3 Rantepao adalah salah satu satuan pendidikan dengan satuan pendidikan dengan jenjang SD di keluranan Rantepao
              , Kecamatan Rantepao, Kabupaten Toraja Utara, Sulawesi Selatan dalam menjalankan Kegiatannya.
              SD Negeri 3 Rantepao berada di bawah naungan Kementrian Pendidikan dan Kebudayaan. SD Negeri 3 Rantepao
              yang berdiri tahun ... yang berlokasi di jalan .... SD ini menduduki gedung sekolah yang dapat menampung
              933 siswa yang terbagi dalam 6 cabang kelas dimana 1 kelas terbagi sampai 6 cabang kelas dari gedung inilah
              para siswa didik dan dibentuk agar menjadi manusia yang berguna bagi nusa dan bangsa. <br>
              SD Negeri 3 Rantepao termasuk sekolah yang berpotensi untuk berprestasi dengan bukti berbagai macam piala
              kejuaraan maupun piagam penghargaan yang diraih oleh siswa-siswanya diantaranya
              sepak bola, drumband, gerak safari, karate pramuka dan lainnya yang bisa berprestasi di tingkat kabupaten,
              provinsi sampai di tingkat nasional.
            </p>
          </div><!-- end messagebox -->
        </div><!-- end col -->

      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end section -->

  <!-- Guru dan Staff -->
  <div class="section cl">
    <div class="container">
      <div class="row text-left stat-wrap">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
          <p class="stat_count">933</p>
          <h3>Siswa</h3>
        </div><!-- end col -->

        <div class="col-md-4 col-sm-4 col-xs-12">
          <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
          <p class="stat_count">49</p>
          <h3>Guru</h3>
        </div><!-- end col -->

        <div class="col-md-4 col-sm-4 col-xs-12">
          <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="bi bi-person-lines-fill"></i></span>
          <p class="stat_count">8</p>
          <h3>Staff</h3>
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end section -->


  <div class="parallax section dbcolor">
    <div class="container">
      <div class="row logos">

        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp">
          <a href="#"><img src="smartedu-master/images/lainnya/handayani.png" style="width:100px" alt="" class="img-repsonsive"></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp">
          <a href="#"><img src="smartedu-master/images/lainnya/provinsi.png" style="width:100px" alt="" class="img-repsonsive"></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp">
          <a href="#"><img src="smartedu-master/images/lainnya/kabupaten.png" style="width:100px" alt="" class="img-repsonsive"></a>
        </div>
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end section -->

  <section class="section lb page-section">
    <div class="container">
      <div class="section-title row text-center">
        <div class="col-md-8 offset-md-2 wow fadeInUp">
          <p class="lead"><img src="smartedu-master\images\lainnya\denah5.png" style="width: 100%;" alt="" srcset=""></p>
        </div>
      </div><!-- end title -->
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="widget clearfix">
            <div class="widget-title">
              <h3>SDN 3 RANTEPAO</h3>
            </div>
            <p> </p>
            <div class="footer-right">
              <ul class="footer-links-soi">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul><!-- end links -->
            </div>
          </div><!-- end clearfix -->
        </div><!-- end col -->

        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="widget clearfix">
            <div class="widget-title">
              <h3>Information Link</h3>
            </div>
            <ul class="footer-links">
              <li><a href="/">Home</a></li>
              <li><a href="#">Profil Guru</a></li>
              <li><a href="#">Galleri</a></li>
              <li><a href="#">Raport</a></li>
              <li><a href="#">Contact</a></li>
            </ul><!-- end links -->
          </div><!-- end clearfix -->
        </div><!-- end col -->

        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="widget clearfix">
            <div class="widget-title">
              <h3>Contact Details</h3>
            </div>

            <ul class="footer-links">
              <li><a href="mailto:#">sdn.3rantepao@gmail.com</a></li>
              <li><a href="#">www.sdn3rantepao.com</a></li>
              <li>Jln. Budi Utomo No. 10 Rantepao</li>
              <li>(0423) 25046</li>
            </ul><!-- end links -->
          </div><!-- end clearfix -->
        </div><!-- end col -->

      </div><!-- end row -->
    </div><!-- end container -->
  </footer><!-- end footer -->

  <div class="copyrights">
    <div class="container">
      <div class="footer-distributed">
        <div class="footer-center">
          <p class="footer-company-name">All Rights Reserved. &copy; 2023 <a href="#"> SDN 3 Torut</a>
          </p>
        </div>
      </div>
    </div><!-- end container -->
  </div><!-- end copyrights -->


  <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

  <!-- ALL JS FILES -->
  <script src="smartedu-master/js/all.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- ALL PLUGINS -->
  <script src="smartedu-master/js/custom.js"></script>
  <script src="smartedu-master/js/timeline.min.js"></script>
  <script>
    timeline(document.querySelectorAll('.timeline'), {
      forceVerticalMode: 700,
      mode: 'horizontal',
      verticalStartPosition: 'left',
      visibleItems: 4
    });
  </script>

  <script type="text/javascript">
    $(window).on('load', function() {
      $('#login').modal('show');
    });
  </script>

</body>

</html>