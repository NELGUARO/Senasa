<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">

</head>

<body>
    <nav class="">
        <div class="container menu-fixed">
            <div class="">
                       
                <div class="navbar-header">
                    
                     <a title="" target="_blank" href="#"><img height="80px" src="img/123.png" /></a>

                </div>
              
                <div class="padding-top" id="">
                    <ul class="nav navbar-nav navbar-right">
                       <?php
                        if(isset($_SESSION['tipoUsuario'])){
                        switch($_SESSION['tipoUsuario']){
                            case "estandar":
                                echo "<li><a class='' href='#'>Inicio</a></li>
                                      <li><a class='' href='#'>Opcion 1</a></li>
                                      <li><a class='' href='index.php'>Cerrar Session</a></li>";
                            break;
                            case "administrador":
                                echo "<li><a class='' href='#'>Inicio</a></li>
                                      <li><a class='' href='#'>Opcion 1</a></li>
                                      <li><a class='' href='#'>Opcion 2</a></li>
                                      <li><a class='' href='#'>Opcion 3</a></li>
                                      <li><a class='' href='#'>Opcion 3</a></li>
                                      <li><a class='' href='index.php'>Cerrar Session</a></li>";
                            break;
                        
                         }
                         }
                        ?>
                       
                        
                    </ul>
                </div>
           
            </div>
          
        </div>
    </nav>
    
    </div>
</body>

</html>