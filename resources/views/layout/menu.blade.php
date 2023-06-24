<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <title>
    V-Warehouse | Sistem Gudang Virtual
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="{{asset('assets/js/kitFontAwesome.js')}}" crossorigin="anonymous"></script>
  <link href="{{asset('assets/icon/css/all.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('assets/css/jquery.dataTables.min.css')}}">
  <style>
    .fc-month-view .fc-today {
      background-color: blue;
    }
  </style>
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/css/argon-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">  
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('../assets/img/gudanglow.jpg'); background-position-y: 50%;">
  @if(Auth::check())
    <span class="mask bg-primary opacity-6"></span>
  @endif
    <span class="mask bg-secondary opacity-6"></span>
  </div>
  @if(Auth::check())
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="{{asset('assets/img/logo-ct-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 mx-1 text-lg font-weight-bolder text-uppercase">V-Warehouse</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse h-auto w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/menu">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Menu Utama</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/barang">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-box-2 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pengelola Barang</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/transaksi">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-cart text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Riwayat Transaksi</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Halaman Akun</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/admin">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-users-cog text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Admin</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link " href="../pages/virtual-reality.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Jadwal Gudang</span>
          </a>
        </li> -->
      </ul>
    </div>
  </aside>
  @endif
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">V-Warehouse</a></li>
            @if(Auth::check())
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tampilan Admin</li>
            @elseif(!Auth::check())
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tampilan User</li>
            @endif
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Menu Utama</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item dropdown pe-2 d-flex align-items-center font-weight-bolder">
            @if(Auth::check())
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">{{ Auth::user()->nama_lengkap }}</span>
              </a>
            @else
              <a href="/login" class="nav-link text-white p-0">
                <i class="fa fa-sign-in me-sm-1"></i>
                <span class="d-sm-inline d-none">Login Admin</span>
              </a>
            @endif
              <ul class="dropdown-menu dropdown-menu-end px-2 " aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logout">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                    </a>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
      @if (session('success'))
          <div class="alert alert-success text-white">
              {{ session('success') }}
          </div>
      @elseif (session('danger'))
          <div class="alert alert-danger text-white">
              {{ session('danger') }}
          </div>
      @endif
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row align-items-center">
                <div class="col">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Stok</p>
                    <h6 class="font-weight-bolder">
                    {{ $totalStock }} Boks
                    </h6>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape lg bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-box-2 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row align-items-center">
                <div class="col">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Kategori</p>
                    <h6 class="font-weight-bolder">
                    {{ $kategoriAll }} Kategori
                    </h6>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-info shadow-info text-center rounded-circle">
                    <i class="ni ni-bullet-list-67 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row align-items-center">
                <div class="col">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Admin</p>
                    <h6 class="font-weight-bolder">
                    {{ $allAdmin }} Admin
                    </h6>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-secondary shadow-secondary text-center rounded-circle">
                    <i class="fa fa-user text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @if (Auth::check())
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row align-items-center">
                <div class="col">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Pendapatan</p>
                    <h6 class="font-weight-bolder">
                    Rp.{{number_format($totalTransaksi, 0, ',', '.') }}
                    </h6>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-box-2 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @elseif(!Auth::check())
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row align-items-center">
                <div class="col">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Merek</p>
                    <h6 class="font-weight-bolder">
                    {{ $allMerek }} Merek Terdaftar
                    </h6>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="fa fa-box text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
      </div>
      <div class="row mt-4">
        @if (Auth::check())
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <h4 class="mb-0">Real-time Calendar</h4>
              <!-- @if (session('id'))
                <button type="button" class="btn btn-primary float-end" style="margin-top:-35px;" data-bs-toggle="modal" data-bs-target="#addEventModal"><i class="fa fa-plus mr-1"></i> Tambah Jadwal</button>
              @endif -->
            </div>
            <div class="card-body">
              <div id="calendar"></div>

              <script>
                  $(document).ready(function() {
                      // Inisialisasi kalender
                      $('#calendar').fullCalendar({
                          defaultView: 'month', // Tampilan default: bulan
                          editable: false, // Nonaktifkan fitur edit
                          events: '/api/events', // Endpoint API untuk mengambil data event
                          eventRender: function(event, element) {
                              element.find('.fc-title').append("<br/>" + event.description); // Menampilkan deskripsi event
                          },
                          loading: function(bool) {
                              if (bool) {
                                  // Tampilkan loading spinner saat data sedang dimuat
                                  $('#loading').show();
                              } else {
                                  // Sembunyikan loading spinner saat data sudah dimuat
                                  $('#loading').hide();
                              }
                          }
                      });
                  });
              </script>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card card-carousel overflow-hidden h-100 p-0">
            <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
              <div class="carousel-inner border-radius-lg h-100">
                <div class="carousel-item h-100 active" style="background-image: url('../assets/img/carousel-1.jpeg');
                background-size: cover;">
                <span class="mask bg-primary opacity-3"></span>
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-camera-compact text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Aplikasi Manajemen Gudang</h5>
                    <p>Dengan fitur tambah,edit dan hapus stok barang!!</p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="background-image: url('../assets/img/carousel-2.jpg');
                background-size: cover; background-position-x:50%;">
                <span class="mask bg-primary opacity-3"></span>
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Beragam Fitur!!</h5>
                    <p>Terintegrasi dengan database yang dapat meningkatkan efisiensi waktu!!</p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="background-image: url('../assets/img/carousel-3.jpeg');
                background-size: cover; background-position-x:50%;">
                <span class="mask bg-primary opacity-3"></span>
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-trophy text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Dibuat sebagai Projek Ujian Akhir Semester</h5>
                    <p>"Gatau mau nulis apa, yaudah tulis nama aja deh" ucap Akhmad Ridlo</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        @elseif (!Auth::check())
      <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
              <h5>List Barang Yang Tersedia</h5>
            </div>
            <div class="card-body px-2 pt-0 pb-2">
              <div class="table-responsive mx-2 text-center">
                <table class="table text-center align-items-center mb-0" id="tabel">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Merek Barang</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Kategori</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jumlah Stok</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Harga Per Box</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Lokasi Penempatan</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ">Pengaturan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($barangs as $barang)
                    <tr>
                      <td> 
                        <div class="d-flex px-2 py-1">
                          <h4 class="mb-0 text-sm">{{$loop->iteration}}</h4>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">{{$barang->merek}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">{{$barang->kategori}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$barang->jumlah_stok}}</span>
                      </td>                      
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Rp.{{$barang->harga}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$barang->lokasi}}</span>
                      </td>
                      <td class="align-middle">
                        <a href="{{ route('transaksi.barang', $barang->id) }}" class="text-secondary font-weight-bold text-md" data-toggle="tooltip" data-original-title="Edit barang">
                          <span class="badge badge-sm bg-primary"><i class="ni ni-cart"></i> Beli</span>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        @endif
      </div>
      <!-- Modal Logout -->
      <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabelLogout">Upss!!</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @if(Auth::check())
            <div class="modal-body">
              <p>Apa kamu yakin ingin Logout,{{ Auth::user()->nama_lengkap }} ?</p>
            </div>
            @endif
            <div class="modal-footer">
              <a href="/logout" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Tambah Event -->
      <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalTambah">Tambah Event</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="tambahEvent" action="/events" method="POST" role="form">
                @csrf
                <div class="form-group">
                  <label for="eventTitle">Judul Event</label>
                  <input type="text" class="form-control" id="eventTitle" autocomplete="off" name="judul" required>
                </div>
                <div class="form-group">
                  <label for="eventDate">Tanggal</label>
                  <input type="date" class="form-control" id="eventDate" name="tanggal" required>
                </div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('tambahEvent').submit();"><i class="fa fa-pen"></i> Tambah</a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script> |
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Akhmad Ridlo Rifa'i</a>
                dari UIN Sunan Gunung Djati Bandung
              </div>
            </div>
            <!-- <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div> -->
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
  <script>
 $(document).ready(function() {
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      navLinks: true,
      selectable: true,
      selectHelper: true,
      editable: true,
      eventLimit: true,
      eventClick: function(calEvent, jsEvent, view) {
        alert('Event: ' + calEvent.title);
      }
    });
  });

  </script>
  <script>
    $(document).ready(function(){
      $("#tabel").DataTable();
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/argon-dashboard.min.js?v=2.0.1')]}"></script>

</body>

</html>