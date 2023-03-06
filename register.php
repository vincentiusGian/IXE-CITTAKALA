<?php
$conn = mysqli_connect("localhost:8111", "root", "gj050508", "pameran digital");

require 'function.php';


if(isset($_POST["register"])) {

    if(register($_POST) > 0 ) {
        
        header("location: login.php");
            
    } else {
        echo mysqli_error($conn);
    }


}




?>
<!DOCTYPE html>
<html lang="en">
    <style>
        body {
	background-image: url("assets/theme.jpg");
	background-size: cover;
    margin: 0;
	padding: 0;
	display: block;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	font-weight: bold;
	
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
	        font-size: 20px;
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

	.login {
		display: flex;
		justify-content: center;
		align-items: center;
		color: black;
	}
        

        .main {
    width: 350px;
	height: 500px;
	overflow: hidden;
	background-color: white;
  	background-size: cover;
  	background-blend-mode: saturation;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
	margin-top: 100px;
	margin-left: 600px;
        }

		

        .form {
            position: relative;
	        width:100%;
	        height: 100%;
			color: black;
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
.judul {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: rgb(52, 58, 64);
}
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div class="judul">
        <h1>WELCOME TO IXE VIRTUAL MUSEUM</h1>
    </div>
    <div class="main">
        <h1 class="title">SIGN UP</h1>
        
            <div class="form">
                <form action="" method="post">
                            <label for="username">USERNAME :</label>
                            <input type="text" name="username" id="username">
                        
                            <label for="password">PASSWORD :</label>
                            <input type="password" name="password" id="password">
                        
                            <label for="password2">CONFIRM PASSWORD :</label>
                            <input type="password" name="password2" id="password2">
                        
                            <button type="submit" name="register">SIGN UP</button>
                        
							<div class="login">
								Have an existing account? &nbsp<a href="login.php">click here</a>
							</div>


                </form>
            </div>


    </div>



</body>
</html>