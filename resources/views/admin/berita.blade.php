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
  <link rel="stylesheet" type="text/css" href="admin/assets/css/trix.css">
  <script type="text/javascript" src="admin/assets/js/trix.umd.min.js"></script>

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
            <li class="active">
              <a href="/beritaAdmin"><img src="admin/assets/img/sidebar/icon-6.png" alt="icon">
                <span>Berita/Blog</span></a>
            </li>
            <li class="">
              <a href="/pengumumanAdmin"><img src="admin/assets/img/sidebar/icon-9.png" alt="icon"><span>
                  Pengumuman</span></a>
            </li>
            <li>
              <a href="/agendaAdmin"><img src="admin/assets/img/sidebar/icon-9.png" alt="icon"><span>
                  Agenda</span></a>
            </li>
            <li class="">
              <a href="/kelasAdmin"><img src="admin/assets/img/sidebar/icon-9.png" alt="icon"><span>
                  Kelas</span></a>
            </li>
            <li class="">
              <a href="/adminWaliKelas"><img src="admin/assets/img/sidebar/icon-9.png" alt="icon"><span>
                  Wali Kelas/Guru</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>


    <div class="page-wrapper">
      <div class="content container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col-sm-6">
                    <div class="page-title">
                      Daftar Berita (
                      @if ($totalBerita == 0)
                      <div class="badge bg-danger text-white">
                        {{ ' Total : '. $totalBerita}}
                      </div>
                      @else ()
                      <div class="badge bg-info text-white">
                        {{ ' Total : '. $totalBerita}}
                      </div>
                      @endif
                      )
                    </div>
                  </div>
                  <div class="col-sm-6 text-sm-right">
                    <div class=" mt-sm-0 mt-2">
                      <button style="background-color: blue; color:white" data-bs-toggle="modal" data-bs-target="#tambahModal" class="btn mr-2"><i class="fe fe-file-plus"></i><span class="ml-2">Tambah Data</span></button>

                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table custom-table">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-right">Action</th>
                        <th style="width: 200px;">Judul Berita </th>
                        <th>Penulis Berita</th>
                        <th>Tanggal Berita</th>
                        <th>Foto Berita</th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($berita as $b)
                      <tr>
                        <td class="text-right">
                          <a href="#!" class="btn btn-primary btn-sm mb-1" data-bs-toggle="modal" data-bs-target="#editModal{{$b->id}}">
                            <i class="far fa-edit" data-bs-toggle="tooltip" title="Edit"></i>
                          </a>
                          <a href="/hapusBerita/{{$b->id}}" onclick="return confirm('Apakah anda yakin data ini akan dihapus?');" type="submit" class="btn btn-danger btn-sm mb-1">
                            <i class="far fa-trash-alt" data-bs-toggle="tooltip" title="Hapus"></i>
                          </a>
                        </td>
                        <td>
                          <h2> {{ $b->judul_berita }} </h2>
                        </td>
                        <td> {{ $b->penulis_berita }}</td>
                        <td>
                          {{ $b->tanggal_berita }}
                        </td>
                        <td>
                          @if ( $b->foto_berita == null)
                          <div class="badge bg-danger text-white">Belum ada foto ditambahkan!</div>
                          @else
                          <img src="{{asset('storage/'.$b->foto_berita )}}" style=" width:50px;height:50px" alt="">
                          @endif
                        </td>

                      </tr>

                      @endforeach
                    </tbody>
                  </table>

                  <!-- Modal Tambah -->
                  <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Berita</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="/tambahBerita" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                              <div class="col-sm-12">
                                <input class="form-control" placeholder="Judul Berita" type="text" name="judul_berita">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <input class="form-control" name="penulis_berita" id="penulis_berita" placeholder="Penulis Berita" type="text">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Tanggal Berita</label>
                                <input class="form-control" name="tanggal_berita" id="tanggal_berita" type="date">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="isi_berita">Isi Berita</label>
                                <input id="isi_berita" type="hidden" name="isi_berita">
                                <trix-editor input="isi_berita"></trix-editor>
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Foto Berita</label>
                                <input class="form-control" type="File" name="foto_berita" accept="image/*">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- Modal Edit -->
                  @foreach ($berita as $b)
                  <div class="modal fade" id="editModal{{$b->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Data Berita</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="/editBerita/{{$b->id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <input type="hidden" name="foto_berita_lama" value="{{$b->foto_berita}}">
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Judul Berita</label>
                                <input class="form-control" type="text" name="judul_berita" value="{{$b->judul_berita}}">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Penulis Berita</label>
                                <input class="form-control" name="penulis_berita" id="penulis_berita" value="{{$b->penulis_berita}}" type="text">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Tanggal Berita</label>
                                <input class="form-control" value="{{$b->tanggal_berita}}" name="tanggal_berita" id="tanggal_berita" type="date">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="isi_berita{{$b->id}}">Isi Berita</label>
                                <input id="isi_berita{{$b->id}}" type="hidden" name="isi_berita">
                                <trix-editor input="isi_berita{{$b->id}}"><?= $b->isi_berita ?></trix-editor>
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Foto Berita</label> <br>
                                @if ( $b->foto_berita == null)
                                <div class="badge bg-danger text-white">Belum ada foto ditambahkan!</div>
                                @else
                                <img src="{{asset('storage/'.$b->foto_berita )}}" style=" width:80px;height:80px" alt=""><br>
                                <div class="badge bg-info text-white">Jika Anda ingin merubah foto Berita, klik tombol di bawah ini!</div>
                                @endif
                                <input class="form-control" type="File" name="foto_berita" accept="image/*">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Edit Data</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>