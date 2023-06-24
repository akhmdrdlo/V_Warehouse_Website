<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
    V-Warehouse | Daftar
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="{{asset('assets/js/kitFontAwesome.js')}}" crossorigin="anonymous"></script>
  <link href="{{asset('assets/icon/css/all.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.1" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-n6">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/gudang2.jpeg'); background-position: center;">
      <span class="mask bg-gradient-warning opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h3 class="text-white mb-2 mt-5">Ingin Membeli atau Menjual Barang ke Kami? Yuk Daftar!!</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n11 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-body">
              <div class="mb-4">
                <h5 class="text-center">
                  Daftar Sekarang Yuk!!
                  <hr>
                </h5>
              </div>
              <form role="form" method="post" action="/register">
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
                <input type="text" name="status" value="Anggota" id="" hidden>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-warning w-100 my-4 mb-2"><i class="fa fa-user-plus"></i> | D A F T A R</button>
                </div>
                <p class="text-sm mt-3 mb-0 text-center">Sudah Memiliki Akun? <a href="/login" class="text-primary font-weight-bolder">Login Yuk!!</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <h5 class="mb-0 text-secondary text-sm text-weight-bolder">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Oleh Akhmad Ridlo-IF 2022 | UIN Sunan Gunung Djati Bandung
          </h5>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
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
  <script src="{{asset('assets/js/argon-dashboard.min.js?v=2.0.1')}}"></script>
</body>

</html>