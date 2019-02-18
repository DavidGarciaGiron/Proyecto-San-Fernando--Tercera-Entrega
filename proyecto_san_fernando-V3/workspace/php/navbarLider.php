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

<link rel="stylesheet" type="text/css" href="css/estilosVer3.css">	
	
<style>
  .nav{
    background:black;
    width: 99.48%;
    position:absolute;
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
  
  </style>


<nav class="navbar navbar-inverse nav" role="navigation">
  

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li><a class="navbar-brand" href="vista/lider.php"><b>LIDER</b></b></a></li>
        <li><a href="../ver2.php" class="navbar-brand2 glyphicon glyphicon-calendar"> Cronograma</a></li>
        <li><a href="../ver5.php" class="avisos glyphicon glyphicon-fire"> Avisos</a></li>
        
        <form class="navbar-form navbar-right navbar-brand5" role="search" action="./buscar.php">
        <div class="form-group">
          <input type="text" name="s" class="form-control search" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default search-btn">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
      </form>
        
      </ul>
      
    </div><!-- /.navbar-collapse -->

</nav>