<?php 
    session_start();
    require 'components/connect.php';
      if(!isset($_SESSION["login"])) {
        header("Location: login.php");
      }
    if(isset($_POST['add'])) {

      $id = create_unique_id();
      $name = $_POST['name'];
      $name = filter_var($name, FILTER_SANITIZE_STRING);
      $student_num = $_POST['student_num'];
      $student_num = filter_var($student_num, FILTER_SANITIZE_STRING);

      $image = $_FILES['image']['name'];
      $image = filter_var($image, FILTER_SANITIZE_STRING);
      $ext = pathinfo($image, PATHINFO_EXTENSION);
      $rename = create_unique_id().'.'.$ext;
      $image_tmp_name = $_FILES['image']['tmp_name'];
      $image_size = $_FILES['image']['size'];
      $image_folder = 'uploaded_files/'.$rename;

      if($image_size > 2000000){
        $warning_msg[] = 'Image size is too large!';
     }else{
        $add_artist = $conn->prepare("INSERT INTO `artist`(id, name, student_num, image) VALUES(?,?,?,?)");
        $add_artist->execute([$id, $name, $student_num, $rename]);
        move_uploaded_file($image_tmp_name, $image_folder);
        $success_msg[] = 'Product added!';
     }
  
  }
    
      
    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add artist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="styleTambah.css" rel="stylesheet"/>
</head>
<body>
<?php include 'components/header.php'; ?>

<!-- add artist starts -->
<hr>
<hr>

<section class="add-artist">
    <form action="" method="POST" enctype="multipart/form-data">
      TAMBAH ARTIS
      <p>name <span>*</span></p>
      <input type="text" name="name" placeholder="Nama Artis" required maxlength="50" class="box">
      <p>student number<span>*</span></p>
      <input type="number" name="student_num" placeholder="Nomor Presensi" required min="1" max="31" maxlength="10" class="box">
      <p>Artist image <span>*</span></p>
      <input type="file" name="image" required accept="image/*" class="box">
      <input type="submit" class="btn" name="add" value="add artist">
   </form>
   







    
</section>

<!-- add artist ends -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<?php include 'components/alert.php'; ?>
</body>
</html>




