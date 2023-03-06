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
   
  <?php include 'components/header.php'; ?>
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
