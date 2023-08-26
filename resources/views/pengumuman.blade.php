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

<style>
  @media print {
    body {
      -webkit-print-color-adjust: exact;
    }
  }
</style>

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
            <li class="nav-item "><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/guru">Profil Guru</a></li>
            <li class="nav-item"><a class="nav-link" href="/galleri">Galleri</a></li>

            <li class="nav-item"><a class="nav-link" href="/raport" target="_blank">Raport</a></li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Lainnya
                <i class="bi bi-grid-3x3-gap"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="/agenda">Agenda </a>
                <a class="dropdown-item active" href="/pengumuman">Pengumuman </a>
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

  <div class="all-title-box">
    <div class="container text-center">
      <center>
        @if (session()->has('gagal'))
        <div class="alert alert-danger" style="width: 30%;" role="alert">
          {{ session('gagal') }}
        </div>
        @endif
      </center>
      <h1>Pengumuman<span class="m_1">SD Negeri 3 Rantepao</span></h1>
    </div>
  </div>

  <div id="overviews" class="section wb">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 blog-post-single">
          @foreach ($pengumuman as $p)
          <div class="mt-2"></div>
          <div class="text-center" id="{{$loop->iteration}}"> {{$p->judul_pengumuman}}</div>
          <div class="blog-item" id="printableArea">
            <div class="image-blog">
              @if ( $p->foto_pengumuman == null)
              <div class="badge bg-danger text-white">Belum ada foto ditambahkan!</div>
              @else
              <img src="{{asset('storage/'.$p->foto_pengumuman )}}" style="height: 500px;" class="img-fluid" alt="">
              @endif

            </div>
            <div class="post-content">
              <div class="post-date">
                <span class="day">30</span>
                <span class="month">Mei</span>
              </div>
              <div class="meta-info-blog">
                <span><i class="fa fa-calendar"></i> <a href="#">{{$p->tanggal_pengumuman}}</a> </span>
                <span><i class="fa fa-tag"></i> <a href="#">Pengumuman</a> </span>

              </div>
              <div class="blog-title">
                <h2><a href="#" title="">
                    {{$p->judul_pengumuman}}</a></h2>
              </div>
              <div class="blog-desc">

                <p>
                  <?= $p->isi_pengumuman ?>
                </p>
              </div>
            </div>
          </div>

          <div class="blog-author">
            <div class="author-bio">
              <h3 class="author_name"><a href="#">{{$p->penulis_pengumuman}}</a></h3>
              <h5> <a href="#">SDN 3 Torut</a></h5>
              <p class="author_det">
                {{$p->quotes}}
              </p>
            </div>
            <div class="author-desc">
              <img src="smartedu-master/images/author.jpg" alt="Tentang Kami author">
              <ul class="author-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
              </ul>
            </div>
          </div>


          @endforeach
        </div><!-- end col -->

        <div class="col-lg-3 col-12 right-single">
          <div class="widget-categories">
            <h3 class="widget-title">Pengumuman Lainnya</h3>
            <a href="javascript:void(0);" class="btn btn-sm btn-warning" onclick="printPageArea('printableArea')">Download Pengumuman Ini</a>
            <ul>
              @foreach ($pengumuman as $p)
              <li><a href="#{{$loop->iteration}}">{{$p->judul_pengumuman}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
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