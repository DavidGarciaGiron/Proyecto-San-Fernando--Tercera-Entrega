<style>
  * {
    margin:0;
    padding:0;
  }

  .nav{
    background:black;
    width: 100%;
    position:absolute;
    height:60px;
    margin:0;
    padding:0;
  }
  
  .navbar-brand{
    padding:0;
    margin:0;
    font-family: 'Slabo 27px', serif;
    background:black;
    color:white;
    width:15%;
    float:left;
    text-decoration:none;
  }
  
  .navbar-brand2{
    font-family: 'Slabo 20px', serif;
    background:black;
    color:white;
    width:10%;
    float:left;
    text-decoration:none;
    margin-top:15px;
  }
  
  .navbar-brand:hover{
    font-family: 'Slabo 27px', serif;
    background:white;
    color:black;
    text-decoration:none;
  }
  
  .navbar-brand2:hover{
    background:black;
    color:white;
    text-decoration:none;
  }

  </style>

<nav class="nav">
      <div class="container">
        
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">SAN FERNANDO</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        
        <div id="navbar" class="collapse navbar-collapse">
          <a class="navbar-brand" href="../../index.php">SAN FERNANDO</a>
          <ul>
            
            <?php if (!isset($_SESSION["usuario"])) {?>
            <li><a href="login.php"></a></li>
            <?php } else {
    ?>
              <?php if ($_SESSION["usuario"]["privilegio"] == 1) {?>
              <a href="admin.php" class="navbar-brand2 glyphicon glyphicon-user"> Técnico</a>
              <?php } else if($_SESSION["usuario"]["privilegio"] == 2){?>
              <a href="usuario.php" class="navbar-brand2 glyphicon glyphicon-user"> Lider</a>
              <?php }else if($_SESSION["usuario"]["privilegio"] == 3){?>
              <a href="tecnico.php" class="navbar-brand2 glyphicon glyphicon-user"> Ingeniero</a>              
              <?php         }

}?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>