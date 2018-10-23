<!DOCTYPE html>
<html >
<head>
	<title>Contact V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
 	 

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" action="index.php" method="POST">
					<span class="contact2-form-title">
						KALKULATOR BMI KU
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="berat">
						<span class="focus-input2" data-placeholder="BERAT BADAN"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="tinggi">
						<span class="focus-input2" data-placeholder="TINGGI BADAN"></span>
					</div>

					

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn" type="submit" name="hitung_bmi">
								CILUKBA

							</button>
						</div>
					</div>
				</form>

				<?php 
if(isset($_POST['hitung_bmi'])){
	$berat = $_POST['berat'];
	$tinggi = $_POST['tinggi'];
	$bmi = $berat/(($tinggi/100) * ($tinggi/100));
	if ($berat == NULL || $berat == 0){
		echo "<script> window.alert('Isi data secara lengkap...');window.location='./.';</script>" ;
	} else if ($tinggi == NULL || $tinggi ==0){
		echo "<script> window.alert('Isi data secara lengkap...');window.location='./.';</script>" ;
		}
	else if($berat && $tinggi == NULL){
		echo "<script> window.alert('Isi data secara lengkap...');window.location='./.';</script>" ;
	
	} else {


	if ($bmi <= 18.5) {
	    $output = '<b style="color:purple;"><i>kurus kering...</i></b>';
	     $saran = "Makan yg bergizi dan kurangin bergadang....";

	  } else if ($bmi > 18.5 && $bmi<=24.9 ) {
	    $output = '<b style="color:green;"><i>Berat Badan ideal...</i></b>';
	    $saran = "jagalah faktor kesehatan karna kesehatan anda hanya anda yang tau....";

	  } else if ($bmi > 24.9 && $bmi<=29.9) {
	    $output = '<b style="color:yellow;"><i>cocok buat kurban...</i></b>';
	    $saran = "kalau gak mau dikorbankan harap menjaga pola makan...";

	  } else if ($bmi > 30.0) {
	    $output = '<b style="color:red;"><i>Obesitas...</i></b>';
	    $saran = "dalam hitungan hari anda tidak turun berat badab langsung dikorbankan ...";
	  }
	  ?>
	  <br>
	  <div class="wrap-input2 validate-input" data-validate = "Message is required">
						<p style="text-align: justify;"><center><h4>Hasilnya adalah</h4></center>
    	anda jangan kaget yaaa.. : <?php echo round($bmi,2) ?><br>
    	kondisi anda : <?php echo $output; ?><br>
    	<b style="color: blue;"><?php echo $saran ?></b></p>
						
	 </div>
	  
	  <?php	
	  }		
} 


 ?>

			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
