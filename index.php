<?php  

 $connect = mysqli_connect("91.134.193.97", "srv_1088688_hqk", "Wvr4nw3xF2B3x8kb", "srv_1088688_hqk"); 
 session_start();  
 if(isset($_SESSION["name"]))  
 {  
      header("location:pocetna.php");  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["name"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Morate popuniti sva polja!")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["name"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM players WHERE name = '$username' AND ucppass = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['name'] = $username;  
                header("location:pocetna.php");  
           }  
           else  
           {  
                echo '<script>alert("Podaci koje ste unijeli se ne poklapaju sa podatcima u bazi.")</script>';  
           }  
      }  
 }  
 ?>  
<!DOCTYPE html>
<html>
<head>
	<title>VMUCP - Login</title>


	<link rel="stylesheet" type="text/css" href="includes/css/style.css">
	<script src="https://kit.fontawesome.com/52c3eeea2f.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.css" >
	<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Gugi&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/52c3eeea2f.js"></script>
	<!-- <script type="text/javascript" src="includes/js/mouseblock.js"></script> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body style="background: url(https://images4.alphacoders.com/100/1005690.jpg) #243238; background-blend-mode: luminosity; background-size: cover; background-attachment: fixed;">
	<div class="snowflakes" aria-hidden="true">
      <div class="snowflake">
      ❅
      </div>
      <div class="snowflake">
      ❆
      </div>
      <div class="snowflake">
      ❅
      </div>
      <div class="snowflake">
      ❆
      </div>
      <div class="snowflake">
      ❅
      </div>
      <div class="snowflake">
      ❆
      </div>
      <div class="snowflake">
        ❅
      </div>
      <div class="snowflake">
        ❆
      </div>
      <div class="snowflake">
        ❅
      </div>
      <div class="snowflake">
        ❆
      </div>
      <div class="snowflake">
        ❅
      </div>
      <div class="snowflake">
        ❆
      </div>
    </div>
    
	<div class="info-bar">
		<marquee behavior="scroll" speed="normal" direction="left" style="color: white;font-weight: ;margin-top: 5px;">Novosti novosti novosti novosti novosti</marquee>


	</div>	
	<section class="container-fluid login">
		<section class="row justify-content-center">
			<section class="col-12 col-sm-6 col-md-3">
				<form class="form-container" method="post">
				  <div class="form-group">
                
				  	<center><img src="https://i.ibb.co/M9BKfSG/vermont-transparent.png" height="200" width="190"  alt="" loading="lazy" class="logo"></center>
				  </div>		
				  <div class="form-group">
				    <label for="exampleInputEmail1">Ime_Prezime</label>
				    <input type="text" class="form-control" id="name" name="name" required="">
				    
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Lozinka</label>
				    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required="">
				  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Zapamti me</label>
				  </div>
				  <div class="form-group">
				  <input type="submit" name="login" value="Login" class="btn btn-info" />  
				  </div>

				  <small class="form-text text-muted">Nemate nalog na nasem forumu?<a href="register.html">Registruj me sada</a></small>
				  <small class="form-text text-muted">Zaboravili ste lozinku?<a href="forgotpassword.html">Resetujte lozinku</a></small>
				</form>

			</section>	
			

		</section>










	</section>	








	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>