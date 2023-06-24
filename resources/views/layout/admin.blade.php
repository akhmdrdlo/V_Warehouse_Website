
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
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('assets/icon/css/all.css')}}" rel="stylesheet" />
  <script src="{{asset('assets/js/kitFontAwesome.js')}}" crossorigin="anonymous"></script>
  <link href="{{asset('assets/icon/css/all.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('assets/css/jquery.dataTables.min.css')}}">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/css/argon-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  @if(Auth::check())
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('../assets/img/gudanglow.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="{{asset('assets/img/logo-ct-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 mx-1 text-lg font-weight-bolder text-uppercase">V-Warehouse</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse h-auto  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="/menu">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Menu Utama</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/barang">
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
          <a class="nav-link active" href="/admin">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-users-cog text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Admin</span>
          </a>
        </li>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">V-Warehouse</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tampilan</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Pengelola Admin</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
            @if(Auth::check())
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">{{ Auth::user()->nama_lengkap }}</span>
              </a>
            @else
              <a href="/login" class="nav-link text-white p-0">
                <i class="fa fa-sign-in me-sm-1"></i>
                <span class="d-sm-inline d-none">Login</span>
              </a>
            @endif
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 " aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav> 
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
        @if (session('success'))
            <div class="alert alert-success text-white">
                {{ session('success') }}
            </div>
        @elseif (session('warning'))
            <div class="alert alert-warning text-white">
                {{ session('warning') }}
            </div>
        @elseif (session('primary'))
            <div class="alert alert-primary text-white">
                {{ session('primary') }}
            </div>
        @elseif (session('danger'))
            <div class="alert alert-danger text-white">
                {{ session('danger') }}
            </div>
        @endif
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h5>List Data Admin</h5>
              @if (Auth::user()->status=='SuperAdmin')
                <a href="#" data-bs-toggle="modal" data-bs-target="#tambahAdminModal" class="btn btn-success float-end" style="margin-top:-35px;">
                  <i class="fa fa-user-plus mr-1"></i> Tambah Admin
                </a>
              @endif
              <a href="{{ route('admin.edit', Auth::user()->id) }}" class="btn btn-warning  float-end mx-2" style="margin-top:-35px;" data-toggle="tooltip" data-original-title="Edit Admin">
                <i class="fa fa-pen"></i> Edit Profil Anda
              </a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive mx-4 text-center">
                <table class="table text-center align-items-center mb-0" id="tabel">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Username Admin</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Nama Lengkap</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Tanggal Daftar</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                      @if (Auth::user()->status=='SuperAdmin')
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ">Pengaturan</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($admin as $orang)
                    <tr>
                      <td> 
                        <div class="d-flex px-2 py-1">
                          <h4 class="mb-0 text-xs">{{$loop->iteration}}</h4>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs  font-weight-bold mb-0">{{$orang->uname}}</p>
                      </td>
                      <td class="align-middle text-center text-xs">
                        <p class="text-xs text-uppercase font-weight-bold mb-0">{{$orang->nama_lengkap}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$orang->created_at}}</span>
                      </td>                      
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$orang->status}}</span>
                      </td>
                      @if (Auth::user()->status=='SuperAdmin')
                      <td>
                        <a href="{{ route('admin.edit', $orang->id) }}" class="text-secondary font-weight-bold text-md" data-toggle="tooltip" data-original-title="Edit Admin">
                           <span class="badge badge-sm bg-warning"><i class="fa fa-pen"></i> Ubah</span>
                        </a>
                      </td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Tambah Barang -->
      <div class="modal fade" id="tambahAdminModal" tabindex="-3" role="dialog" aria-labelledby="tambahAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <h5 class="modal-title font-weight-bolder" id="tambahAdminModalLabel"> Daftar Admin Baru </h5>
            </div>
            <div class="modal-body">
            <form role="form" method="post" action="/daftarAdmin">
                @csrf
                <div class="mb-3">
                  <input type="text" name="nama_lengkap" required autocomplete="off" class="form-control" placeholder="Nama Anda..." aria-label="nama_lengkap">
                </div>
              <div class="mb-3">
                  <input type="text" name="uname" required autocomplete="off" class="form-control" placeholder="Username Anda..." aria-label="uname">
                </div>
                <div class="mb-3">
                  <input type="password" name="password" required autocomplete="off" class="form-control" placeholder="Password Anda" aria-label="password">
                </div>
                <input type="text" name="status" value="Admin" id="" hidden>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-warning w-100 my-4 mb-2"><i class="fa fa-user-plus"></i> | D A F T A R</button>
                </div>
              </form>
            </div>
          </div>
        </div>
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
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script> |
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Akhmad Ridlo Rifa'i</a>
                from UIN Sunan Gunung Djati Bandung
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
  @elseif(!Auth::check())
  <div class="container mt-8">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Error 401 - Unauthorized User</div>
                    <div class="card-body text-center">
                        <h3><i class="fas fa-times-circle text-danger"></i><br>ERROR 401</h3>
                        <h3>Oops! Anda tidak memiliki izin untuk mengakses halaman ini.</h3>
                        <h6><a href="/login" class="text-primary">Login </a>sebagai admin untuk mendapatkan izin ke halaman ini!!</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script>
    $(document).ready(function(){
      $("#tabel").DataTable();
    });
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/argon-dashboard.min.js?v=2.0.1"></script>
</body>

</html>