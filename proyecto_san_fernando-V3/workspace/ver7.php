	<!--
		VISTA DE INGENIERO 
	-->
<?php

	$dbhandle = new mysqli('127.0.0.1', 'root', '', 'sanFernando');
	echo $dbhandle->connect_error;

	$query = "SELECT nombres_apellidos, sum(tiempo_est_hrs) as tiempo FROM prog_mantenimiento group by nombres_apellidos";
	$res = $dbhandle->query($query);

?>	
	
<html>
	<head>
		
	  	<link rel="icon" href="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/052013/horizontal_fondo_blanco.png?itok=h2XFS3bB">
		<title>Cronogramas de Mantenimiento</title>
		
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
	      google.charts.load('current', {'packages':['corechart']});
	      google.charts.setOnLoadCallback(drawChart);
	
	      function drawChart() {
	
	        var data = google.visualization.arrayToDataTable([
	          ['nombres_apellidos', 'tiempo'],
	            <?php 
	            
	                while($row=$res->fetch_assoc()){
	                    echo "['".$row['nombres_apellidos']."',".$row['tiempo']."],";
	                }
	
	            ?>
	        ]);
	
	        var options = {
	          title: 'Tecnicos, Lideres, Ingenieros / Horas de Trabajos'
	        };
	
	        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	
	        chart.draw(data, options);
	      }
    	</script>
		<link rel="stylesheet" type="text/css" href="css/estilosVer3.css">
		
		<link href="https://fonts.googleapis.com/css?family=Fahkwang" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Exo|Fahkwang|Major+Mono+Display|Quicksand" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Gilda+Display" rel="stylesheet">
		
		<meta charset="UTF-8">
		
        <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="dist/Chart.bundle.min.js"></script>
        <script type="text/javascript" src="js/chartJS/Chart.min.js"></script>
       
    
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	
		<script src="js/jquery.min.js"></script>
		
	</head>
	
	<?php include "php2/navbar4.php"; ?>
	
	<style>

	  body{
	    background-image: url(https://i.pinimg.com/originals/a7/37/e1/a737e1a3422af26b58da3099cc3baccf.jpg);
      	background-position: center center;
      	background-repeat: no-repeat;
      	background-attachment: fixed;
      	background-size: cover;
      	width:100%;
	  }
	  
	  body h1{
	  	color:black;
	  	font-family: 'Gilda Display', serif;
	  	font-size:25px;
	  	border-bottom:1px solid black;
	  	margin-left:30px;
	  	margin-right:20px;
	  	margin-bottom:10px;
	  	width:60%;
	  }
	  
	  .sup_izq{
	  	border-bottom:1px solid black;
	  	border-right:1px solid black;
	  	width:48%;
	  	height:82%;
	  	float:left;
	  	margin-left:30px;
	  }
	  
	  .sup_izq h2{
	  	color:black;
	  	font-family: 'Gilda Display', serif;
	  	font-size:15px;
	  	border-bottom:1px solid black;
	  	width:40%;
	  	margin-left:30px;
	  	margin-right:50px;
	  	margin-top:5px;
	  	float:left;
	  }
	  
	  .sup_izq p{
	  	color:black;
	  	font-family: 'Gilda Display', serif;
	  	font-size:15px;
	  	width:80%;
	  	margin-top: 20px;
	  	margin-left: 70px;
	  	margin-right: 30px;
	  	text-align: justify;
	  }
	  .sup_der p{
	  	color:black;
	  	font-family: 'Gilda Display', serif;
	  	font-size:15px;
	  	width:80%;
	  	margin-top:6%;
	  	margin-left: 5%;
	  	text-align: justify;
	  }
	  
	  .caja1{
        float:right;
        margin-top:5px;
        width: 40%;
      }
      
      .caja1 select{
        width: 50%;
        font-size: 18px;
        padding: 1px;
        padding-left: 5px;
        font-family: 'Gilda Display', serif;
	  	font-size:15px;
	  	margin-left: 40%;
	  	color:black;
      }
		
	  .resultados{
        margin: auto;
        margin-top: 40px;
        width: 95%;
        color:white;
      }
	  
      #grafico {
      	background:transparent;
      	margin:0;
      	width:80%;
      	height:50%;
      	color:white;
      }
      
      .resultados2{
        margin: auto;
        margin-top: 40px;
        width: 95%;
        color:white;
      }
	  
      #grafico2 {
      	background:transparent;
      	margin:0;
      	width:80%;
      	height:50%;
      	color:white;
      }
	  
	  .sup_der{
	  	border-left:1px solid black;
	  	border-bottom:1px solid black;
	  	width:48%;
	  	height:82%;
	  	float:left;
	  	margin-left:5px;
	  	margin-bottom:5px;
	  }
	  
	  .sup_der h2{
	  	color:black;
	  	font-family: 'Gilda Display', serif;
	  	font-size:15px;
	  	border-bottom:1px solid black;
	  	width:40%;
	  	margin-left:30px;
	  	margin-right:50px;
	  	margin-top:5px;
	  	float:left;
	  }
	  
	  .piechart {
	  	margin-top:2%;
	  	background:transparent;
	  	height:60%;
	  	width:90%;
	  	margin-left:5%;
	  }

	</style>
	
	<body>
		
		<h1>Graficos Estadisticos - Area de Mantenimiento</h1>
		
		<div class="sup_izq">
			
			<h2>Gastos de Mantenimiento</h2>
			
			<div class="caja1">
		  		<select onChange="mostrarResultados(this.value);">
		  			<?php
		  				for($i=2000;$i<=3000;$i++){
		  					if($i == 2018){
                            	echo '<option value="'.$i.'" selected>'.$i.'</option>';
                        	}else{
                            	echo '<option value="'.$i.'">'.$i.'</option>';
                        	}
		  				}
		  			?>
		  		</select>
		  	</div>
		  	
		  	<div class="resultados"><canvas id="grafico"></canvas></div>
		  	
		  	<p>Esta grafica representa los gastos economicos del area de mantenimiento al realizar su trabajo,  medida que pasan los años sacando un resumen anual, de los meses en que la empresa a gastado mas, y los meses en que no gastaron casi nada.</p>
			
		</div>
		<div class="sup_der">
			
			<!-- ======================================================== -->
		
			
			<h2>Eficiencia del Trabajador / Horas</h2>
			
			<p id="p2">En esta gráfica muestra el ánalisis de la eficiencia del trabajador en funcion de las horas de trabajo, que se decignan para cada actividad.</p>
			
			<div id="piechart" class="piechart"></div>
			
			<!-- ======================================================== -->
			
			
		</div>
		
  		
  		<script src="bootstrap/js/bootstrap.min.js"></script>
  		
	</body>
	
	<script>
	
		//===============================================================================
		//===============================================================================
		//===============================================================================
	
		$(document).ready(mostrarResultados(2018));
			function mostrarResultados(year){
				$('.resultados').html('<canvas id="grafico"></canvas>');
				$.ajax({
					type: 'POST',
					url: 'php3/procesar.php',
					data: 'year='+year,
					dataType:'JSON',
					success:function(response){
						var Datos = {
							labels : ['ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic'],
							datasets : [
								{
									fillColor : 'rgba(228, 100, 6, .6)', //COLOR DE LAS BARRAS
                                    strokeColor : 'rgba(228, 100, 6,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                    highlightFill : 'rgba(227, 74, 8,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                    highlightStroke : 'rgba(227, 74, 8,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                    data : response         
								}	
							
							]
							
						}
					var contexto = document.getElementById('grafico').getContext('2d');
					window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
					Barra.clear();
					}
				});
				return false;
			}
			
			//===============================================================================
			//===============================================================================
			//===============================================================================
	</script>

	
</html>