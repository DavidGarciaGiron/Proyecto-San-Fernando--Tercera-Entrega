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
	  <link rel="icon" href="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/052013/horizontal_fondo_blanco.png?itok=h2XFS3bB">
		<title>Cronogramas de Mantenimiento</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/estilosVer3.css">
		<link href="https://fonts.googleapis.com/css?family=Fahkwang" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Exo|Fahkwang|Major+Mono+Display|Quicksand" rel="stylesheet">
		<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="js/jquery.min.js"></script>
	</head>

	<?php include "php/navbar2.php"; ?>
	
	<style>
	  body{
	    width:100%;
	    background-color: #fff;
	  }
	  
	  .Scroll1 {
      margin-top:0;
	    width: 100vw;
	    height: 100vh;
	    padding-top:10px;
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
	    width:50%;
    }
   
    .Scroll1::-webkit-scrollbar {
	    width: 5px;
	    height: 8px;
    }

    .Scroll1::-webkit-scrollbar-thumb {
	    background: white;
	    border-radius: 2px;
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
    
    .mdl {
      background:rgb(0,0,0,.5);
      width: 100%;
      height: 100%;
      border:1px solid rgb(0,0,0,.5);
    }
    
    .modal-dialog {
      background-color: transparent;
      padding-top:3%;
      width: 50%;
      height: 0;
    }
    
    .modal-content {
      background-image: url(/img/fondoLider.png);
      background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    
    .modal-body {
      padding-left:60px;
      padding-right:60px;
    }
    
    .modal-body h1{
      margin-bottom: 20px;
    }
    
    .modal-content h1{
      font-size:30px;
	    color: #000;
	    font-family: 'Fahkwang', sans-serif;
	    width:100%;
	    text-align: center;
    }
    
    .modal-content p{
      font-size:13px;
	    color: #fff;
	    font-family: 'Fahkwang', sans-serif;
	    width:100%;
	    
    }
    
    .feedback-input {
      width:100%;
      height:50px;
      border-radius:5px;
      margin-bottom:1%;
      font-family: 'Fahkwang', sans-serif;
      font-family: 'Major Mono Display', monospace;
      font-family: 'Quicksand', sans-serif;
      font-family: 'Exo', sans-serif;
      font-size: 15px;
      padding-left:30px;
      border:1px solid darkred;
      color: black;
    }
    
    .btn1 {
      width:100%;
      height:60px;
      border-radius:5px;
      border:1px solid black;
      background:rgb(2,2,2,2);
      color:white;
      font-family: 'Fahkwang', sans-serif;
      font-family: 'Major Mono Display', monospace;
      font-family: 'Quicksand', sans-serif;
      font-family: 'Exo', sans-serif;
      font-size: 20px;
    }
    
</style>
	
	<body>
	   <div class="Scroll1">
	     <br><br>
	     <div>
       <h1 class="title">Cronograma de Mantenimiento</h1>
     </div>
     <br>
     <a data-toggle="modal" href="#myModal" id="btn1">Insertar Nuevo Registro </a>
     <br><br>
      
      <div class="modal fade mdl" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <form role="form" method="post" action="php/agregar1.php">
                    <h1>Ingrese un Nuevo Registro</h1>
                    <p>Planta</p>
                    <select class="feedback-input" name="planta" required>
                      <option value="">Seleccionar...</option>
                      <option value="PBH">Planta Beneficio Huaral</option>
                    </select>
                    <p>Sistema</p>
                    <select class="feedback-input" name="sistema" required>
                      <option value="">Seleccionar...</option>
                      <option value="Recepción">Area de Recepción</option>
                      <option value="Pelado">Area de Pelado</option>
                      <option value="Evicerado">Area de Evicerado</option>
                      <option value="Enfriado">Area de Enfriado</option>
                      <option value="Filete">Area de Filete</option>
                      <option value="Trozado">Area de Trozado</option>
                      <option value="Lavado">Area de Lavado</option>
                      <option value="Empaque">Area de Empaque</option>
                      <option value="Daff">Area de Daff</option>
                      <option value="Ptar">Area de Ptar</option>
                      <option value="Caldero">Area de Caldero</option>
                      <option value="Sub-Productos">Area de Sub-Productos</option>
                      <option value="Planta Nueva Frio">Area de Planta Nueva Frio</option>
                    </select>
                    
                    
                    <input type="text" class="feedback-input" name="codigo_equipo" required placeholder="Ingrese el Codigo del Equipo" max-lenght="20" min-lenght="0">
                    <p>Recomendacion: Colocar con un maximo de 16 caracteres.</p>
                    <br><br>
                    
                    <input type="text" class="feedback-input" name="parte_equipo" required placeholder="Ingrese Nombre de la Parte del Equipo">
                    
                    <input type="text" class="feedback-input" name="equipo" required placeholder="Ingrese Codigo del Equipo">
                    <textarea class="feedback-input" name="denominacion" required placeholder="Ingrese una Denominacion"></textarea> 
                    <p>Recomendacion: Para señalar medidas colocarlos de forma escrita.</p>
                    <br><br>
                    <input type="number" class="feedback-input" name="orden" required placeholder="Ingrese el Orden de Mantenimiento">
                    <input type="number" class="feedback-input" name="operacion" required placeholder="Ingrese Codigo del Equipo">
                    <input type="text" class="feedback-input" name="frecuencia" required placeholder="Ingrese la Frecuencia">
                    <textarea class="feedback-input" required placeholder="Detalle las Actividades que se Realizaran" name="actividades"></textarea>
                    <input type="text" class="feedback-input" name="t_control" required placeholder="Ingrese el Control">
                    <p>Fecha de Inicio</p>
                    <input type="date" class="feedback-input" name="fecha_ini_mas_tmp" required placeholder="Ingrese la Fecha de Inicio">
                    <p>Fecha de Finalizacion</p>
                    <input type="date" class="feedback-input" name="fecha_fin_mas_tmpr" required placeholder="Ingrese la Fecha de Fin">
                    <input type="text" class="feedback-input" name="prioridad" required placeholder="Ingrese la Prioridad de la Actividad">
                    <input type="text" class="feedback-input" name="tiempo_est_hrs" required placeholder="Ingrese la Tiempo Estimado">
                    <input type="text" class="feedback-input" name="tiempo_est_r_hrs" required placeholder="Ingrese la Tiempo Real">
                    <input type="text" class="feedback-input" name="nombres_apellidos" required placeholder="Ingrese Nombres y Apellidos del Tecnico Encargado">
                    <input type="text" class="feedback-input" name="puesto_trabajo" required placeholder="Ingrese el Puesto de Trabajo">
                    <input type="text" class="feedback-input" name="turno" required placeholder="Ingrese el Turno de la Actividad">
                    <input type="text" class="feedback-input" name="emplazamiento" required placeholder="Ingrese el Emplazamiento">
                    <input type="text" class="feedback-input" name="nro_h_ruta_ope" required placeholder="Ingrese Nro  de Hoja de Ruta">
                    <input type="text" class="feedback-input" name="grupo_planif" required placeholder="Ingrese el Grupo de Planificación">
                    <input type="number" class="feedback-input" name="precio" required placeholder="Ingrese el Precio">
                    <input type="text" class="feedback-input" name="texto_expl" required placeholder="Ingrese el Texto Expl.">
                    <input type="text" class="feedback-input" name="acreedor" required placeholder="Ingrese el Acreedor">
                    <input type="text" class="feedback-input" name="status_sistema" required placeholder="Ingrese Estado del Sistema">
                  </div>
  
                  <button type="submit" class="btn1">Insertar Nuevo Registro</button>
                </form>
              </div>
            </div>
          </div>
        
        <?php include "php/tabla3.php"; ?>
        </div>
      <script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html> 