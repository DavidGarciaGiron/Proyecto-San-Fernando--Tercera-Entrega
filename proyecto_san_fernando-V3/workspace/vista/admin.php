<!--
	////////// ////////// //////// ////   // // //////// ////////
	    //     //     //  //       // //  // // //       //    //
	    //     /////      //       //  // // // //       //    //
	    //     //     //  //       //   //// // //       //    //
	    //     /////////  //////// //   //// // //////// ////////
-->
	<!--
		VISTA DE TECNICO 
	-->
<!DOCTYPE html>
<html lang="es">
	<!--
		Comienzo Scripts PHP
	-->
	<?php include 'partials/head1.php';?>

	<?php
		if (isset($_SESSION["usuario"])) {
    		if ($_SESSION["usuario"]["privilegio"] == 2) {
        		header("location:lider.php");
    		}else if($_SESSION["usuario"]["privilegio"] == 3){
				header("location:tecnico.php");
			}
		} else {
    		header("location:login.php");
		}
	?>


	<?php include '../php/navTec.php';?>
	<!--
		Fin Scripts PHP
	-->
	<head>
		<meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Playfair+Display" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cinzel|Indie+Flower|Lobster|Playfair+Display" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cinzel|Indie+Flower|Lobster|Old+Standard+TT|Playfair+Display" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    	
    </head>
    
    <style>
    	@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
    	
    	body {
		    background-image: url(/img/fondoHome.jpg);
		    background-position: center center;
		    background-repeat: no-repeat;
		    background-attachment: fixed;
		    background-size: cover;
		    background-color: #fff;
		    width: 100%;
		    height: 100vh;
		    font-family: 'open sans';
		    font-size: 16px;
		    padding-top:5%;
		}
		
		.nombre_usuario{
			font-family: 'Playfair Display', serif;
			font-family: 'Indie Flower', cursive;
			font-family: 'Lobster', cursive;
			font-family: 'Cinzel', serif;
			font-size:80px;
			color:orange;
			border-bottom:3px solid orange;
		}
		
		.nav{
			padding:0;
			margin:0;
		}
		
		.container{
			width:60%;
			height:70%;
			border-radius:1px;
		    margin-left:40%;
		    margin-top:3%;
		}
		

		.container h1{
			font-family: 'Playfair Display', serif;
			font-family: 'Indie Flower', cursive;
			font-family: 'Lobster', cursive;
			font-size:80px;
			color:orange;
		}
		
		.container p{
			font-family: 'Playfair Display', serif;
			font-family: 'Indie Flower', cursive;
			font-family: 'Lobster', cursive;
			font-family: 'Cinzel', serif;
			font-family: 'Old Standard TT', serif;
			font-size:45px;
			color:white;
		}
		
		.boton {
		    display: inline-block;
		    padding: 15px;
		    width: 70%;
		    height: 60px;
		    font-family: 'Playfair Display', serif;
		    border: 1px solid #fff;
		    background-color: transparent;
		    color: #fff;
		    font-size: 22px;
		    text-align: center;
		    border-radius: 16px;
		    
		}
		.boton:hover {
		    display: inline-block;
		    padding: 15px;
		    width: 70%;
		    height: 60px;
		    font-family: 'Playfair Display', serif;
		    border: 1px solid #000;
		    background-color: white;
		    color: #000;
		    font-size: 22px;
		    text-align: center;
		    border-radius: 16px;
		    text-decoration: none;
		}
		
		.ing_img {  
			width:15%;
			border-radius:40px;
		}
		
		.label{
			border-radius:5px;
			background:black;
			border:1px solid black;
			font-family: 'Playfair Display', serif;
			font-size: 30px;
			color:white;
			padding-top:2px;
		}
		
    </style>
    	
	<body>
		
			<div class="starter-template">
				
					<div class="container text-center">
						<h1><strong>Bienvenido</strong><br><spam class="nombre_usuario"><?php echo $_SESSION["usuario"]["nombre"];?></spam></h1>
						<br><br>
						<p>Panel de control | <span class="label">TÉCNICO</span></p>
						<br>
						<a href="cerrar-sesion.php" class="boton">CERRAR SESIÓN</a>
					</div>
				
			</div>
		
	</body>
	
	<?php include 'partials/footer.php';?>

</html>



