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
	
	$('[btnAcao=planoDeConta]').click(function(){
		$('#planoDeConta').fadeIn();
	});

	//Acao de selecionar ´PESSOA´ fisica e juridica 
	$('[btnAcao=PessoaFisica]').click(function(){
		$(this).addClass('button-select');
		$('#PessoaJuridica').css('display','none');
		$('#PessoaFisica').fadeIn();
		$('[btnAcao=PessoaJuridica]').removeClass('button-select');		
	})
	$('[btnAcao=PessoaJuridica]').click(function(){
		$(this).addClass('button-select');
		
		$('#PessoaFisica').css('display','none') 
		$('#PessoaJuridica').fadeIn();
		$('[btnAcao=PessoaFisica]').removeClass('button-select');
	})
	//Segundo Selecionar `PESSOA` Relacionamento - VEnda/compra - Financeiro - Observação

	$('[btnAcao=Relacionamento]').click(function(){
		$(this).addClass('button-select');
		$('#Venda_Compra,#Financeiro,#Observacao').css('display','none')
		$('#Relacionamento').fadeIn();
		$('[btnAcao=Venda_Compra]').removeClass('button-select');
		$('[btnAcao=Financeiro]').removeClass('button-select');
		$('[btnAcao=Observacao]').removeClass('button-select');
	})
	$('[btnAcao=Venda_Compra]').click(function(){
		$(this).addClass('button-select');
		
		$('#Relacionamento,#Financeiro,#Observacao').css('display','none');
		$('#Venda_Compra').fadeIn();
		$('[btnAcao=Relacionamento]').removeClass('button-select');
		$('[btnAcao=Financeiro]').removeClass('button-select');
		$('[btnAcao=Observacao]').removeClass('button-select');
	})
	$('[btnAcao=Financeiro]').click(function(){
		$(this).addClass('button-select');
		
		$('#Relacionamento,#Venda_Compra,#Observacao').css('display','none');
		$('#Financeiro').fadeIn();
		$('[btnAcao=Relacionamento]').removeClass('button-select');
		$('[btnAcao=Venda_Compra]').removeClass('button-select');
		$('[btnAcao=Observacao]').removeClass('button-select');
	})
	$('[btnAcao=Observacao]').click(function(){
		$(this).addClass('button-select');
		
		$('#Relacionamento,#Venda_Compra,#Financeiro').css('display','none');
		$('#Observacao').fadeIn();
		$('[btnAcao=Relacionamento]').removeClass('button-select');
		$('[btnAcao=Venda_Compra]').removeClass('button-select');
		$('[btnAcao=Financeiro]').removeClass('button-select');
	})

	
})