<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">

  <title>
    Material Kit 2 by Creative Tim
  </title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->



  <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />



</head>

<body class="index-page bg-gray-200">

  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
              Ngonser
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item ms-lg-auto">
                  <a class="nav-link nav-link-icon me-2" href="https://github.com/creativetimofficial/material-kit" target="_blank">
                    <i class="fa fa-github me-1"></i>
                    <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on Github">Github</p>
                  </a>
                </li>
                <li class="nav-item my-auto ms-3 ms-lg-0">
                  <a href="https://www.creative-tim.com/product/material-kit-pro" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Admin</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>

  <header class="header-2">
    <div class="page-header min-vh-55 relative" style="background-image: url('./assets/img/bg2.jpg')">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">NGONSER !</h1>
            <p class="lead text-white mt-3">Suka nonton konser? <br /> Ngonser solusinya </p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

    <section class="pt-3 pb-4" id="count-stats">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto py-3">
            <div class="row">
              <div class="col-lg-12">
                <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                  <h3>Silahkan pilih tiket</h3>
                  <h6 class="text-secondary font-weight-normal pe-3">Tiket yang tersedia :</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              @foreach ($konser as $konsers)
              <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
                <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                  <h5 class="text-white">{{ $konsers->nama_konser }}</h5>
                  <h6 class="text-white">Rp {{ $konsers->harga }} / tiket</h6>
                  <p class="text-white">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $konsers->jadwal)
                                ->format('d') }} {{ \Carbon\Carbon::parse($konsers->jadwal)->format('F') }} {{ \Carbon\Carbon::createFromFormat('Y-m-d', $konsers->jadwal)
                                ->format('Y') }}</p>
                  <a href="{{ route('konser.show',$konsers->id) }}" class="text-white icon-move-right">
                    Pesan
                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                  </a>
                </div>
              </div>
              <br>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>


  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">

        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> <a href="">Ngonser</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>





















  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>




  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="./assets/js/plugins/countup.min.js"></script>





  <script src="./assets/js/plugins/choices.min.js"></script>



  <script src="./assets/js/plugins/prism.min.js"></script>
  <script src="./assets/js/plugins/highlight.min.js"></script>



  <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
  <script src="./assets/js/plugins/rellax.min.js"></script>
  <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
  <script src="./assets/js/plugins/tilt.min.js"></script>
  <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
  <script src="./assets/js/plugins/choices.min.js"></script>


  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="./assets/js/plugins/parallax.min.js"></script>











  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="./assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>


  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }
  </script>




</body>

</html>