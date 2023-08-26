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

  <link rel="stylesheet" href="admin/assets/plugins/icons/feather/feather.css">

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
            <a href="index.html" class="logo">
              <img src="smartedu-master\images\lainnya\handayani.png" width="40" height="40" alt="">
              <span class="text-uppercase">SDN 3 TORUT</span>
            </a>
          </div>
          <ul class="sidebar-ul">
            <li class="menu-title">Menu</li>
            <li class="">
              <a href="/halamanAdmin"><img src="admin/assets/img/sidebar/icon-1.png" alt="icon"><span>Dashboard</span></a>
            </li class="">
            <li class=" active">
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
                      Daftar Guru (
                      @if ($totalGuru == 0)
                      <div class="badge bg-danger text-white">
                        {{ ' Total : '. $totalGuru. ' orang'}}
                      </div>
                      @else ()
                      <div class="badge bg-info text-white">
                        {{ ' Total : '. $totalGuru. ' orang'}}
                      </div>
                      @endif
                      )
                    </div>
                  </div>
                  <div class="col-sm-6 text-sm-right">
                    <div class=" mt-sm-0 mt-2">
                      <button style="background-color: blue; color:white" data-bs-toggle="modal" data-bs-target="#tambahModalGuru" class="btn mr-2"><i class="fe fe-file-plus" data-bs-toggle="tooltip" title="fe fe-file-plus"></i><span class="ml-2">Tambah Data</span></button>

                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table custom-table">
                    <thead class="thead-light">
                      <tr>
                        <th>Nama Guru </th>
                        <th>NIP</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th class="text-right">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($guru as $g)

                      <tr>
                        <td>
                          <h2 data-bs-toggle="modal" data-bs-target="#detailModal{{ $g->id }}"><a href="#!"><img src="{{asset('storage/'.$g->foto )}}" style="border-radius: 50%; width:50px;height:50px" alt=""></a>&nbsp;
                            &nbsp;<a href="#!"> {{ $g->nama_guru }} <span></span></a></h2>
                        </td>
                        <td> {{ $g->nip_guru }}</td>
                        <td>
                          {{ $g->tempat_lahir }}, {{ $g->tanggal_lahir_guru }}
                        </td>
                        <td>{{ $g->alamat }}</td>
                        <td class="text-right">
                          <a href="#!" class="btn btn-secondary btn-sm mb-1" data-bs-toggle="modal" data-bs-target="#detailModal{{ $g->id }}">
                            <i class="fa fa-address-card" data-bs-toggle="tooltip" title="lihat detail"></i>
                          </a>
                          <a href="#!" class="btn btn-warning btn-sm mb-1" data-bs-toggle="modal" data-bs-target="#editModal{{ $g->id }}">
                            <i class="far fa-edit" data-bs-toggle="tooltip" title="Edit"></i>
                          </a>
                          <a href="/hapusGuru/{{$g->id}}" onclick="return confirm('Apakah anda yakin data ini akan dihapus?');" type="submit" class="btn btn-danger btn-sm mb-1">
                            <i class="far fa-trash-alt" data-bs-toggle="tooltip" title="Hapus"></i>
                          </a>
                        </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>

                  <!-- Modal Tambah-->
                  <div class="modal fade" id="tambahModalGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="/tambahGuru" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Nama Guru</label>
                                <input class="form-control" placeholder="Nama" type="text" name="nama_guru" id="nama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">NIP</label>
                                <input class="form-control" placeholder="NIP" type="text" name="nip_guru">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Tempat Lahir</label>
                                <input class="form-control" placeholder="Tempat Lahir" type="text" name="tempat_lahir">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tanggal_lahir_guru">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Jabatan</label>
                                <input class="form-control" placeholder="Jabatan" type="text" name="jabatan">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Jenis Kelamin</label>
                                <input class="form-control" placeholder="Jenis Kelamin" type="text" name="jenis_kelamin">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Agama</label>
                                <input class="form-control" placeholder="Agama" type="text" name="agama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Nomor HP</label>
                                <input class="form-control" placeholder="Nomor Hp" type="text" name="nomor_hp">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Email Guru</label>
                                <input class="form-control" placeholder="Email" type="text" name="email">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Kelas yang Diajar</label>
                                <input class="form-control" placeholder="Kelas yang diajar" type="text" name="kelas_yang_diajar">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Alamat</label>
                                <input class="form-control" placeholder="Alamat" type="text" name="alamat">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Foto Guru (Format Gambar .img/png/jpg; Ukuran max:2MB)</label>
                                <input class="form-control" placeholder="Foto" type="File" name="foto" accept="image/*">
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

                  <!-- Edit Modal-->
                  @foreach ($guru as $g)
                  <div class="modal fade" id="editModal{{ $g->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Data Guru</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="/editGuru/{{ $g->id }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <input type="hidden" name="gambarLama" value="{{ $g->foto }}">
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Nama Guru</label>
                                <input class="form-control" placeholder="Nama" type="text" name="nama_guru" value="{{ $g->nama_guru }}" id="nama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">NIP</label>
                                <input class="form-control" placeholder="NIP" type="text" name="nip_guru" value="{{ $g->nip_guru }}" id="nama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Tempat Lahir</label>
                                <input class="form-control" placeholder="Tempat Lahir" type="text" name="tempat_lahir" value="{{ $g->tempat_lahir }}" id="nama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tanggal_lahir_guru" value="{{ $g->tanggal_lahir_guru }}" id="nama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Jabatan</label>
                                <input class="form-control" placeholder="Jabatan" type="text" name="jabatan" value="{{ $g->jabatan }}" id="nama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Jenis Kelamin</label>
                                <input class="form-control" placeholder="Jenis Kelamin" type="text" name="jenis_kelamin" value="{{ $g->jenis_kelamin }}" id="nama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Agama</label>
                                <input class="form-control" placeholder="Agama" type="text" name="agama" value="{{ $g->agama }}" id="nama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Nomor HP</label>
                                <input class="form-control" placeholder="Nomor Hp" type="text" name="nomor_hp" value="{{ $g->nomor_hp }}" id="nama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Email Guru</label>
                                <input class="form-control" placeholder="Email" type="text" name="email" value="{{ $g->email }}" id="nama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Kelas yang Diajar</label>
                                <input class="form-control" placeholder="Kelas yang diajar" type="text" name="kelas_yang_diajar" value="{{ $g->kelas_yang_diajar }}" id="nama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Alamat</label>
                                <input class="form-control" placeholder="Alamat" type="text" name="alamat" value="{{ $g->alamat }}" id="nama">
                                <small class="text-danger"> <i>*Tidak boleh kosong</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Foto Guru (Format Gambar .img/png/jpg; Ukuran max:2MB)</label>
                                @if ( $g->foto == null)
                                <div class="badge bg-danger text-white">Belum ada Foto ditambahkan</div>
                                <input class="form-control" placeholder="Foto" type="File" name="foto" accept="image/*">>
                                @else
                                <br>
                                <img src="{{asset('storage/'.$g->foto )}}" alt="" class="thumbnail" style="width:30%">
                                <br>
                                <div class="badge bg-warning text-white">Jika anda ingin mengganti foto, Klik tombol di bawah!</div>
                                <input class="form-control" type="File" name="foto" accept="image/*">
                                @endif
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

                  <!-- Detail Modal-->
                  @foreach ($guru as $g)
                  <div class="modal fade" id="detailModal{{ $g->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Data Guru</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="/editGuru/{{ $g->id }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Foto </label>
                                @if ( $g->foto == null)
                                <div class="badge bg-danger text-white">Belum ada Foto ditambahkan</div>
                                @else
                                <br>
                                <img src="{{asset('storage/'.$g->foto )}}" alt="" class="thumbnail" style="width:30%">
                                <br>
                                @endif
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Nama Guru</label>
                                <input disabled class="form-control" placeholder="Nama" type="text" name="nama_guru" value="{{ $g->nama_guru }}" id="nama">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">NIP</label>
                                <input disabled class="form-control" placeholder="NIP" type="text" name="nip_guru" value="{{ $g->nip_guru }}" id="nama">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Tempat Lahir</label>
                                <input disabled class="form-control" placeholder="Tempat Lahir" type="text" name="tempat_lahir" value="{{ $g->tempat_lahir }}" id="nama">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Tanggal Lahir</label>
                                <input disabled class="form-control" type="date" name="tanggal_lahir_guru" value="{{ $g->tanggal_lahir_guru }}" id="nama">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Jabatan</label>
                                <input disabled class="form-control" placeholder="Jabatan" type="text" name="jabatan" value="{{ $g->jabatan }}" id="nama">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Jenis Kelamin</label>
                                <input disabled class="form-control" placeholder="Jenis Kelamin" type="text" name="jenis_kelamin" value="{{ $g->jenis_kelamin }}" id="nama">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Agama</label>
                                <input disabled class="form-control" placeholder="Agama" type="text" name="agama" value="{{ $g->agama }}" id="nama">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Nomor HP</label>
                                <input disabled class="form-control" placeholder="Nomor Hp" type="text" name="nomor_hp" value="{{ $g->nomor_hp }}" id="nama">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Email Guru</label>
                                <input disabled class="form-control" placeholder="Email" type="text" name="email" value="{{ $g->email }}" id="nama">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Kelas yang Diajar</label>
                                <input disabled class="form-control" placeholder="Kelas yang diajar" type="text" name="kelas_yang_diajar" value="{{ $g->kelas_yang_diajar }}" id="nama">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Alamat</label>
                                <input disabled class="form-control" placeholder="Alamat" type="text" name="alamat" value="{{ $g->alamat }}" id="nama">
                              </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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