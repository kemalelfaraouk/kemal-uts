<?php
require '../config.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- title -->
  <title>Title</title>

  <!-- css -->
  <link rel="icon" href="<?= $url; ?>assets/landing/img/favicon.ico">

  <link rel="stylesheet" href="<?= $url; ?>assets/landing/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

</head>
<body id="home">

  <!-- navbar -->
  <div class="nav-container">
    <div class="nav-logo">
      <h3><a href="">K</a></h3>
    </div>
    <div class="nav-box nav-box1">
      <ul class="nav-list">
        <li class="active"><a href="#home">Home</a></li>
        <li><a href="#features">Fitur</a></li>
        <li><a href="#services">layanan</a></li>
        <li><a href="#team">Team</a></li>
      </ul>
    </div>
    <div class="nav-box nav-box2">
      <div class="nav-box-icon">
        <a href="https://www.facebook.com/"><i class="fab fa-fw fa-facebook-f"></i></a>
        <a href="https://instagram.com/"><i class="fab fa-fw fa-instagram"></i></a>
        <a href="https://twitter.com/"><i class="fab fa-fw fa-twitter"></i></a>
        <a href="https://github.com/"><i class="fab fa-fw fa-github"></i></a>
      </div>
      <div class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- end of navbar -->

  <!-- header -->
  <header>
    <div class="container-custom">
      <div class="header-content">
        <div class="row">
          <div class="col-md-6 my-auto mx-auto">
            <?php if(isset($_SESSION['success'])) { ?>
              <div class="alert alert-primary"><?= $_SESSION['success']; ?></div>
            <?php } unset($_SESSION['success']); ?>

            
            <h2 class="m-0 text-white font-weight-bold text-poppins" data-aos="fade-right">Selamat datang di website perusahaan kami</h2>
            <p class="d-block text-light font-weight-light" data-aos="fade-right" data-aos-delay="100">
              kami adalah perusahaan Sebuah perusahaan yang bergerak di bidang advertising dan percetakan.
            </p>
            <a href="<?= $url; ?>login" class="button button-white" data-aos="fade-right" data-aos-delay="200">login</a>
          </div>
          <div class="col-md-5 my-auto mx-auto" data-aos="zoom-in" data-aos-delay="300">
            <div class="d-flex justify-content-center align-items-center flex-column text-center">
              <img src="<?= $url; ?>assets/landing/img/home-img.png" alt="" class="img-fluid mt-5">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end of header -->

  <!-- features -->
  <section id="features">
    <div class="container-custom">
      <div class="features-content">
        <div class="row">
          <div class="col mb-3" data-aos="fade-up">
            <div class="d-flex justify-content-center align-items-center flex-columm text-center">
              <h4 class="text-poppins font-weight-bold">Fitur Lainnya</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="card-custom">
              <div class="card-custom-header">
                <div class="d-flex justify-content-center align-items-center flex-column text-center">
                  <img src="<?= $url; ?>assets/landing/img/fe1.png" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-custom-body">
                <h4 class="mb-5 font-weight-bold text-poppins">Fokus pada pemasaran email</h4>
                <a href="#" class="button button-border-orange button-orange-hover">Baca lainnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card-custom">
              <div class="card-custom-header">
                <div class="d-flex justify-content-center align-items-center flex-column text-center">
                  <img src="<?= $url; ?>assets/landing/img/fe2.png" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-custom-body">
                <h4 class="mb-5 font-weight-bold text-poppins">Fokus pada pemasaran konten</h4>
                <a href="#" class="button button-border-orange button-orange-hover">Baca lainnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="card-custom">
              <div class="card-custom-header">
                <div class="d-flex justify-content-center align-items-center flex-column text-center">
                  <img src="<?= $url; ?>assets/landing/img/fe3.png" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-custom-body">
                <h4 class="mb-5 font-weight-bold text-poppins">Fokus pada pemasaran digital</h4>
                <a href="#" class="button button-border-orange button-orange-hover">Baca lainnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of features -->

  <!-- services -->
  <section id="services">
    <div class="container-custom">
      <div class="services-content">
        <div class="row">
          <div class="col" data-aos="fade-up">
            <div class="d-flex justify-content-center align-items-center flex-column text-center">
              <h4 class="mb-4 text-poppins text-light font-weight-bold">Layanan kami</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 my-auto mx-auto" data-aos="zoom-in" data-aos-delay="100">
            <div class="card-custom">
              <div class="card-custom-header bg-white">
                <div class="d-flex justify-content-center align-items-center flex-column text-center">
                  <img src="<?= $url; ?>assets/landing/img/s1.png" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-custom-body">
                <h4 class="mb-4 font-weight-bold text-poppins text-white">Web Optimasi</h4>
                <a href="" class="button button-border-orange button-orange-hover">Baca lainnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-auto mx-auto" data-aos="zoom-in" data-aos-delay="200">
            <div class="card-custom">
              <div class="card-custom-header bg-white">
                <div class="d-flex justify-content-center align-items-center flex-column text-center">
                  <img src="<?= $url; ?>assets/landing/img/s2.png" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-custom-body">
                <h4 class="mb-4 font-weight-bold text-poppins text-white">Konten Marketing</h4>
                <a href="" class="button button-border-orange button-orange-hover">Baca lainnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-auto mx-auto" data-aos="zoom-in" data-aos-delay="300">
            <div class="card-custom">
              <div class="card-custom-header bg-white">
                <div class="d-flex justify-content-center align-items-center flex-column text-center">
                  <img src="<?= $url; ?>assets/landing/img/s3.png" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-custom-body">
                <h4 class="mb-4 font-weight-bold text-poppins text-white">Data Analis</h4>
                <a href="" class="button button-border-orange button-orange-hover">Baca lainnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of services -->

  <!-- team -->
  <section id="team">
    <div class="container-custom">
      <div class="team-content">
        <div class="row">
          <div class="col my-3">
            <div class="d-flex justify-content-center align-items-center flex-column text-center">
              <h4 class="text-poppins font-weight-bold">Our Team</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 my-auto mx-auto">
            <div class="bg-light my-1 p-3 w-100 shadow-sm rounded">
              <div class="d-flex justify-content-center align-items-center flex-column text-center">
                <img src="<?= $url; ?>assets/landing/img/blogo.png" width="180" alt="" class="img-fluid rounded-circle my-3">
                <h4 class="m-0">Bayu</h4>
                <small class="d-block text-black-50">Web Optimizer</small>
              </div>
            </div>
          </div>
          <div class="col-md-6 my-auto mx-auto">
            <div class="bg-light my-1 p-3 w-100 shadow-sm rounded">
              <div class="d-flex justify-content-center align-items-center flex-column text-center">
                <img src="<?= $url; ?>assets/landing/img/klogo.jpg" width="180" alt="" class="img-fluid rounded-circle my-3">
                <h4 class="m-0">kemal</h4>
                <small class="d-block text-black-50">Web Created</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of team -->

  <!-- footer -->
  <footer>
    <div class="container-custom">
      <div class="footer-content">
        <div class="row">
          <div class="col-md-4 mx-auto my-3" data-aos="fade-in">
            <h4 class="text-poppins font-weight-bold">About Us</h4>
            <p class="d-block">
              Lorem, Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Incidunt Veniam Eum In Libero Delectus Sit Reprehenderit Velit Similique! Ad, Ea!.
            </p>
            <div class="footer-icon-box">
              <a href="https://www.facwbook.com/"><i class="fab fa-fw fa-facebook-f text-body"></i></a>
              <a href="https://instagram.com/"><i class="fab fa-fw fa-instagram text-body"></i></a>
              <a href="https://twitter.com/"><i class="fab fa-fw fa-twitter text-body"></i></a>
              <a href="https://github.com/"><i class="fab fa-fw fa-github text-body"></i></a>
            </div>
          </div>
          <div class="col-md-4 mx-auto my-3" data-aos="fade-in" data-aos-delay="100">
            <h4 class="text-poppins font-weight-bold">Quick Links</h4>
            <div class="d-flex flex-column">
              <a href="#home" class="text-black-50">Home</a>
              <a href="#features" class="text-black-50">Features</a>
              <a href="#services" class="text-black-50">Services</a>
              <a href="#portfolio" class="text-black-50">Portfolio</a>
              <a href="#team" class="text-black-50">Team</a>
              <a href="#price" class="text-black-50">Price</a>
            </div>
          </div>
          <div class="col-md-4 mx-auto my-3" data-aos="fade-in" data-aos-delay="200">
            <h4 class="text-poppins font-weight-bold">Category</h4>
            <div class="d-flex flex-column">
              <a href="#" class="text-black-50">Digital Marketing</a>
              <a href="#" class="text-black-50">Media Marketing</a>
              <a href="#" class="text-black-50">Content Marketing</a>
              <a href="#" class="text-black-50">Email Marketing</a>
              <a href="#" class="text-black-50">SEO Marketing</a>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col">
            <div class="d-flex justify-content-center align-items-center flex-column text-center">
              <h5 class="text-poppins font-weight-bold">&copy; 2021 By <b class="text-orange">Desain oleh : Kemal palevi (18539951)</b></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end of footer -->

  <!-- javascript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="<?= $url; ?>assets/landing/js/script.js"></script>

</body>
</html>
