<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
  <title>Cetak Daftar Siswa</title>
</head>

<body>
  <div class="container mb-5 text-center">
    <div class="row">
      <div class="col-sm-4 col-4">
        <img style="width: 30%; height:50%" src="smartedu-master\images\lainnya\handayani.png" alt="">
      </div>
      <div class="col-sm-4 col-4">
        <h3>Daftar Siswa</h3>
        <h6>SD Negeri 3 Toraja Utara</h6>
      </div>
      <div class="col-sm-4 col-4">
        <img style="width: 30%; height:50%" src="smartedu-master\images\lainnya\kabupaten.png" alt="">
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  <div class="container">
    <div class="card text-center">
      <table class="table">
        <thead>
          <tr style="font-weight:bold;">
            <th scope="col">NOMOR</th>
            <th scope="col">NAMA SISWA</th>
            <th scope="col">USERNAME</th>
          </tr>
        </thead>
        <tbody class="text-left" style="text-align: left;">
          @foreach ($siswa as $s)
          <?php if ($s->jabatan == "1") { ?>
            <tr>
              <th scope="row"> {{ $loop->iteration }} </th>
              <td> {{ $s->nama }} </td>
              <td> {{ $s->username }} </td>
            </tr>
          <?php } else { ?>
          <?php } ?>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>

  <script>
    window.print();
  </script>

</body>

</html>