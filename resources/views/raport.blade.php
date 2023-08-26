<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Site Icons -->
  <link rel="shortcut icon" href="smartedu-master/images/lainnya/handayani.png" type="image/x-icon" />
  <link rel="apple-touch-icon" href="smartedu-master/images/lainnya/handayani.png">

  <title>Cetak Raport</title>

  <!-- Bootstrap core CSS -->
  <link href="login/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <form action="/loginSiswa" method="post" class="form-signin">
    @if (session()->has('gagal'))
    <div class="alert alert-danger" role="alert">
      {{ session('gagal') }}
    </div>
    @endif
    @if (session()->has('notFound'))
    <div class="alert alert-danger" role="alert">
      {{ session('notFound') }}
    </div>
    @endif
    @csrf
    <img class="mb-4" src="smartedu-master\images\lainnya\handayani.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Halaman Cetak Raport</h1>
    <p>Silahkan masukkan NIS dan Password untuk mencetak raport</p>
    <label for="inputEmail" class="sr-only">NIS</label>
    <input type="text" id="nis" name="username" class="form-control" placeholder="NIS" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
    <!-- <span style="margin-top:-100px" class="mb-3 text-danger small"> <i> *Hubungi admin untuk mendapatkan password</i></span> -->
    <div class="checkbox mb-3">
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Cetak Raport</button>

    <a href="/" class="btn btn-lg btn-warning btn-block">Kembali ke Halaman Utama</a>
    <p class="mt-5 mb-3 text-muted">All Rights Reserved. &copy; 2023 <a href="/"> SDN 3 Torut</a>
    </p>
  </form>
</body>

</html>