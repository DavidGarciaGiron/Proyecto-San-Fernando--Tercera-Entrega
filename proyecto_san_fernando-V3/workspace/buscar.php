<!--
	//       // /////    ////////// //////
	//       // //  ///  //     //  //  ///
	//       // //   /// /////      //////
	//       // //  ///  //     //  //  //
	//////// // /////    /////////  //   //
-->
	<!--
		VISTA DE LIDER 
	-->

<html>
	<head>
		<title>Busqueda de datos Filtrados</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/estilos1.css" />
		<script src="js/jquery.min.js"></script>
	</head>
	<style>
		* {
		  padding:0;
		  margin:0;
		}
		
		body{
		  width:100%;
		  background-color: #000;
		}
		
		.Scroll1 {
      		margin-top:0;
	    	width: 100vw;
	    	height: 100vh;
	    	padding-top:3.5%;
	    	padding-left:30px;
	    	padding-right:60px;
	    	padding-bottom:30px;
	    	overflow: auto;
	    	background-image: url(/img/fondoLider.png);
      		background-position: center center;
      		background-repeat: no-repeat;
      		background-attachment: fixed;
      		background-size: cover;
    	}
		
		.Scroll1 h1 {
	      	font-size:30px;
		    color: #000;
		    font-family: 'Fahkwang', sans-serif;
		    border-bottom:1px solid #000;
		    width:40%;
   		 }
   		 
   		#btn1{
	    	padding: 10px;
	    	background: rgb(0, 0, 0, 1);
	    	font-family: 'Slabo 27px', serif;
	      	border-radius:10px;
	      	color:white;
	      	text-decoration: none;
	    }
	
	    #btn1:hover{
	    	padding: 10px;
	    	background: rgb(255,255,255, 1);
	    	font-family: 'Slabo 27px', serif;
	      	border-radius:10px;
	      	color:black;
	      	text-decoration: none;
    	}
    	
    	.Scroll1::-webkit-scrollbar {
		    width: 5px;
		    height: 8px;
	    }
	
	    .Scroll1::-webkit-scrollbar-thumb {
		    background: white;
		    border-radius: 2px;
	    }
   		 
   		 
	</style>
		<?php include "php/navbarLider.php"; ?>
		
	<body>
		
		<div class="Scroll1">
			<div class="">
				<h1>Resultados de la Busqueda</h1>
				
				<br>
				<a href="/ver2.php" id="btn1">REGRESAR</a>
				<br><br>
				<?php include "php/busqueda.php"; ?>
			</div>
		</div>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>