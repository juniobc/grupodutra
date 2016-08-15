<?php 

$erro_msg = null;

$con = pg_connect("host=localhost dbname=grupodutra user=ubuntu password=postgres");

$segmentos = pg_query("SELECT * FROM t001");

/*if  (!$result) {
    echo "query did not execute";
}
if (pg_num_rows($result) == 0) {
    echo "0 records";
} else {
    
    while ($row = pg_fetch_assoc($result)) {
        echo $row['url_seg'].'</br>';
    }
}*/


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
        <script src="js/admin.js"></script>
        
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

        
        <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
        
        
    </head>
    
    <body>
        <div class='container'>
            
            <script language=javascript src='http://honline.atendimentogratis.com.br/honline.asp?id=40601&s=44077&i=7&on=http://&off=http://'></script>
            
            <a href='http://honline.atendimentogratis.com.br/honline.asp?id=40601&s=44077&i=7&on=http://&off=http://'>Atendimento Online.</a>
            
            <nav class="navbar navbar-default">
              <div class="container-fluid">
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Cadastrar Produto</a></li>
                    <li><a href="lista-produtos.php">Listar Produtos</a></li>
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
                            
                            <div class="form-group div_prod">
                                
                                <label for="sel_classe" class="col-xs-2 control-label">Titulo: </label>
                                
                                <div class="col-xs-10">
                
                                    <input id="tl_prod" type='text' class="form-control" />
                                
                                </div>
                                
                            </div>
                            
                            <div class="form-group div_prod">
                                
                                <label for="txt_desc" class="col-xs-2 control-label">Descrição: </label>
                                
                                <div class="col-xs-10">
                            
                                    <textarea id='desc_prod'class="form-control" rows="<5></5>"></textarea>
                                
                                </div>
                            
                            </div>
<?php
                    
                    }
                
?>
        
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-xs-9 col-xs-offset-2">
                        
                        <div class="form-group div_prod">
                            
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div id='img1' class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                      
                                  </div>
                                  <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new">Imagem</span>
                                        <span class="fileinput-exists">Mudar</span>
                                        <input type="file">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                                  </div>
                                </div>

                            </div>
                            
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div id='img2' class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                  <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new">Imagem</span>
                                        <span class="fileinput-exists">Mudar</span>
                                        <input type="file">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                                  </div>
                                </div>

                            </div>
                            
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div id='img3' class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                  <div>
                                   <span class="btn btn-default btn-file">
                                        <span class="fileinput-new">Imagem</span>
                                        <span class="fileinput-exists">Mudar</span>
                                        <input type="file">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                                  </div>
                                </div>

                            </div>
                            
                            
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div id='img4' class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                  <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new">Imagem</span>
                                        <span class="fileinput-exists">Mudar</span>
                                        <input type="file">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                                  </div>
                                </div>

                            </div>
                            
                            
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div id='img5' class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                  <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new">Imagem</span>
                                        <span class="fileinput-exists">Mudar</span>
                                        <input type="file">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                                  </div>
                                </div>

                            </div>
                            
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div id='img6' class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                  <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new">Imagem</span>
                                        <span class="fileinput-exists">Mudar</span>
                                        <input type="file">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                                  </div>
                                </div>

                            </div>
                            
                            </div>
                        
                        
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-xs-5 col-xs-offset-5 ">
                        
                        <div class="form-group div_prod center-block">
                        
                            <button id="incluir" type="submit" class="btn btn-primary">Incluir</button>
                        
                        </div>
                        
                    </div>
                    
                </div>
            
            </form>
        
        </div>
        
    </body>
    
</html>