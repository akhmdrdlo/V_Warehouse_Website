{{Auth::logout()}}

@if (session('success'))
    <div class="alert alert-success text-white">
        {{ session('success') }}
    </div>
@elseif (session('danger'))
    <div class="alert alert-danger text-white">
        {{ session('danger') }}
    </div>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <title>
    V-Warehouse | Login Page
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/css/argon-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Login untuk akses lebih banyak!!</h4>
                  <p class="mb-0">Masukkan Username dan Password kamu untuk Login!!</p>
                </div>
                <div class="card-body">
                <form role="form" method="post" action="/signin">
                @csrf
                    <div class="mb-3">
                      <input type="text" name="uname" required class="form-control form-control-lg" placeholder="Usename kamu..." aria-label="Email">
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" required class="form-control form-control-lg" placeholder="Password kamu..." aria-label="Password">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0"><i class="fa fa-spinner"></i> | L O G I N</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Tidak memiliki akun? Yuk bertransaksi di
                    <a href="/menu" class="text-primary text-gradient font-weight-bold">sini!!</a>
                  </p>
                  <p class="md-4 text-sm mx-auto">
                    Silahkan Hubungi SuperAdministrator untuk mendaftarkan diri!!
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('../assets/img/vec1.jpg');
                background-size: cover;">
                <span class="card p-3 bg-gradient-primary card-profile-bottom mb-n10"> 
                  <h5 class="text-white font-weight-bolder position-relative">Selamat Datang di V-Warehouse!!</h5>
                  <i class="text-white position-relative">"Seperti inilah realita, Dirimu lah yang enggan membuka mata"</i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.1"></script>
</body>

</html>