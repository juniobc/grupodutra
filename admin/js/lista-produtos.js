$( document ).ready(function() {
    
    $("#sel_seg").change(function(){
        
        apaga_msg();
        
        if($(this).val() != "")
            consulta_classe();
        
    });
    
});

function consulta_classe(){
    
    var request = $.ajax({
      url: "controlador.php",
      method: "POST",
      data: {'tp_consulta' : 'consulta_classe', 'cd_seg' : $("#sel_seg").val() },
      dataType: "json",
      success: function(data){
        
        if(data.status == 0){
            
            $("#class_div").hide();
            $("#msg_erro").html(data.msg);
            $("#msg_erro").show();
            
        }else{
            
            $('#sel_classe').find('option').remove();
            
            $.each(data.msg, function(index, row) {
                
                $('#sel_classe').append($('<option>', { 
                    value: row['cd_classe'],
                    text : row['nm_classe']
                }));
                
            });
            
            $("#class_div").show();
            
        }
        
      }
    });
     
    request.fail(function( jqXHR, textStatus ) {
      $("#msg_erro").html(jqXHR.responseText);
      $("#msg_erro").show();
    });
    
}

function msg_erro(msg){
    
    $("#msg_erro").html(msg);
    $("#msg_erro").show();
    
}

function apaga_msg(){
    
    $("#msg_erro").hide();
    $("#msg_sucesso").hide();
    
}

function msg_sucesso(msg){
    
    $("#msg_sucesso").html(msg);
    $("#msg_sucesso").show();
}