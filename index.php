<?php
session_start();
  if(!isset($_SESSION["login"])) {
    header("Location: login.php");
  }



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IXE VIRTUAL MUSEUM SMP REGINA PACIS BOGOR</title>
    
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    
  <?php include 'components/header.php'; ?>

    <main>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/background.jpg" alt="">

            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Pameran Digital 9E SMP Regina Pacis Bogor</h1>
                <p>Tugas Mata Pelajaran Seni Rupa</p>
                <p><a class="btn btn-lg btn-dark" href="#">Lihat disini</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/background1.jpg" alt="">

            <div class="container">
              <div class="carousel-caption">
                <h1>Selamat Datang!</h1>
                <p>Berikut Karya Siswa 9E Selama 3 Tahun</p>
                <p><a class="btn btn-lg btn-dark" href="#">Lihat disini</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/background2.jpg" alt="">

            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Together We Strong</h1>
                <p>One team, One family, One purpose</p>
                <p><a class="btn btn-lg btn-dark" href="#">Our team</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Marketing messaging and featurettes
  ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->


      <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="150px" height="150px" src="assets/atik.jpg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" />
              <text x="50%" y="50%" fill="#777" dy=".3em"></text>
            

            <h2>Penanggung Jawab</h2>
            <p>Mrs. Agnes Atik Susilawati, Regina Pacis Bogor Junior Highschool Principal as The Exhibition Manager
            </p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="150px" height="150px" src="assets/astoro.jpg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" />
              <text x="50%" y="50%" fill="#777" dy=".3em"></text>
            

            <h2>Guru Pembimbing Pameran</h2>
            <p>Mr. Agus Astoro, our art teacher as The Exhibition Mentor
            </p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="150px" height="150px" src="assets/Ketua.jpg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" />
              <text x="50%" y="50%" fill="#777" dy=".3em"></text>
            

            <h2>Ketua Panitia</h2>
            <p>Elena Elizabeth Marchiana, student number 10 as The Chief Committee
            </p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4" >
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets/Wakil.jpg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" />
              <text x="50%" y="50%" fill="#777" dy=".3em"></text>
            

            <h2>Wakil Ketua Panitia</h2>
            <p>Stanislaus Arya Tiyanaputra, student number 26, as The Vice Chief Committee
            </p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets/Me.jpg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" />
              <text x="50%" y="50%" fill="#777" dy=".3em"></text>
            

            <h2>Web Developer</h2>
            <p>Vincentius Gian Junius, student number 30, as The Web Developer
            </p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider" />

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Karya orisinil siswa. <span class="text-muted">Murni dari tangan siswa. </span></h2>
            <p class="lead">penugasan dibalut kreativitas dan dipadukan teknik terbaik.</p>
            <p>Berikut karya - karya orisinil siswa/i kelas 9E mata pelajaran Seni Rupa bersama Yth. Bapak Agus Astoro selama 3 tahun di SMP Regina Pacis Bogor.</p>
            <p><a class="btn btn-secondary" href="#">Lihat disini &raquo;</a></p>
          </div>
          <div class="col-md-5">
            <img
              class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
              width="500"
              height="500"
              src="assets/placeholder1.jpg"
              role="img"
            >
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#eee" />
              <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
          </div>
        </div>

        <hr class="featurette-divider" />

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Pameran digital tingkat SMP. </h2><p class="text-muted">Pameran digital ini diawasi oleh Kepala Sekolah SMP Regina Pacis Bogor, Yth. Ibu Agnes Atik Susilawati dan dibimbing oleh Yth. Bapak Agus Astoro. </p>
            <p class="lead">Pameran ini dilaksanakan selama 1 bulan.</p>
            <p><a class="btn btn-secondary" href="#">Ketahui lebih lanjut &raquo;</a></p>
          </div>
          <div class="col-md-5">
            <img
              class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
              width="500"
              height="500"
              src="assets/placeholder3.jpg"
              role="img"
            >
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#eee" />
              <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
          </div>
        </div>

        <hr class="featurette-divider" />

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Pameran ini dilaksanakan oleh seluruh siswa. <span class="text-muted">Dengan kerjasama dan kordinasi seluruh siswa 9E, </span></h2>
            <p class="text-start">kami persembahkan pameran digital ini, selamat menikmati.</p>
            <p><a class="btn btn-secondary" href="#">Susunan Panitia &raquo;</a></p>
          </div>
          <div class="col-md-5">
            <img
              class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
              width="500"
              height="500"
              src="assets/placeholder2.jpg"
              role="img"
            >
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#eee" />
              <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
          </div>
        </div>

        <hr class="featurette-divider" />

        <!-- /END THE FEATURETTES -->
      </div>
      <!-- /.container -->

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2023 9E, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
