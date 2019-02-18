<?php

    include_once('conexion.php');
    
    class Procesar extends Model{
        
        public function __construct(){ 
     	 	parent::__construct(); 
    	}
    	
    	public function build_report($year){
    	    $precio_total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
	    		$sql = $this->db->query("SELECT SUM(precio) AS precio_total FROM prog_mantenimiento WHERE MONTH(fecha_ini_mas_tmp) = '$month' AND YEAR(fecha_ini_mas_tmp) = '$year' LIMIT 1");	
	    		$precio_total[$i] = 0;
	    		foreach ($sql as $key){ $precio_total[$i] = ($key['precio_total'] == null)? 0 : $key['precio_total']; }
	    	}			 
			return $precio_total;
    	}
    }
    
    if($_POST['year']){
		$class = new Procesar;
		$run = $class->build_report($_POST['year']);
		exit(json_encode($run));
	}

?>