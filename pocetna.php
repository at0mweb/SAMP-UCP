<?php  
include 'konfiguracija.php';
 
 session_start();  
 if(!isset($_SESSION["name"]))  
 {  
      header("location:index.php?action=login");  
 }  

$stmt = $conn->prepare('SELECT id,email,lastlogin,level,satiigre,mobbroj,mobkredit,sex,godine,kazneni,money,banka,zlato,posao,kuca,stan,biznis,iimanje,vip,elixir,vdan,vmesec,vgodina,adozvola,aviondozvola,gundozvola,skin,sljiva,kruska,jabuka,nkokain,nkanabis,kokain,kanabis,cigare,upaljac,kanap,telefon,bakar,vozilo1,vozilo2,vozilo3,isonline FROM players WHERE name = ?');

$stmt->bind_param('s', $_SESSION['name']);
$stmt->execute();
$stmt->bind_result($id, $email, $lastlogin, $level, $satiigre, $mobbroj, $mobkredit, $sex, $godine, $kazneni, $money, $banka, $zlato, $posao, $kuca, $stan, $biznis, $iimanje, $vip, $elixir, $vdan, $vmesec, $vgodina, $adozvola, $aviondozvola, $gundozvola, $skin, $sljiva, $kruska, $jabuka, $nkokain, $nkanabis, $kokain, $kanabis, $cigare, $upaljac, $kanap, $telefon, $bakar, $vozilo1, $vozilo2, $vozilo3, $isonline );
$stmt->fetch();
$stmt->close();

 ?>

<html>
<head>

	<meta charset="UTF-8">
	<title>VMUCP - Pocetna</title>

	<link rel="stylesheet" type="text/css" href="includes/css/pocetnastyle.css">
	<script src="https://kit.fontawesome.com/52c3eeea2f.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.css" >
	<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Gugi&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/52c3eeea2f.js"></script>
	<!-- <script type="text/javascript" src="includes/js/mouseblock.js"></script> -->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body style="background: url(https://images4.alphacoders.com/100/1005690.jpg) #243238; background-blend-mode: luminosity; background-size: cover; background-attachment: fixed;">
	<!-- <div class="snowflakes" aria-hidden="true">
	  <div class="snowflake">
	  ❆
	  </div>
	  <div class="snowflake">
	  ❆
	  </div>
	  <div class="snowflake">
	  ❆
	  </div>
	  <div class="snowflake">
	  ❆
	  </div>
	  <div class="snowflake">
	  ❆
	  </div>
	  <div class="snowflake">
	  ❆
	  </div>
	  <div class="snowflake">
	    ❆
	  </div>
	  <div class="snowflake">
	    ❆
	  </div>
	  <div class="snowflake">
	    ❆
	  </div>
	  <div class="snowflake">
	    ❆
	  </div>
	  <div class="snowflake">
	    ❆
	  </div>
	  <div class="snowflake">
	    ❆
	  </div>
	</div> -->
	
	<div class="info-bar">
		<marquee behavior="scroll" speed="normal" direction="left" style="color: white;font-weight: ;margin-top: 5px;margin-right: 350px;margin-left: 350px;">UCP je jos uvek u BETA verziji, ako primetite neki bug prijavite nam na forumu/discord serveru.</marquee>


	</div>	

	<header >
	<div class="container">
			
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
			  <a class="navbar-brand" href="pocetna.php" style="font-weight: bold;">Ver Mont RolePlay <span class="badge badge-danger">BETA</span></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			    <ul class="navbar-nav">
			      <li class="nav-item ">
			        <a class="nav-link navigacija-ucp active" href="pocetna.php">Pocetna</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link navigacija-ucp" href="#">Server Statistika</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link navigacija-ucp" href="#">Shop</a>
			      </li>
			      <li class="nav-item navigacija-ucp">
			        <a class="nav-link" href="https://forum.ver-mont.eu">Forum</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> <?php echo $_SESSION["name"]; ?> <?php if($isonline == 0){ echo '<span class="badge bg-danger">', $level,'</span></a>';} else if($isonline == 1){ echo '<span class="badge bg-success">', $level,'</span></a>';} ?>
			        
			        
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#" style="color: #2d323c;"><i class="fas fa-cogs"></i> Podesavanja</a>
			          <a class="dropdown-item" href="#" style="color: #2d323c;"><i class="fas fa-user" ></i> Nalog</a>
			          <a class="dropdown-item" href="odjava.php" style="color: #2d323c;"><i class="fas fa-sign-out-alt" ></i>Odjava</a>
			          
			        </div>
			      </li>
			    </ul>

			  </div>
			</nav>
		</div>

	</header>	
	<div class="container infos">
		<ul class="nav nav-pills">
		  <li class="nav-item">
		    <a class="nav-link active" href="#home" data-toggle="tab"><i class="fa fa-home"></i> Osnovne informacije</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#inv" data-toggle="tab"><i class="fas fa-briefcase"></i> Ranac</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#vozila" data-toggle="tab"><i class="fas fa-car"></i> Vozila</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link disabled" href="#" data-toggle="tab"><i class="fas fa-money-bill-wave"></i> Dnevne nagrade</a>
		  </li>
		</ul>

		<div class="tab-content">
		  	<div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
		  		<!--<?php echo '<h3>'.$_SESSION["name"].'</h3>'; ?> -->
		  		<!--<h3 class="ime-igraca">Atom_Bratovski</h3> -->
		  		<div class="row">
		  			<div class="col-sm-12 col-md-6 col-lg-4">
						<h4>Licne informacije</h4>
						<br>
						<strong>ID Naloga:</strong> <?=$id?><br>
						<strong>Ime i Prezime: </strong><?php echo $_SESSION["name"]; ?><br>
						<strong>Email Adresa:</strong> <?=$email?><br>
						<strong>Zadnji login:</strong> <?=$lastlogin?><br>
						<br>
						<strong>Level:</strong> <?=$level?><br>
						<strong>Sati Igre:</strong> <?=$satiigre?> sata<br>
						<strong>Broj telefona:</strong> <?php if($mobbroj == 0){ echo "Nemate telefon";} else if($mobbroj > 0){ echo $mobbroj;}?><br>
						<strong>Mobilni kredit:</strong> <?=$mobkredit?>$<br>
						<strong>Pol:</strong> <?php if($sex == 1){ echo "Musko";} else if($sex == 2){ echo "Zensko";} ?><br>
						<strong>Godine:</strong> <?=$godine?> godina<br>
						<strong>Kazneni poeni:</strong> <?=$kazneni?> poena<br>
						
						<br>
						<br>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<h4>Finansijske informacije</h4>
						<br>
						<strong>Novac:</strong> <?=$money?>$<br>
						<strong>Banka:</strong> <?=$banka?>$<br>
						<strong>Zlato:</strong> <?=$zlato?>g<br>
						<strong>Posao:</strong> <?php if($posao == 1) { echo "Farmer";} else{
						   if($posao == 2) { echo "Bus vozac";}
						   if($posao == 3) { echo "Mehanicar";}
						   if($posao == 4) { echo "Cvecar";}
						   if($posao == 5) { echo "Komunalac";}
						   if($posao == 6) { echo "Pica dostavljac";}
						   if($posao == 7) { echo "Bolnicar";}
						   if($posao == 8) { echo "Kosac";}
						   if($posao == 9) { echo "Prevoznik novca";}
						   if($posao == 12) { echo "Dostavljac";}
						   if($posao == 13) { echo "Kamiondzija";}
						   if($posao == 14) { echo "Pilot";}
						   if($posao == 18) { echo "Vozac nafte";}
						   if($posao == 19) { echo "Valet";}
						   if($posao == 23) { echo "Rudar";}
						   if($posao == 32) { echo "Vocar";}
						   if($posao == 34) { echo "Berac pecurki";}
						   if($posao == 36) { echo "Putar";}
						   if($posao == 37) { echo "Cistac Snega";}
						   if($posao == 38) { echo "Ribar";}
						   if($posao == 39) { echo "Forenzicar";}} ?><br>
						<br>
						<strong>Kuca:</strong> <?php if($kuca == -1){ echo "Nema";} else{ echo $kuca;}?><br>
						<strong>Stan:</strong> <?php if($stan == -1){ echo "Nema";} else{ echo $stan;}?><br>
						<strong>Biznis:</strong> <?php if($biznis == -1){ echo "Nema";} else{ echo $biznis;}?><br>
						<strong>Imanje:</strong> <?php if($iimanje == 2555){ echo "Nema";} else{ echo $iimanje;}?><br>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<h4>VIP Pogodnisti</h4>
						<br>
						<strong>VIP:</strong> <?php if($vip == 0){ echo "Niste VIP";} else{ echo $vip." LVL";}?><br>
						<strong>DPoeni:</strong> <?=$elixir?> poena<br>
						<strong>Trajanje VIPa:</strong> <?php if($vip == 0 ){ echo "Niste VIP";} else if($vip > 0){ echo " do ".$vdan.".".$vmesec.".".$vgodina."."; }?><br>
						<br>
						<strong>Vozacka dozvola:</strong> <?php if($adozvola == 0){ echo "Nema";} else if($adozvola == 1){ echo "Ima";}?><br>
						<strong>Dozvola za avion:</strong> <?php if($aviondozvola == 0){ echo "Nema";} else if($aviondozvola == 1){ echo "Ima";}?><br>
						<strong>Dozvola za oruzije:</strong> <?php if($gundozvola == 0){ echo "Nema";} else if($gundozvola == 1){ echo "Ima";}?><br>
						<br>
						<br>
							
					</div>
					<div class="col-sm12 col-md-6 col-lg-4">
						<h4>Skin</h4>
						<br>
						<?php echo '<img class="profslika" src="skins/', $skin,'.png', '" alt="', $skin, '"/>'?>




					</div>	
				</div>	
			</div>
		  
		  <div class="tab-pane" id="inv" role="tabpanel" aria-labelledby="profile-tab">
		  	<div class="row">
		  			<div class="col-sm-12 col-md-6 col-lg-4">
						<h4>Voce</h4>
						<br>
						<strong>Sljiva: <?php if($sljiva == 0){ echo "Nema";} else if($sljiva > 0){ echo $sljiva;} ?></strong><br>
						<strong>Kruska: <?php if($kruska == 0){ echo "Nema";} else if($kruska > 0){ echo $kruska;} ?></strong><br>
						<strong>Jabuka: <?php if($jabuka == 0){ echo "Nema";} else if($jabuka > 0){ echo $jabuka;} ?></strong><br>
						<br>
						<br>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<h4>Droga</h4>
						<br>
						<strong>Neobradjeni kokain: <?php if($nkokain == 0){ echo "Nema";} else if($nkokain > 0){echo $nkokain."g";} ?></strong><br>
						<strong>Neobradjeni kanabis: <?php if($nkanabis == 0){ echo "Nema";} else if($nkanabis > 0){echo $nkanabis."g";} ?></strong><br>
						<strong>Kokain: <?php if($kokain == 0){ echo "Nema";} else if($kokain > 0){echo $kokain."g";} ?></strong><br>
						<strong>Kanabis: <?php if($kanabis == 0){ echo "Nema";} else if($kanabis > 0){echo $kanabis."g";} ?></strong><br>
						<br>
						<br>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<h4>Ostalo</h4>
						<br>
						<strong>Cigare: <?php if($cigare == 0){ echo "Nema";} else if($cigare > 0){echo $cigare;} ?></strong><br>
						<strong>Upaljac: <?php if($upaljac == 0){ echo "Nema";} else if($upaljac > 0){echo "Imate";} ?></strong><br>
						
						<strong>Kanap: <?php if($kanap == 0){ echo "Nema";} else if($kanap > 0){echo $kanap;} ?></strong><br>
						<strong>Telefon: <?php if($telefon == 0){ echo "Nema";} else if($telefon > 0){echo "Imate";} ?></strong><br>
						<strong>Bakar: <?php if($bakar == 0){ echo "Nema";} else if($bakar > 0){echo $bakar."kg";} ?></strong><br>
						<br>
						<br>
							
					</div>
			</div>



		  </div>
		  
		  <div class="tab-pane" id="vozila" role="tabpanel" aria-labelledby="messages-tab">
		  	<div class="row">
		  			<div class="col-sm-12 col-md-6 col-lg-4">
						<h4>  Vozila</h4>
						<br>
						<strong>Slot 1:</strong><?php if($vozilo1 == -1){ echo " Nemate vozila";} else if($vozilo1 > 0){echo " Imate vozilo";} ?><br>
						<strong>Slot 2: </strong><?php if($vozilo2 == -1){ echo " Nemate vozila";} else if($vozilo2 > 0){echo " Imate vozilo";} ?><br>
						<strong>Slot 3:</strong><?php if($vozilo3 == -1){ echo " Nemate vozila";} else if($vozilo3 > 0){echo " Imate vozilo";} ?><br>
						<br>
						<br>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<h4>Modeli vozila</h4>
						<br>
						<strong>[1] Model:</strong><?php if($vozilo1 == -1){ echo " Nemate vozilo";} else if($vozilo1 > 0){echo " $vozilo1";} ?><br>
						<strong>[2] Model:</strong><?php if($vozilo2 == -1){ echo " Nemate vozilo";} else if($vozilo2 > 0){echo " $vozilo2";} ?><br>
						<strong>[3] Model:</strong><?php if($vozilo3 == -1){ echo " Nemate vozilo";} else if($vozilo3 > 0){echo " $vozilo3";} ?><br>
						<br>
						<br>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<!--<h4>Podaci o vozilima</h4>
						<strong>DPoeni:</strong><br>
						<strong>Trajanje VIPa:</strong><br>
						<br>
						<strong>Vozacka dozvola:</strong><br>
						<strong>Dozvola za avion:</strong><br>
						<strong>Dozvola za oruzije:</strong><br>
						<br>
						<br>-->
							
					</div>
				</div>



		  </div>
		  <div class="tab-pane" id="#" role="tabpanel" aria-labelledby="settings-tab">
		  	




		  </div>
		</div>

	</div>	
	
	<div class="container-fluid footer">
		<div class="row">
			<div class="col">
				<a href="https://www.facebook.com/vermontroleplay" target="_blank"><i class="fab fa-facebook-square "></i></a>
			</div>	
			<div class="col">
		        <a href="https://www.instagram.com/ver.mont.samp/" target="_blank"><i class="fab fa-instagram "></i></a>
		    </div>
		    <div class="col">
			    <a href="https://discord.gg/VDcg9fp" target="_blank"><i class="fab fa-discord "></i></a>
			</div>
			<div class="col">
			    <a href="https://github.com/at0mweb" target="_blank"><i class="fab fa-github "></i></a>
			</div>


		</div>	
	</div>
	<div class="footer-dev">
		<div class="container">
			<div class="row">
				<div class="col">
					<p class="text-left"> Ver Mont &copy; 2021. All Rights Reserved.</p>
				</div>	
				<div class="col">
					<p class="text-right">Developer & Designer: <strong><a href="https://www.facebook.com/tom.hederson.31" style="color: #3269a8;">#at0m</a></strong></p>
				</div>	

			</div>
		</div>
	</div>	
	
	
	
	<!--<div class="container">
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
		  <?php echo '<strong> Dobrodosao - '.$_SESSION["name"].'</strong>'; ?> , UCP je jos uvek u BETA verziji, ako primetite neki bug prijavite nam na forumu.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	</div>	-->
	


	<script>
	$(document).ready(function(){
	  $(".nav-tabs a").click(function(){
	    $(this).tab('show');
	  });
	});
	</script>




	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>