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
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Template &middot; Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        
        
        <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        
        <style type="text/css">
            
            .tales {
              width: 100%;
            }
            .carousel-inner{
              width:100%;
              max-height: 350px !important;
            }
            
        </style>
        
        
        
    </head>
    

    <body>
        
       <div class="container">

            <div class="masthead">
                <ul class="nav nav-pills pull-right">
                <li class="active"><a href="#">INICIO</a></li>
                <li><a href="#">EMPRESA</a></li>
                <li><a href="#">CASAS</a></li>
                <li><a href="#">SERVIÇOS</a></li>
                <li><a href="#">CONTATOS</a></li>
                </ul>
                <h3 style='color:#344B71' class="muted">CADASTRO DE FOTOS</h3>
            </div>
            
            <hr>
            
            <div class="row">
            
              <div class="col-md-4">
              <form>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Nome da Tela</label>
                  <input type="text" class="form-control" id="dsTela" placeholder="Tela">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Titulo</label>
                  <input type="text" class="form-control" id="dsTitulo" placeholder="Titulo">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Descrição</label>
                  <textarea class="form-control" rows="4"></textarea>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">Imagem</label>
                  <input type="file" id="exampleInputFile">
                  <!--<p class="help-block">Example block-level help text here.</p>-->
                </div>
                
                <button type="submit" class="btn btn-default">Cadastrar</button>
              </form>
              
              </div>
          
            </div>
            

            
            <div class="footer">
                <p>&copy; Company 2013</p>
            </div>

        </div>
        
        <script src="js/jquery-1.12.1.min.js"></script>
        <script src="css/bootstrap/js/bootstrap.js"></script>
    </body>

</html>