$(function(){
	//Fechar
	
	$('[btnAcao=fecharFixed]').click(function(){
		$('.main-fixed').fadeOut();
	});
	//Pega o valor da key digitada no teclado
	let KEYCODE_ESC = 27; // Tecla ESC 
   	$(document).keyup(function(e) { 
    if (e.which == KEYCODE_ESC){
    	$('.main-fixed').fadeOut();	
    }    
});
	//Abrir
	$('[btnAcao=novoCondicaoPagamento]').click(function(){
		$('#condicaoPagamento').fadeIn();
	});

	$('[btnAcao=novoFormaDePagamento]').click(function(){
		$('#novoFormaDePagamento').fadeIn();
	});

	$('[btnAcao=funcao]').click(function(){
		$('#funcao').fadeIn();
	});
	$('[btnAcao=pessoas]').click(function(){
		$('#pessoas').fadeIn();
	});

	//Acao de avancar o form

	
})