<!--
	// ////   // //////// ////////// ////   // // ////////// //////   ////////
	// // //  // //       //     //  // //  // // //     //  //  ///  //    //
	// //  // // // ///// /////      //  // // // /////      //////   //    //
	// //   //// //    // //     //  //   //// // //     //  //  //   //    //
	// //   //// //////// /////////  //   //// // /////////  //   //  ////////
-->
	<!--
		VISTA DE INGENIERO 
	-->

<link rel="stylesheet" type="text/css" href="css/estilosVer3.css">
<style>
  .nav{
    background:black;
    width: 100%;
    
    height:49px;
  }
  
  .navbar-brand{
    font-family: 'Slabo 27px', serif;
    margin-left: 5%;
    background:black;
    color:white;
    height:100%;
  }

  .navbar-brand2{
    width:100%;
    font-size:13px;
    background:black;
    color:white;
    height:95%;
    margin:0;
    padding:0;
    
  }
  
  .avisos{
    background:black;
    height:95%;
   
  }
  .avisos:hover{
    background:black;
  }
  
  .graficos{
    background:black;
    height:95%;
    
  }
  .graficos:hover{
    background:black;
  }

  .navbar-brand5{
    font-size:13px;
    background:black;
    color:white;
    height:95%;
    padding:0;
    margin:0;
  }
  
  .search {
    margin-top:5px;
    margin-left:45px;
    float:left;
    width: 80%;
  }
  
  .search-btn {
    margin-top: 3px;
    margin-right: 20px;
    margin-left: 5px;
  }
  
  spam {
    color:black;
  }
  </style>
<nav class=" navbar navbar-inverse nav" role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex2-collapse">
      
      <ul class="nav navbar-nav">
        <li><a class="navbar-brand" href="vista/tecnico.php"><b>INGENIERO</b></b></a></li>
        <li><a href="../ver7.php" class="avisos glyphicon glyphicon-stats"> Area<spam>-</spam>de<spam>-</spam>Mantenimiento</a></li>
        <li><a href="" class="graficos glyphicon glyphicon-print" name="imprimir" onclick="window.print();"> Imprimir</a></li>
        <form class="navbar-form navbar-right navbar-brand5" role="search" action="./buscar6.php">
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div>
</nav>