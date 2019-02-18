<html>
	<head>
	  <link rel="icon" href="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/052013/horizontal_fondo_blanco.png?itok=h2XFS3bB">
		<title>Cronogramas de Mantenimiento</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/estilosVer3.css">
		<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="js/jquery.min.js"></script>
	</head>

	<?php include "php2/navbar3.php"; ?>
	<style>
	  .title {
	    padding:0;
	    margin:0;
	    margin-top:2%;
	  }
	  
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
	    background-image: url(/img/fondo3.png);
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
      background: url(/img/fondo3.png);
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
      border:2px solid rgb(51, 158, 205, 1);
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
      <h1 class="title">Aviso de Mantenimiento</h1>
      <div class="">
      <br>
      <!-- Button trigger modal -->
      <a data-toggle="modal" href="#myModal" id="btn1">Insertar Nuevo Registro </a>
      <br><br>
      
      <!-- Modal -->
      <div class="modal fade mdl" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <form role="form" method="post" action="php2/agregar3.php">
                    <h1>Ingrese un Nuevo Registro</h1>
                    <p>Planta:</p>
                    <select class="feedback-input" name="planta" required>
                      <option value="">Seleccionar...</option>
                      <option value="PBH">Planta Beneficio Huaral</option>
                    </select>
                    <p>Truno de Técnico:</p>
                    <select class="feedback-input" name="turno" required>
                      <option value="">Seleccionar...</option>
                      <option value="Primero">Primero</option>
                      <option value="Segundo">Segundo</option>
                      <option value="Tercero">Tercero</option>
                    </select>
                  
                    <input type="text" class="feedback-input" name="nombre_tecnico" required placeholder="Ingrese el Nombre del Tecnico">
                    <p>Sistema:</p>
                    <select class="feedback-input" name="sistema" required>
                      <option value="">Seleccionar...</option>
                      <option value="Recepción">Recepción</option>
                      <option value="Lavado">Lavado</option>
                      <option value="Pelado">Pelado</option>
                      <option value="Eviscerado">Eviscerado</option>
                      <option value="Planta Fria">Planta Fria</option>
                      <option value="Sub Productos">Sub Productos</option>
                      <option value="Enfriado">Enfriado</option>
                    </select>
                    
                    <input type="text" class="feedback-input" name="nombre_maquina_equipo" required placeholder="Ingrese el Nombre de la Maquina o Equipo">
                    <p>Tipo de Mantenimiento:</p>
                    <select class="feedback-input" name="tipo_mantto" required>
                      <option value="">Seleccionar...</option>
                      <option value="Correctivo Programado">Correctivo Programado</option>
                      <option value="Correctivo No Programado">Correctivo No Programado</option>
                      <option value="Preventivo">Preventivo</option>
                      <option value="Memo 3GP">Memo 3GP</option>
                      <option value="Predictivo">Predictivo</option>
                      <option value="TPM">TPM</option>
                      <option value="Otros">Otros</option>
                    </select>
                    
                    <input type="number" class="feedback-input" name="odm" required placeholder="Ingrese el Orden de Mantenimiento">
                    <p>Tipo de Falla:</p>
                    <select class="feedback-input" name="tipo_falla" required>
                      <option value="">Seleccionar...</option>
                      <option value="Frecuente">Frecuente</option>
                      <option value="Falla por Operacio">Falla por Operacion</option>
                      <option value="Falla por Atención Tardia">Falla por Atención Tardia</option>
                      <option value="Inusual">Inusual</option>
                    </select>
                    <p>Estado del Trabajo:</p>
                    <select class="feedback-input" name="estado_trabajo" required>
                      <option value="">Seleccionar...</option>
                      <option value="Pendiente">Pendiente</option>
                      <option value="Solucionado en el Mismo Turno">Solucionado</option>
                    </select>
                    
                    <textarea class="feedback-input" required placeholder="Detalle algunas Observaciones sobre la Actividad Realizada" name="observaciones"></textarea>
                    <p>Targeta Roja:</p>
                    <select class="feedback-input" name="targeta_roja" required>
                      <option value="">Seleccionar...</option>
                      <option value="SI">SI</option>
                      <option value="NO">NO</option>
                    </select>
                    <p>Fecha:</p>
                    <input type="date" class="feedback-input" name="fecha_ejecucion" required placeholder="Ingrese la Fecha de Ejecución">
                    <p>Hora de Incio:</p>
                    <input type="time" class="feedback-input" name="hora_ini" required placeholder="Ingrese la Hora de Inicio">
                    <p>Hora de Incio:</p>
                    <input type="time" class="feedback-input" name="hora_fin" required placeholder="Ingrese la Hora de Fin">
                    <p>Inconvenientes:</p>
                    <select class="feedback-input" name="inconveniente" required>
                      <option value="">Seleccionar...</option>
                      <option value="Sin Inconvenientes">Sin Inconvenientes</option>
                      <option value="Falta de Herramientas">Falta de Herramientas</option>
                      <option value="Falta de Repuestos">Falta de Repuestos</option>
                      <option value="Falta Mano de Obra">Falta Mano de Obra</option>
                      <option value="Equipo no Disponible">Equipo no Disponible</option>
                      <option value="Pendiente de Autorización">Pendiente de Autorización</option>
                      <option value="Equipo Fuera de Servicio">Equipo Fuera de Servicio</option>
                      <option value="Error en la Programación">Error en la Programación</option>
                    </select>
                    
                    <textarea class="feedback-input" required placeholder="Descripcion de Actividades" name="descripcion_actividades"></textarea>
                    
                    <input type="number" class="feedback-input" name="duracion_actividad" required placeholder="Ingrese el Tiempo que Duro la Actividad">
                  </div>
  
                  <button type="submit" class="btn1">Insertar Nuevo Registro</button>
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <?php include "php2/tabla3.php"; ?>
      </div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html> 
