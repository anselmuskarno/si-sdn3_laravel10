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
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Masuk Sebagai Admin</h4>
        </div>
        <div class="modal-body customer-box">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="Login">
              <form class="form-horizontal" action="/loginAdmin" method="post">
                @csrf
                <!-- <input type="hidden" name="id" value="1"> -->
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" id="username" name="username" placeholder="Username" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" id="password" name="password" placeholder="Password" type="password">
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
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/guru">Profil Guru</a></li>
            <li class="nav-item active"><a class="nav-link" href="/galleri">Galleri</a></li>

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

  <div class="all-title-box wow fadeInLeft">
    <div class="container text-center wow fadeInUp">
      <center>
        @if (session()->has('gagal'))
        <div class="alert alert-danger" style="width: 30%;" role="alert">
          {{ session('gagal') }}
        </div>
        @endif
      </center>
      <h1>Galleri<span class="m_1">SD Negeri 3 Toraja Utara</span></h1>
    </div>
  </div>

  <div id="teachers" class="section wb">
    <div class="container  ">
      <div class="row ">
        <div class="container text-center py-4">
          <h2 class="bg-warning text-white">
            Kegiatan Sekolah
          </h2>
        </div>
        <div class="col-sm-3">
          <style>
            .coba:hover {
              transform: scale(1.1);
              border: 2px solid black;
              /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
            }
          </style>
          <div class="card coba" data-toggle="modal" data-target="#pramukaModal">

            <img src="smartedu-master/images/pramuka/pramuka.jpg" style="width: 100%; height:150px" class="card-img-top " alt="...">
            <div class="card-body">
              <span class="badge bg-warning text-white" style="font-size: 20px;">Pramuka</span>
              <p class="card-text">Kegiatan ekskul Kepramukaan </p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card coba" data-toggle="modal" data-target="#senamModal">
            <img src="smartedu-master/images/senam/senam.jpg" style="width: 100%; height:150px" class="card-img-top" alt="...">
            <div class="card-body">
              <span class="badge bg-secondary text-white" style="font-size: 20px;">Senam</span>
              <p class="card-text">Kegiatan Senam.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card coba" data-toggle="modal" data-target="#pembelajaranModal">
            <img src="smartedu-master/images/pembelajaran/pembelajaran.jpg" style="width: 100%; height:150px" class="card-img-top" alt="...">
            <div class="card-body">
              <span class="badge bg-success text-white" style="font-size: 20px;">Pembelajaran</span>
              <p class="card-text">Pembelajaran Siswa.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card coba" data-toggle="modal" data-target="#guruModal">
            <img src="smartedu-master/images/guru/guru.jpg" style="width: 100%; height:150px" class="card-img-top" alt="...">
            <div class="card-body">
              <span class="badge bg-danger text-white" style="font-size: 20px;">Guru</span>
              <p class="card-text">Kegiatan Guru.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card coba" data-toggle="modal" data-target="#piagamModal">
            <img src="smartedu-master/images/piagam/piagam.jpg" style="width: 100%; height:150px" class="card-img-top" alt="...">
            <div class="card-body">
              <span class="badge bg-primary text-white" style="font-size: 20px;">Piagam</span>
              <p class="card-text">Piagam Penghargaan.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card coba" data-toggle="modal" data-target="#pialaModal">
            <img src="smartedu-master/images/piala/piala.jpg" style="width: 100%; height:150px" class="card-img-top" alt="...">
            <div class="card-body">
              <span class="badge bg-info text-white" style="font-size: 20px;">Piala</span>
              <p class="card-text">Lemari Piala.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card coba" data-toggle="modal" data-target="#sertifikatModal">
            <img src="smartedu-master/images/sertifikat/sertifikat.jpg" style="width: 100%; height:150px" class="card-img-top" alt="...">
            <div class="card-body">
              <span class="badge bg-light text-dark" style="font-size: 20px;">Sertifikat</span>
              <p class="card-text">Sertifikat Penghargaan</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card coba" data-toggle="modal" data-target="#upacaraModal">
            <img src="smartedu-master/images/upacara/upacara2.jpg" style="width: 100%; height:150px" class="card-img-top" alt="...">
            <div class="card-body">
              <span class="badge bg-dark text-white" style="font-size: 20px;">Upacara</span>
              <p class="card-text">Kegiatan Upacara</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card coba" data-toggle="modal" data-target="#lainnyaModal">
            <img src="smartedu-master/images/lainnya/orangtua.jpg" style="width: 100%; height:150px" class="card-img-top" alt="...">
            <div class="card-body">
              <span class="badge bg-warning text-white" style="font-size: 20px;">Lainnya</span>
              <p class="card-text">Foto Lainnya</p>
            </div>
          </div>
        </div>
      </div>
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


  <!-- Senam Pramuka -->
  <div class="modal fade" id="senamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Galleri Foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div id="carouselExampleControls2" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls2" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls2" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls2" data-slide-to="2"></li>
              <li data-target="#carouselExampleControls2" data-slide-to="3"></li>
              <li data-target="#carouselExampleControls22" data-slide-to="4"></li>
              <li data-target="#carouselExampleControls2" data-slide-to="5"></li>
              <li data-target="#carouselExampleControls2" data-slide-to="6"></li>
              <li data-target="#carouselExampleControls2" data-slide-to="7"></li>
              <li data-target="#carouselExampleControls22" data-slide-to="8"></li>
              <li data-target="#carouselExampleControls2" data-slide-to="9"></li>
              <li data-target="#carouselExampleControls2" data-slide-to="10"></li>
              <li data-target="#carouselExampleControls2" data-slide-to="11"></li>
              <li data-target="#carouselExampleControls22" data-slide-to="12"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam2.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">
                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam3.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam4.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam5.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam6.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam7.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam8.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam9.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam10.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam11.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam12.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam13.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/senam/senam5.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <!-- Left Control -->
              <a class="new-effect carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <!-- Right Control -->
              <a class="new-effect carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Pramuka -->
  <div class="modal fade" id="pramukaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Galleri Foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
              <li data-target="#carouselExampleControls" data-slide-to="3"></li>
              <li data-target="#carouselExampleControls" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pramuka/pramuka.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pramuka/pramuka2.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">
                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pramuka/pramuka3.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pramuka/pramuka4.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pramuka/pramuka5.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <!-- Left Control -->
              <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <!-- Right Control -->
              <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Pembelajaran -->
  <div class="modal fade" id="pembelajaranModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Galleri Foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div id="carouselExampleControls3" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls3" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls3" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls3" data-slide-to="2"></li>
              <li data-target="#carouselExampleControls3" data-slide-to="3"></li>
              <li data-target="#carouselExampleControls3" data-slide-to="4"></li>
              <li data-target="#carouselExampleControls3" data-slide-to="5"></li>
              <li data-target="#carouselExampleControls3" data-slide-to="6"></li>
              <li data-target="#carouselExampleControls3" data-slide-to="7"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pembelajaran/pembelajaran.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pembelajaran/pembelajaran2.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">
                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pembelajaran/pembelajaran3.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pembelajaran/pembelajaran4.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pembelajaran/pembelajaran5.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pembelajaran/pembelajaran6.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pembelajaran/pembelajaran7.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/pembelajaran/pembelajaran8.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <!-- Left Control -->
              <a class="new-effect carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <!-- Right Control -->
              <a class="new-effect carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Guru -->
  <div class="modal fade" id="guruModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Galleri Foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div id="carouselExampleControls4" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls4" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls4" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls4" data-slide-to="2"></li>
              <li data-target="#carouselExampleControls4" data-slide-to="3"></li>
              <li data-target="#carouselExampleControls4" data-slide-to="4"></li>
              <li data-target="#carouselExampleControls4" data-slide-to="5"></li>
              <li data-target="#carouselExampleControls4" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/guru/guru.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/guru/guru2.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">
                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/guru/guru3.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/guru/guru4.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/guru/guru5.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/guru/guru6.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/guru/guru7.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <!-- Left Control -->
              <a class="new-effect carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <!-- Right Control -->
              <a class="new-effect carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Piagam -->
  <div class="modal fade" id="piagamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Galleri Foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div id="carouselExampleControls5" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls5" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls5" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls5" data-slide-to="2"></li>
              <li data-target="#carouselExampleControls5" data-slide-to="3"></li>
              <li data-target="#carouselExampleControls5" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/piagam/piagam.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/piagam/piagam2.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">
                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/piagam/piagam3.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/piagam/piagam4.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/piagam/piagam5.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>

              <!-- Left Control -->
              <a class="new-effect carousel-control-prev" href="#carouselExampleControls5" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <!-- Right Control -->
              <a class="new-effect carousel-control-next" href="#carouselExampleControls5" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Piala -->
  <div class="modal fade" id="pialaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Galleri Foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div id="carouselExampleControls6" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls6" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls6" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls6" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/piala/piala.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/piala/piala2.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">
                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/piala/piala3.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>

              <!-- Left Control -->
              <a class="new-effect carousel-control-prev" href="#carouselExampleControls6" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <!-- Right Control -->
              <a class="new-effect carousel-control-next" href="#carouselExampleControls6" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Sertifikat -->
  <div class="modal fade" id="sertifikatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Galleri Foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div id="carouselExampleControls7" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls7" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/sertifikat/sertifikat.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>

              <!-- Left Control -->
              <a class="new-effect carousel-control-prev" href="#carouselExampleControls7" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <!-- Right Control -->
              <a class="new-effect carousel-control-next" href="#carouselExampleControls7" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Upacara -->
  <div class="modal fade" id="upacaraModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Galleri Foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div id="carouselExampleControls9" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls9" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls9" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls9" data-slide-to="2"></li>
              <li data-target="#carouselExampleControls9" data-slide-to="3"></li>
              <li data-target="#carouselExampleControls9" data-slide-to="4"></li>
              <li data-target="#carouselExampleControls9" data-slide-to="5"></li>
              <li data-target="#carouselExampleControls9" data-slide-to="6"></li>
              <li data-target="#carouselExampleControls9" data-slide-to="7"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/upacara/upacara.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/upacara/upacara2.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">
                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/upacara/upacara3.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/upacara/upacara4.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/upacara/upacara5.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/upacara/upacara6.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/upacara/upacara7.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/upacara/upacara8.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <!-- Left Control -->
              <a class="new-effect carousel-control-prev" href="#carouselExampleControls9" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <!-- Right Control -->
              <a class="new-effect carousel-control-next" href="#carouselExampleControls9" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal lainnya -->
  <div class="modal fade" id="lainnyaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Galleri Foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div id="carouselExampleControls10" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls10" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls10" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls10" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/lainnya/kegiatan.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/lainnya/orangtua.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">
                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>
              <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('smartedu-master/images/lainnya/rapat.jpg');">
                  <div class="dtab">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-right" style="height: 400px;">
                          <div class="big-tagline">

                          </div>
                        </div>
                      </div><!-- end row -->
                    </div><!-- end container -->
                  </div>
                </div><!-- end section -->
              </div>

              <!-- Left Control -->
              <a class="new-effect carousel-control-prev" href="#carouselExampleControls10" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <!-- Right Control -->
              <a class="new-effect carousel-control-next" href="#carouselExampleControls10" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

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
          <p class="footer-company-name">All Rights Reserved. &copy; 2023 <a href="/">SDN 3 Torut</a> </p>
        </div>
      </div>
    </div><!-- end container -->
  </div><!-- end copyrights -->

  <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

  <!-- ALL JS FILES -->
  <script src="smartedu-master/js/all.js"></script>
  <!-- ALL PLUGINS -->
  <script src="smartedu-master/js/custom.js"></script>

</body>

</html>