<?php
if(Session::get('language') == 'en'){

	$poruka = 'Thank you for submiting your message, i will answer you soon as posible.';
	$redirect = 'You will be redirected to home page';
}else{

	$poruka = 'Hvala sto ste mi poslali poruku, potrudicu se da odgovorim sto pre.';
	$redirect = 'Bicete preusmereni na pocetnu stranicu';
}
ob_start();
?>

<!doctype html>
<head>
	<title>Nenad Development - Thank you</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Hvala sto ste mi poslali poruku.">
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->                 
<style type="text/css">
	body{

		background-color: #2F2F2F;
		color: #fff;

	}
	h1, h2, h3, h4{

		font-family: 'Lobster', cursive;
		font-size: 2em;
	}

	.container{
		width: 100%;
	}
	.row{
		width: 100%;
		margin-top:50px;
	}
	.text{
		width: 50%;
		margin-left: auto;
		margin-right: auto;
        text-align: center;
	}
	.image-thank{
		width: 50%;
		margin-right: auto;
		margin-left: auto;
		text-align: center;
	}
	.loader{
		width: 50%;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
	}



</style>

</head>

<body>
<div class="container">
	<div class="row">
		<div class="image-thank"><img src="_include/img/letter.png" width="212" height="212" alt="Ikonica pismo"></div>
		<div class="text"><h1><?php echo $poruka; ?></h1></div>
		<div class="loader">
		<p><?php echo $redirect; ?></p>
		<img src="_include/img/ajax-loader.gif" alt="loader">
		</div>

	</div>
</div>	
<script type="text/javascript">
	$(document).ready(function(){

		setTimeout('lokacija()', 8000);
	});

	function lokacija(){

		location.href = 'pocetna';
	}
</script>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
</body>




</html>

<?php ob_end_flush(); ?>

