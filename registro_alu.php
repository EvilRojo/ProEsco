<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <meta http-equiv="X-UA-Compatible" content="IE=8; IE=9" />
    <link rel="shortcut icon" href="../img/fav.png">
    <title>ProEsco</title>
	<link rel="shortcut icon" href="https://cdn.icon-icons.com/icons2/37/PNG/512/glasses_3629.png" />
	
    <!-- Required meta tags -->
     <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-27100111-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-27100111-1');
</script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  
   
    <link rel="stylesheet" type="text/css"  href="css/main.css" >
    <link rel="stylesheet" type="text/css"  href="css/320.css" >
    <link rel="stylesheet" type="text/css"  href="css/768.css" >
    <link rel="stylesheet" type="text/css"  href="css/992.css" >
    <link rel="stylesheet" type="text/css"  href="css/1024.css" >
    <link rel="stylesheet" type="text/css"  href="css/1440.css" >
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
   
   <style type="text/css">
    #imagen {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1000;
    overflow: hidden;
    -webkit-transform: translate(-50%, -50%) scale(1.05);
    transform: translate(-50%, -50%) scale(1.05);
}
nav {
	height: 100px;
	border-bottom: 1px solid #DCDB20;
    position: fixed;
    width: 100%;
    background: #040404;
    z-index: 1;
}

.contenedorfotter {
    background-color: black;
    height: 90px;
}
.donar {
	padding: 15px;
	float: right;
}
.donar a {
	width: 100px;
	height: 60px;
	background-color: #F4F2F1;
	font-family: 'Montserrat';
	font-size: 13px;
	line-height: 60px;
	color: black;
	display: block;
	text-align: center;
}

.idioma {
    height: 23px;
    width: 38px;
    border: 2px solid #F4F2F1;
    color: #F4F2F1;
    display: inline-block;
    text-align: center;
    margin-top: 10px;
    line-height: 23px;
    text-decoration: none;
    font-family: Montserrat;
    font-size: 14px;
    font-weight: 500;
    line-height: 18px;
}

   </style> 
  </head>
  <body>
    <nav>
        <div class="block33">
          <div class="menu">
            <div class="nav" id="nav-icon">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="idioma"><a href="Admin/inicioA.html" style="color: #00783E;text-decoration: none;">P-E</a></div>
          </div>
        </div>
        <div class="block33">
          <a href="index.html"><div class="logo text-center"><img src="https://lh3.googleusercontent.com/-sZhrBA1pNtw/W-pUD-5OnrI/AAAAAAAAAII/V4wtzoGWcesiqvQjEbKod-t3822zV0XWACL0BGAs/w530-d-h530-n-rw/pp.jpg" height='80px' width='100px'></div></a>
        </div>
        <div class="block33">
          <div class="donar">
            <a href="inicio.html">ENTRAR</a>
         </div>
          
        </div>
        <div class="clear"></div>
      </nav>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center><h1><b>ProEsco </b></h1></center>
        <br>
        <center><h2><b>Unete a la comunidad estudiantil mas grande </b></h2></center>
       <div class="row">
            <div class="col-sm-12">
                <br>
                <br>
                <br>
                <br>
                <div class="container">
                    <form method="post" action="phpDoctor.php">
                        <div class="panel panel-primary">
                            <br>
                            <div class="panel-heading">
                                <h2 class="text-center">REG??STRO DEL DOCENTE</h2>
                            </div>
                            
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="ap_pat">ID (Deberas recordarla) </label>
                                    <input type="text" name="id" class="form-control" placeholder="Escribe una Id " required
                                         />
                                </div>
                                
                                <div class="form-group">
                                    <label for="espe">Alumno</label>
                                    <select name="N_Alu" required class="form-control">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        
                                        $con=mysqli_connect("localhost","id5798215_rojo","12523916","id5798215_proesco") or die("error de conexion");
                                        
                                        $alumnos=mysqli_query($con,"select * from alumnos")or die("problemas en el query".mysqli_error($con));
                                        
                                        
                                        
                                         while($usu=mysqli_fetch_array($alumnos)){
                                            
                                            echo$usu['Nom_Alumno'];
                                        }
                                        
                                        ?>
                                    
                                        
                                        
                                        <option value=2>Orientador</option>
										
                                    </select>
                                </div>
                            
                            </div>
                            
                            <div class="panel-footer">
                                <div class="form-group"><br/>
                                    <div class="row text-center">
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success">Aceptar</button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="reset" class="btn btn-warning">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!--Footer-->
        <footer class="page-footer center-on-small-only unique-color-dark pt-0 contenedorfotter">
            <div class="">
                <div class="container">
                    <!--Grid row-->
                    <div class="row py-4 d-flex align-items-center">
                        <!--Grid column-->
                        <div class="txtfoo col-md-8 col-lg-8 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0 white-text foot">Virtual-Visual, Cuidadan??a, Trabajo y Familia A.C. Todos los derechos reservados 2018. <a class="avisode" href="aviso.php">Aviso de privacidad.</a></h6>
                        </div>
                        
                        <!--Grid column-->
                        <br>
                        <!--Grid column-->
                        <div class="iconos icofoo col-md-4 col-lg-4 text-center text-md-right">
                            <!--Facebook-->
                    <a href="https://www.facebook.com/equidadmx/" target="_blank" style="margin-right: 5px;margin-left: 5px"><img src="imgs/footer/Facebook.svg"></a> 
                    <!--Twitter-->
                    <a href="https://twitter.com/equidadmx" target="_blank" style="margin-right: 5px;margin-left: 5px"><img src="imgs/footer/Twitter.svg"></a> 
                    <!--Google +-->
                    <a href="https://www.youtube.com/user/Equidad2011" target="_blank" style="margin-right: 5px;margin-left: 5px"><img src="imgs/footer/Youtube.svg"></a> 
                    <!--Linkedin-->
                    <a href="https://soundcloud.com/equidad-de-genero" target="_blank" style="margin-right: 5px;margin-left: 5px"><img src="imgs/footer/Sound.svg"></a> 
                    <!--Instagram-->
                    
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>
    
</footer>

<!-- footer -->
  

   <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/0fa6875ec1.js"></script>
    <script>
      $(document).ready(function(){
        $('#nav-icon').click(function(){
          $(this).toggleClass('animate-icon');
          $('#overlay').fadeToggle();
        });
      });

      $(document).ready(function(){
          $('#overlay').click(function(){
          $('#nav-icon').removeClass('animate-icon');
          $('#overlay').toggle();
          });
          
      });
       </script>
       <div id="overlay">
          <div>
            <ul>
                
                <li><a href="somos.html"><span class="numero">1-</span>??Qui??nes somos? <span class="lineamenu"></span></a></li>
                <li><a href="que-hacemos.html"><span class="numero">2-</span>??Qu?? hacemos? <span class="lineamenu"></span></a></li>
                <li><a href="opcion.html"><span class="numero">3-</span>Registrate gratis <span class="lineamenu"></span></a></li>
                <li><a href="contacto.html"><span class="numero">4-</span>Contacto <span class="lineamenu"></span></a></li><!-- <li><a href="#seccion7" class="linkmenu">Secci??n 7</a></li> -->
            <li><a href="catalogos.html"><span class="numero">5-</span>Catalogos <span class="lineamenu"></span></a></li><!-- <li><a href="#seccion7" class="linkmenu">Secci??n 7</a></li> -->
                
                <span class="div"></span>
                <span class="redessociales" style="float:right;"><br>
              <a href="https://www.facebook.com/Virtual_Visual-1919516401673111/" target="_blank" class="icono"><i  aria-hidden="true"></i></a>
              <a href="https://twitter.com" target="_blank" class="icono"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="https://www.youtube.com" target="_blank" class="icono"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              <a href="https://soundcloud.com" target="_blank" class="icono"><i class="fa fa-soundcloud" aria-hidden="true"></i></a>

            </span>
            </ul>
            
          </div>
      </div>
				</body>
</html>
	