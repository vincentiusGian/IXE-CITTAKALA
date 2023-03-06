<?php
session_start();
require 'components/connect.php';
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
  }

  $sql = "SELECT name, student_num, image FROM artist";
  $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IXE VIRTUAL MUSEUM SMP REGINA PACIS BOGOR</title>
    
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="style.css" rel="stylesheet"/>
  </head>
  <body>
   
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://reginapacis.sch.id/" target="_blank">
            <img src="assets/logo-RP.jpg" alt="" width="35" height="50">
            &nbsp;  
            IXE VIRTUAL MUSEUM
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
          
          <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="karya.php">KARYA SISWA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">PANITIA</a>
              </li>
              </li>
            </ul>
            <span class="badge badge-primary text-wrap" style="width: 6rem; height: 27px; background-color: red;">
                <a href="logout.php" class="text-decoration-none text-reset font-weight-bolder">LOGOUT</a>
            </span>
            <br>
            <a href="">
              <img src="assets/Circle Education Badge Logo.png" alt="" width="75" height="75">
            </a>
          </div>
        </div>
      </nav>
    </header>
    <hr>
    
    
   
    <main>
<section class="artist">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
<?php 
  $select_artist = $conn->prepare("SELECT * FROM `artist`");
  $select_artist->execute();
  if($select_artist->rowCount() > 0) {
  while($fetch_artist = $select_artist->fetch(PDO::FETCH_ASSOC)){
echo '<div class="carousel-item active">
 <img src="uploaded_files/$fetch_artist["image"];" class="d-block w-100" alt="...">';
    echo '<div class="carousel-caption d-none d-md-block">
        <h5>{$fetch_artist["name"]};</h5>
        <p>Student Number {$fetch_artist["student_num"];}</p>
        </div>
      </div>';}}
  ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



</section>
    </main>

    
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>
