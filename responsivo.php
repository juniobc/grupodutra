<?php 

   /*$db = pg_connect( "host=127.0.0.1 port=5432 dbname=postgres user=postgres password=postgres"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
      
      $query = "insert into t0001(cd_img, titulo_img, ds_img, arq_img, ds_tela) values()";   

      $result = pg_exec($db, $query);   
      
      echo "Number of rows: " . pg_numrows($result);
      
   }*/



?>


<!DOCTYPE html>
<html ang="en">
    
    <head>
        <meta charset="utf-8">
        <title>MDI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        
        
        <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="css/responsivo.css">
        
        
    </head>
    

    <body>
        
        <div class="container" style="margin-top:41px">
            <div class="row">
                <div class="col-md-12">
                
                    <div class="row" style="margin-bottom:40px;">
                        <div class="col-md-3"><img src="img/logomarca.png"></div>
                        <div class="col-md-8 col-md-offset-1">
                            <div class="row" style="margin-top:35px;">
                                <div class="col-md-4">
                                    <p style="font-size:19px"><img src="img/telefone.png"><font face="verdana" color="#003862">TELEFONE:</br>(62) 4101-0528</font></p>
                                </div>
                                <div class="col-md-4">
                                    <p style="font-size:19px"><font face="verdana" color="#003862">ATENDIMENTO </br>ONLINE</font>&nbsp;<img src="img/clickaqui.png"></p>
                                </div>
                                <div class="col-md-4">
                                    <p style="font-size:19px"><img src="img/whatsapp.png"><font face="verdana" color="#003862">WHATSAPP</br>(62) 8101-0983</font></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        </div>
                        
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        <li><a>Você esta em:</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" 
                        data-toggle="dropdown" role="button" 
                        aria-haspopup="true" aria-expanded="false">MDI imoveis <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">MDV veiculos</a></li>
                        <li><a href="#">MDE embarcações</a></li>
                        <li><a href="#">MDA aeronaves</a></li>
                        </ul>
                        </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><p class="divider-vertical">Inicio</p></a></li>
                        <li><a href="#" ><p class="divider-vertical">Empresa</p></a></li>
                        <li><a href="#" ><p class="divider-vertical">Imoveis</p></a></li>
                        <li><a href="#" ><p class="divider-vertical">Serviços</p></a></li>
                        <li><a href="#" ><p>Contato</p></a></li>
                        </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                    </div>
                    
                    <div class="row img-principal">
                    
                        <div class="col-md-12" style="background:#003862;" >
                            
                            <div class="carrouselbox col-md-offset-1">
                        
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>
                                    
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner carrouselbox" role="listbox">
                                        <div class="item active">
                                        <img src="img/principal.png" >
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        </div>
                                        
                                        <div class="item">
                                        <img src="img/principal2.png" >
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            
                            </div>
                            
                        </div>
                    
                    </div><!--row-->
                    
                    <div class="row destaque" style="margin-top:20px;">
                    
                        <div class="col-md-10 col-md-offset-1" style="border-bottom:3px solid #003862;">
                            
                            <h3 style="color:#003862">Imoveis em detaque</h3>
                            
                        </div>
                    
                    </div>
                    
                    <div class="row destaque" style="margin-top:20px">
                        
                        <div class="col-md-12 col-md-offset-1">
                            
                            <div class="row">
                        
                                <div class="col-md-4" style="margin-top:20px">
                                    
                                    <div class="row container-image-shadow img-rounded">
                                        
                                        <div class="col-md-12">
                                            
                                            <div class="row" >
                                                
                                                <img src="img/img3.jpg" class="img-rounded" width="100%" height="360" alt="...">
                                                
                                                <div class="col-md-12 ">
                                                    <div align="center" style="margin-top:5px">
                                                    <p>Valor: 130.000</p>
                                                    <p>Local: Goiânia GO</p>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                                <div class="col-md-4" style="margin-top:20px">
                                    
                                    <div class="row container-image-shadow img-rounded">
                                        
                                        <div class="col-md-12">
                                            
                                            <div class="row" >
                                                
                                                <img src="img/img3.jpg" class="img-rounded" width="100%" height="360" alt="...">
                                                
                                                <div class="col-md-12 ">
                                                    <div align="center" style="margin-top:5px">
                                                    <p>Valor: 130.000</p>
                                                    <p>Local: Goiânia GO</p>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                                <div class="col-md-4" style="margin-top:20px">
                                    
                                    <div class="row container-image-shadow img-rounded">
                                        
                                        <div class="col-md-12">
                                            
                                            <div class="row" >
                                                
                                                <img src="img/img3.jpg" class="img-rounded" width="100%" height="360" alt="...">
                                                
                                                <div class="col-md-12 ">
                                                    <div align="center" style="margin-top:5px">
                                                    <p>Valor: 130.000</p>
                                                    <p>Local: Goiânia GO</p>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                                
                            </div><!--row-->
                            
                        </div><!--col-md-10 col-md-offset-1-->
                    
                    </div><!--row-->
                            
                    <!--<div class="row bs-docs-footer" style="margin-top:50px;">
                        
                        <div class="col-md-12">
                            
                        </div>
                    
                    </div>-->
                    
                    <div class="row " style="margin-top:50px;margin-bottom:100px">
                        
                        <div class="col-md-7 bs-docs-footer"></div>
                        
                        <div class="col-md-5" style="height:144px;background-image: url('../img/rodape-direito.png');">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-3"><p class="center-block">Nos acompanhe nas redes sociais</p></div>
                                <div class="col-md-12">
                                    <img src="img/facebook.gif" style="margin-left:29px">
                                    <img src="img/facebook.gif" style="margin-left:22px">
                                    <img src="img/facebook.gif" style="margin-left:22px">
                                    <img src="img/facebook.gif" style="margin-left:22px">
                                    <img src="img/facebook.gif" style="margin-left:22px">
                                    <img src="img/facebook.gif" style="margin-left:22px">
                                </div>
                            </div>
                           
                        </div>
                    
                    </div>
                    
                </div><!-- col-md-12 -->
            
            </div><!-- row -->
            
        </div><!-- container -->
        
        <script src="js/jquery-1.12.1.min.js"></script>
        <script src="css/bootstrap/js/bootstrap.js"></script>
    </body>

</html>