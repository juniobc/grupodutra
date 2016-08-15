<?php 

$erro_msg = null;

$con = pg_connect("host=localhost dbname=grupodutra user=ubuntu password=postgres");

$segmentos = pg_query("SELECT * FROM t001");


?>


<!DOCTYPE html>
<html ang="en">
    
    <head>
        <meta charset="utf-8">
        <title>Administrador</title>
        <meta name="description" content="">
        <meta name="author" content="">
        
        <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="css/admin.css">
        
        <script src="../js/jquery-1.12.1.min.js"></script>
        <script src="../css/bootstrap/js/bootstrap.js"></script>
        <script src="js/lista-produtos.js"></script>
        
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

        
        <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
        
        
    </head>
    
    <body>
        <div class='container'>
            
            <nav class="navbar navbar-default">
              <div class="container-fluid">
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="index.php">Cadastrar Produto</a></li>
                    <li class="active"><a href="lista-produtos.php">Listar Produtos</a></li>
                  </ul>
                  
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            
            
            <form class="form-horizontal">
                
                <div class="row">
                    
                    <div class="col-xs-5 col-xs-offset-3">
                        
                        <div id='msg_erro' class='alert alert-danger' role='alert'></div>
                        <div id='msg_sucesso' class='alert bg-success' role='alert'></div>
                        
<?php 
                        if(!$segmentos){
                        
                            $erro_msg = "<div class='alert alert-danger' role='alert'>Ocorreu um erro tente novamente mais tarde!</div>";
                        
                        }else if(pg_num_rows($segmentos) == 0){
                            $erro_msg = "<div class='alert alert-danger' role='alert'>Nenhum segmento cadastrado!</div>";
                        }else{
                    
                    
?>

                        
                            
                        <div class="form-group">
                            
                            <label for="sel_seg" class="col-xs-2 control-label">Segmento: </label>
                            
                            <div class="col-xs-10">
            
                                <select id='sel_seg' class="form-control">
                                    
                                    <option value="">SELECIONE UM SEGMENTO</option>
                                
<?php

                                    while ($row = pg_fetch_assoc($segmentos)) {
                                        
                                        echo "<option value='".$row['cd_seg']."'>".$row['nm_seg']."</option>";
                                        
                                    }

?>
                                
                                </select>
                            
                            </div>
                        
                        </div>
                        
                        <div id='class_div' class="form-group">
                            
                            <label for="sel_classe" class="col-xs-2 control-label">Classe: </label>
                            
                            <div class="col-xs-10">
            
                                <select id='sel_classe' class="form-control"></select>
                            
                            </div>
                        
                        </div>
                        
                    </div><!--col-xs-5 col-xs-offset-3-->
                    
                </div>
            
                <div id="products" class="row list-group">
                    
                    <div class="item  col-xs-4 col-lg-4">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">
                                    Product title</h4>
                                <p class="group inner list-group-item-text">
                                    Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <p class="lead">
                                            $21.000</p>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--item-->
                    
                </div><!--products-->
                
<?php
                    
                    }
                
?>
            
            </form>
        
        </div>
        
    </body>
    
</html>