<?php
session_start();
require 'function.php';
// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['username'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['username'];

    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if($key === hash('sha256', $row["username"])) {
        $_SESSION['login'] = true;
    }

}

if(isset($_SESSION["login"])) {
    header("Location: index.php");
  }

$conn = mysqli_connect("localhost:8111", "root", "gj050508", "pameran digital");


if(isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
 // cek remember me
            if(isset($_POST['remember'])) {
                // buat cookie
                setcookie('id', $row["id"], time() + 60);
                setcookie('key', hash('sha256', $row['username']));
            }
           
// set session
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;


        }
    }

    $error = true;

}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Berkshire+Swash&family=Dancing+Script:wght@500&family=Fredoka+One&family=Hind:wght@500&display=swap" rel="stylesheet">

    <style>
        body {
    background-image: url("assets/background.jpg");
	background-size: cover;
    margin: 0;
	padding: 0;
	display: block;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-weight: bold;
    font-family: 'Jost', sans-serif;
        }
        
        .title {
    display: flex;
	justify-content: center;
	align-items: center;
    color: black;

        }

        label {
            display: flex;
            color: black;
	        font-size: 1em;
	        justify-content: center;
	        font-weight: bold;
	        cursor: pointer;
	        transition: .5s ease-in-out;
        }

    

        input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}

	.signup {
		display: flex;
		justify-content: center;
		align-items: center;
		color: black;
	}
        
    .main a {
        display: flex;
		justify-content: center;
		align-items: center;
		
    }

        .main {
    margin-left: 200px;
    width: 400px;
	height: 600px;
	overflow: hidden;
	background-color: white;
  	background-size: cover;
  	background-blend-mode: saturation;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
	margin-top: 50px;
    
        }

		ul {
            margin-right: auto;
            margin-left: auto;
            list-style: none;
            padding: 0; /* Remove the default padding */
            text-align: center; /* Center the list items */
            display: block;
            justify-content: space-between;
        }

        .form {
            position: relative;
	        width:100%;
	        height: 100%;
			color: black;
        }

        input #remember {
            display: flex;
            justify-content: flex-start;
        }

        button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: black;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #333333;
}
.error {
    color: red;
    font-style: italic;
    display: flex;
    justify-content: center;
    align-items: center;
}



.judul {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: rgb(52, 58, 64);
}

.screenshot {
    margin-right: 200px;
    margin-left: 200px;
    width: 649px;
	height: 327px;
	overflow: hidden;
	background-color: white;
  	background-size: cover;
  	background-blend-mode: saturation;
	border-radius: 10px;
	margin-top: 50px;
}

.screenshot img {
    width: 649px;
	height: 327px;
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
}

    </style>
</head>
<body>
    <div class="judul">
        <h1>WELCOME TO IXE VIRTUAL MUSEUM</h1>
    </div>
    <div class="container">
<div class="main">
        <h1 class="title">LOGIN</h1>
        <?php if(isset($error)) : ?>
        <p class="error">Username / Password salah!</p>
        <?php endif ?>
            <div class="form">
                <form action="" method="post">
                    <ul>
                        <li>
                            <label for="username">USERNAME :</label>
                            <input type="text" name="username" id="username">
                            </li>
                            <li>
                            <label for="password">PASSWORD :</label>
                            <input type="password" name="password" id="password">
                            </li>
                           <li class="remember"> 
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember me</label>
                            </li>
                            <li>
                            <button type="submit" name="login">LOGIN</button>
                            </li>
                            <div class="signup">
								<p>Doesn't have any account?</p>
			                </div>
                            <a href="register.php">click here to sign up</a>
                                
                    </ul>
                </form>
            </div>
        </div>
        <div class="screenshot">
        <img src="assets/theme.jpg" alt="">
        </div>
        
        </div>

    
   
</body>

</html>