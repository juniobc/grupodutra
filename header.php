<!DOCTYPE html>
<html ang="en">
    
    <head>
        <meta charset="utf-8">
        <title>MDI</title>
        <meta name="description" content="">
        <meta name="author" content="">
        
        
        <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        
        <?php
            if (isset($css) && is_array($css))
              foreach ($css as $path)
                printf('<link rel="stylesheet" type="text/css" href="%s" />', $path);
        ?>
        
        <script src="js/jquery-1.12.1.min.js"></script>
        <script src="css/bootstrap/js/bootstrap.js"></script>
        
        
    </head>
    

    <body>
        
        <div class="container" style="margin-top:41px">
            <div class="row">
                <div class="col-xs-12">
                
                    <div class="row" style="margin-bottom:40px;">
                        <div class="col-xs-3"><img src="img/logomarca.png"></div>
                        <div class="col-xs-8 col-xs-offset-1">
                            <div class="row" style="margin-top:35px;">
                                <div class="col-xs-4">
                                    <p style="font-size:19px"><img src="img/telefone.png"><font face="verdana" color="#003862">TELEFONE:</br>(62) 4101-0528</font></p>
                                </div>
                                <div class="col-xs-4">
                                    <p style="font-size:19px"><font face="verdana" color="#003862">ATENDIMENTO </br>ONLINE</font>&nbsp;<img src="img/clickaqui.png"></p>
                                </div>
                                <div class="col-xs-4">
                                    <p style="font-size:19px"><img src="img/whatsapp.png"><font face="verdana" color="#003862">WHATSAPP</br>(62) 8101-0983</font></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        </div>
                        
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
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
                        <li><a href="index.php"><p class="divider-vertical">Inicio</p></a></li>
                        <li><a href="empresa.php" ><p class="divider-vertical">Empresa</p></a></li>
                        <li><a href="produtos.php" ><p class="divider-vertical">Imoveis</p></a></li>
                        <li><a href="servicos.php" ><p class="divider-vertical">Serviços</p></a></li>
                        <li><a href="contato.php" ><p>Contato</p></a></li>
                        </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                    </div>