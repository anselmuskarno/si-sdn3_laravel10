<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>
    Cetak Raport
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <link rel="shortcut icon" type="image/x-icon" href="../../../admin/assets/img/handayani.png">

  <link href="admin/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

  <link rel="stylesheet" href="../../../admin/assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="../../../admin/assets/plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../../admin/assets/plugins/fontawesome/css/fontawesome.min.css">

  <link rel="stylesheet" href="../../../admin/assets/plugins/icons/feather/feather.css">

  <link rel="stylesheet" href="../../../admin/assets/css/fullcalendar.min.css">

  <link rel="stylesheet" href="../../../admin/assets/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="../../../admin/assets/plugins/morris/morris.css">

  <link rel="stylesheet" href="../../../admin/assets/css/style.css">
  <style>
    @media print {
      body {
        -webkit-print-color-adjust: exact;
      }
    }
  </style>
  <!--[if lt IE 9]>
		<script src="../../../admin/assets/js/html5shiv.min.js"></script>
		<script src="../../../admin/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
  <form action="/ubahSemester" method="post">
    @csrf
    <button type="submit" onclick="return alert('ok')"> </button>
    <div class="mt-3"></div>
    <div class=" coba m-auto" style="width: 500px; ">
      <select id="pilihkelassemester" class="form-control" onclick="display();">
        <option value="kosong">Pilih Kelas dan Semester</option>
      </select>
    </div>
  </form>

  <div class="container mt-3">
    <div class="container-fluid text-center">
      <div class="alert alert-danger">Hasil Tidak Ditemukan! Halaman ini akan dialihkan ke halaman sebelumnya!</div>
    </div>
  </div>
  <div class="text-center">
    <img src="../../../student.jpg" style="width: 400px;" alt="gambar">
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    var url = "http://localhost:8000/loginSiswa"; // url tujuan
    var count = 5; // dalam detik
    function countDown() {
      if (count > 0) {
        count--;
        var waktu = count + 1;
        setTimeout("countDown()", 1000);
      } else {
        window.history.back();
      }
    }
    countDown();
  </script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <script src="bootstrap.bundle.min.js"></script>
  <script src="../../../admin/assets/js/jquery-3.6.0.min.js"></script>

  <script src="../../../admin/assets/js/bootstrap.bundle.min.js"></script>

  <script src="../../../admin/assets/js/jquery.slimscroll.js"></script>

  <script src="../../../admin/assets/js/select2.min.js"></script>
  <script src="../../../admin/assets/js/moment.min.js"></script>

  <script src="../../../admin/assets/js/fullcalendar.min.js"></script>
  <script src="../../../admin/assets/js/jquery.fullcalendar.js"></script>

  <script src="../../../admin/assets/plugins/morris/morris.min.js"></script>
  <script src="../../../admin/assets/plugins/raphael/raphael-min.js"></script>
  <script src="../../../admin/assets/js/apexcharts.js"></script>
  <script src="../../../admin/assets/js/chart-data.js"></script>

  <script src="../../../admin/assets/js/app.js"></script>
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