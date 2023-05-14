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
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('../assets/img/gudanglow.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="{{asset('assets/img/logo-ct-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">V-Warehouse</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
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
          <a class="nav-link active" href="/riwayat">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-cart text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Riwayat Transaksi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/virtual-reality.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Jadwal Gudang</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Halaman Akun</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Diri</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-group text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Admin</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-in.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Log-In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-up.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Daftar Akun</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="{{asset('assets/img/illustrations/icon-documentation.svg')}}" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
          </div>
        </div>
      </div>
      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div> -->
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
          <h6 class="font-weight-bolder text-white mb-0">Riwayat Transaksi</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <!-- Ada kondisi dimana jika belum login maka akan ditampilkan tombol login, jika sudah login maka akan tampil nama user -->
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Akhmad Ridlo</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 " aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#dataDiri" >
                        <i class="fa fa-user-circle fa-sm fa-fw mr-2 text-gray-400"></i> Data Diri
                    </a>
                    <a class="dropdown-item" href="admin.php" >
                        <i class="fa fa-user-alt fa-sm fa-fw mr-2 text-gray-400"></i> Data Admin
                    </a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logout">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                    </a>
              </ul>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h5>Riwayat Transaksi</h5>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive mx-4 text-center">
              <table class="table text-center align-items-center mb-0" id="tabel">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Tanggal Transaksi</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Merek Barang</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Klien</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Jumlah Transaksi</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nominal Transaksi</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ">Pengaturan</th>
                      <!-- Kondisi dimana user yang tidak login tidak akan diberikan privilege untuk mengubah stok -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 
                        <div class="d-flex px-2 py-1">
                          <h4 class="mb-0 text-sm">1.</h4>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">2023-4-30</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">Indomie</h6>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">PT.Wings Indonesia</p>
                      </td>
                      <!-- Bila klien menjual berarti stok akan menamplkan tanda '+' didepan nominal, bila klien membeli maka jumlah transaksi ditandai dengan simbol '-' didepan angka -->
                      <td>
                        <p class="text-xs font-weight-bold mb-0">+100</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">Rp.7.000.000</p>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-md" data-toggle="tooltip" data-original-title="Edit user">
                          <span class="badge badge-sm bg-gradient-danger"><i class="fa fa-trash"></i> Hapus</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td> 
                        <div class="d-flex px-2 py-1">
                          <h4 class="mb-0 text-sm">2.</h4>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">2023-5-2</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">ANTIMO</h6>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">PT.Phapros Medical Inc</p>
                      </td>
                      <!-- Bila klien menjual berarti stok akan menamplkan tanda '+' didepan nominal, bila klien membeli maka jumlah transaksi ditandai dengan simbol '-' didepan angka -->
                      <td>
                        <p class="text-xs font-weight-bold mb-0">-300</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">Rp.9.000.000</p>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-md" data-toggle="tooltip" data-original-title="Edit user">
                          <span class="badge badge-sm bg-gradient-danger"><i class="fa fa-trash"></i> Hapus</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td> 
                        <div class="d-flex px-2 py-1">
                          <h4 class="mb-0 text-sm">3.</h4>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">2023-5-5</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">Sinar Dunia</h6>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">PT.Sinar Mas</p>
                      </td>
                      <!-- Bila klien menjual berarti stok akan menamplkan tanda '+' didepan nominal, bila klien membeli maka jumlah transaksi ditandai dengan simbol '-' didepan angka -->
                      <td>
                        <p class="text-xs font-weight-bold mb-0">+250</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">Rp.5.000.000</p>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-md" data-toggle="tooltip" data-original-title="Edit user">
                          <span class="badge badge-sm bg-gradient-danger"><i class="fa fa-trash"></i> Hapus</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td> 
                        <div class="d-flex px-2 py-1">
                          <h4 class="mb-0 text-sm">4.</h4>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">2023-5-10</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">IKEA Standing Lamp</h6>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">IKEA Industries</p>
                      </td>
                      <!-- Bila klien menjual berarti stok akan menamplkan tanda '+' didepan nominal, bila klien membeli maka jumlah transaksi ditandai dengan simbol '-' didepan angka -->
                      <td>
                        <p class="text-xs font-weight-bold mb-0">+75</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">Rp.15.000.000</p>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-md" data-toggle="tooltip" data-original-title="Edit user">
                          <span class="badge badge-sm bg-gradient-danger"><i class="fa fa-trash"></i> Hapus</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td> 
                        <div class="d-flex px-2 py-1">
                          <h4 class="mb-0 text-sm">1.</h4>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">2023-4-30</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">Indomie</h6>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">PT.Wings Indonesia</p>
                      </td>
                      <!-- Bila klien menjual berarti stok akan menamplkan tanda '+' didepan nominal, bila klien membeli maka jumlah transaksi ditandai dengan simbol '-' didepan angka -->
                      <td>
                        <p class="text-xs font-weight-bold mb-0">+100</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">Rp.7.000.000</p>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-md" data-toggle="tooltip" data-original-title="Edit user">
                          <span class="badge badge-sm bg-gradient-danger"><i class="fa fa-trash"></i> Hapus</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td> 
                        <div class="d-flex px-2 py-1">
                          <h4 class="mb-0 text-sm">1.</h4>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">2023-4-30</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">Indomie</h6>
                      </td>
                      <td>
                        <p class="text-sm text-uppercase font-weight-bold mb-0">PT.Wings Indonesia</p>
                      </td>
                      <!-- Bila klien menjual berarti stok akan menamplkan tanda '+' didepan nominal, bila klien membeli maka jumlah transaksi ditandai dengan simbol '-' didepan angka -->
                      <td>
                        <p class="text-xs font-weight-bold mb-0">+100</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">Rp.7.000.000</p>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-md" data-toggle="tooltip" data-original-title="Edit user">
                          <span class="badge badge-sm bg-gradient-danger"><i class="fa fa-trash"></i> Hapus</span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
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
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
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