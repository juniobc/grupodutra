<?php

 //echo json_encode($_POST['cd_seg']); {"a":1,"b":2,"c":3,"d":4,"e":5}

switch($_POST['tp_consulta']){
    
    case 'consulta_classe':
        echo consulta_classe($_POST['cd_seg']);
        break;
        
    case 'inclui_produto':
        
        $array_img = array(
            
            "img1" => $_POST['img1'],
            "img2" => $_POST['img2'],
            "img3" => $_POST['img3'],
            "img4" => $_POST['img4'],
            "img5" => $_POST['img5'],
            "img6" => $_POST['img6'],
        
        
        );
        
        echo inclui_produto($_POST['cd_classe'], $_POST['tl_prod'], $_POST['desc_prod'], $array_img);
        break;
    
}

function abre_banco(){
    return pg_connect("host=localhost dbname=grupodutra user=ubuntu password=postgres");
}

function inclui_produto($cd_classe, $tl_prod, $desc_prod, $array_img){
    
    $con = abre_banco();
    
    pg_query("BEGIN") or die("Could not start transaction\n");
    
    if(trim("".$cd_classe) == ""){
        retorna_msg(0, "Informe a classe!");
    }
    
    //if(trim("".$tl_prod) == ""){
    //    $tl_prod = "null";
    //}
    //
    //if(trim("".$desc_prod) == ""){
    //    $desc_prod = "null";
    //}
    
    pg_query(
        " insert into t007 (cd_classe, tl_prod, ds_prod, prod_dest) values(".$cd_classe.", '".strtoupper($tl_prod)."', '".strtoupper($desc_prod)."', false)"
    );
    
    $produto = pg_query(
        "select max(cd_prod) as cd_prod from t007"
    );
    
    while ($row = pg_fetch_assoc($produto)) {
            
        $cd_prod =  $row["cd_prod"];
        
    }
    
    foreach($array_img as $indice =>$valor){
        
        if(trim("".$valor) != ""){
            
            if($indice == "img1"){
                $img_prinp = "true";
            }else{
                $img_prinp = "false";
            }
            
            pg_query(
                "insert into t008 (cd_prod, prod_img, ds_prod, img_prinp) values(".$cd_prod.", '".$valor."', null, ".$img_prinp.")"
            );
            
        }
        
    }
    
    //pg_query("ROLLBACK") or die("Transaction rollback failed\n");
    
    pg_query("COMMIT") or die("Transaction commit failed\n");
    
    pg_close($con);
    
    return retorna_msg(1, "Produto Incluido com sucesso");
    
}

function consulta_classe($cd_seg){
    
    $con = abre_banco();
    
    $cont = 0;
    
    $classe = pg_query("SELECT * FROM t002 where seg_prinp = false and cd_seg = ".$cd_seg);
    
    pg_close($con);
    
    if (pg_num_rows($classe) == 0) {
        
        return json_encode(array('status' => 0, 'msg' => 'Nenhuma classe encontrada para este segmento'));
    }else{
    
        while ($row = pg_fetch_assoc($classe)) {
            
            $array_json[$cont] =  $row;
            
            $cont ++;
            
        }
        
        return json_encode(array('status' => 1, 'msg' => $array_json));
    
    }
    
}

function retorna_msg($status, $msg){
    return json_encode(array('status' => $status, 'msg' => $msg));
}

?>