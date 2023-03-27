
/* VARIÁVEL GLOBAL DA URL */

	url = "http://localhost/creathusflix/";


/* ----------------------------- FUNÇÃO PARA EXIBIR A FALERIA PREMIUM --------------------------------- */
    
	
          function func_seleciona_filme_por_scategoria(){

          		var codigo_categoria = document.getElementById("codigo_categoria").value;

          		if(codigo_categoria != "-"){          	
			 
					var destino = "ajax_lista_filmes_por_categoria.php?codigo_categoria="+codigo_categoria;				
	             
	              $.get(destino, function(dataReturn) {
	                $('#lista_filme').html(dataReturn);
	              });
	            }
			
          }
		  
/* ----------------------------------------------------------------------------------------- */


/* ----------------------------- FUNÇÃO PARA EXIBIR A SINOPE DO FILME --------------------------------- */
    
	
          function mais_informacoes(codigo_filme){

          		//var codigo_categoria = document.getElementById("codigo_categoria").value;

          		if(codigo_filme != ""){          	
			 
					var destino = "sinopse.php?codigo_filme="+codigo_filme;				
	             
	             	window.location.replace(destino);
	            }
			
          }
		  
/* ----------------------------------------------------------------------------------------- */        


/* ----------------------------- FUNÇÃO PARA CONFIRMAR A EXCLUSÃO DE UM FILME --------------------------------- */
    

		function confirmar_exclusao(codigo_filme) {
		     
		     var resposta = confirm("Deseja continuar com a exclusão?");
		     
		     if (resposta == true) {
		     
		          window.location.href = "excluir.php?codigo_filme="+codigo_filme;
		     }
		}


/* ----------------------------------------------------------------------------------------- */        