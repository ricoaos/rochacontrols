$(document).ready(function(){
	
	$("#num_cep").mask('99.999-999');
    $("#id_cliente,#id_ativo,#num_logradouro,#ds_complemento,#ds_logradouro,#ds_bairro,#ds_cidade,#ds_uf").attr('readonly',true).css({'background':'#F0F0F0'});
    
    $('#tp_pessoa').change(function(){
        if($(this).val()=='F'){
            $("#num_cpf_cnpj").mask("999.999.999-99");
        }else{
            $("#num_cpf_cnpj").mask("99.999.999/9999-99");
        }
    });

    $('#tp_pessoa').click(function(){
        $("#num_cpf_cnpj").val('');
    });
   
    //Realiza a busca de nomes similares ao digitado.
    /*$("#st_nome").change(function(){    	
    	$.ajax({
        	url: baseUrl+'/cliente/cliente/getregistrosimilar',
        	data: 'nome='+$("#st_nome").val(),
            dataType: 'json',
            type:"POST",
            success: function(response){
				
            	var objResult = response.result;
            	var linha= "";
            	
            	if(objResult != ''){
            		           		
            		linha += '<div class="panel-body">';
            		linha += '<table class="table table-striped table-hover table-fixed-layout non-responsive">';
            		linha += '<tbody>';
            		            		
            		$.each(objResult, function(i, item){
	            		var imagem = item.id_foto != 1 ? baseUrl+'/assets/img/user.png' : baseUrl+'/img/fotos/usuario/'+item.id_pessoa+'.png';
	            		var url = baseUrl+'/cliente/cliente/index/id_similar/'+btoa(item.dt_nascimento+'@'+item.id_pessoa);
	            		linha += '<tr>';
	            		linha +=   '<td class="email-subject input-mini">';
	            		linha +=   		'<a href="'+url+'"><img width="50" class="chat-avatar" src="'+imagem+'"></a>';
	            		linha +=   '</td>';
	            		linha +=   	'<td class="email-subject input-mini">';
	            		linha +=        '<span class="help-block">Registro</span>';
	            		linha +=   		'<label class="checkbox">'+item.id_pessoa+'</label>';
         				linha +=   '</td>';
	            		linha +=   	'<td class="email-subject">';
	            		linha +=        '<span class="help-block">Cliente</span>';
	            		linha +=   		'<label class="checkbox">'+item.st_nome+'</label>';
         				linha +=   '</td>';
	            		linha +=   	'<td class="email-subject">';
	            		linha +=        '<span class="help-block">CPF</span>';
	            		linha +=   		'<label class="checkbox">'+item.st_cpf+'</label>';
         				linha +=   '</td>';
	            		linha +=   	'<td class="email-subject">';
	            		linha +=        '<span class="help-block">Data Nascimento</span>';
	            		linha +=   		'<label class="checkbox">'+item.dt_nascimento+'</label>';
         				linha +=   '</td>';
         				linha +=   	'<td class="email-subject">';
         				linha +=        '<span class="help-block">Cadastrado em</span>';
	            		linha +=   		'<label class="checkbox">'+item.dt_cadastro+'</label>';
         				linha +=   '</td>';
	            		linha += '</tr>';
					});
	            	
	            	linha += '</tbody>';		
	            	linha += '</table>';
	            	linha += '<div>';
	            	
					$("#RegSimilar").html(linha);
					$("#modalSimilar").modal();
            	}
            }
        });
	});  */	
    
	$("#num_cep").change(function(){
        var cep = $(this).val().replace(/\D/g,"");
        if($(this).val() != ''){
            $.ajax({
                url : 'https://viacep.com.br/ws/'+cep+'/json/',
                dataType: 'json',
                success: function(response){
                    var objResult = response;
                    if(objResult.resultado != 0){
                        $("#num_logradouro,#ds_complemento,#ds_logradouro").attr('readonly',false).css({'background':'#FFF'});
                        $('#ds_logradouro').val(objResult.logradouro);
                        $('#ds_bairro').val(objResult.bairro);
                        $('#ds_cidade').val(objResult.localidade);
                        $('#ds_uf').val(objResult.uf);
                        $("#ds_municipio").val(objResult.ibge);
                        $("#num_logradouro").focus();
                    }else{
                        alert(objResult.resultado_txt);
                        $("#num_cep").val('').focus();
                    }
                },
                error: function (request, status, erro) {
                    alert(request.responseText);
                    alert("Problema ocorrido: " + status + "\nDescição: " + erro);
                    alert("Informações da requisição: \n" + request.getAllResponseHeaders());
                }
            });
        }
    });
	
	$("#num_cep").click(function(){
        $("#num_logradouro,#ds_complemento,#ds_logradouro,#ds_bairro,#ds_cidade,#ds_uf").attr('readonly',true).css({'background':'#F0F0F0'}).val('');
        $("#num_cep").val('');
    });
	 
});
