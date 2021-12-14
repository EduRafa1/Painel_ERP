$(function(){
	let minificado = false;
	var windowSize = $(window)[0].innerWidth;
	$(window).resize(function(){
		windowSize = $(window)[0].innerWidth;
	});
	
	verificatela();
	//Abrir submenu Lateral

	$('#painel').click(function(){
		$('.submenu-painel').slideToggle();
	});
	$('#cadastro').click(function(){
		$('.submenu-cadastro').slideToggle();
	});
	$('#compra').click(function(){
		$('.submenu-compra').slideToggle();
	});
	$('#venda').click(function(){
		$('.submenu-venda').slideToggle();
	});
	$('#expedicao').click(function(){
		$('.submenu-expedicao').slideToggle();
	});
	$('#fiscal').click(function(){
		$('.submenu-fiscal').slideToggle();
	});
	$('#servico').click(function(){
		$('.submenu-servico').slideToggle();
	});
	$('#financeiro').click(function(){
		$('.submenu-financeiro').slideToggle();
	});
	$('#gerencial').click(function(){
		$('.submenu-gerencial').slideToggle();
	});
	//VAlor Width da tela


	//Recolher Menu

	$('#recolher-menu').click(function(){
		$('section.menu').animate({'width':'0'});
		$('.abrir-menu').css({'display':'block'});
		$('main').animate({'width':'100%'});
		
	})
	$('#abrir-menu').click(function(){
		if (minificado == false) {
			$('section.menu').animate({'width':'240px'});
			$('main').css('width','calc(100% - 240px)');
			setTimeout(function() {
			$('.abrir-menu').css({'display':'none'});
			}, 400);
		}
		if (minificado == true) {
			$('section.menu').animate({'width':'50px'});
			$('main').css('width','calc(100% - 50px)');
			setTimeout(function() {
			$('.abrir-menu').css({'display':'none'});
			}, 400);
		}
		
	})
	//Menu Minificado

	$('#menu-minificado').click(function(){
		if (windowSize <= 600) {
			if (minificado == false) {
				$('section.menu').animate({'width':'50px'});
				$('main .main-conteudo').animate({'padding-left':'10px'});
				$('main .main-conteudo').animate({'width':'100%'});
				minificado = true;
				return;
			}
			if (minificado == true) {
				$('section.menu').animate({'width':'240px'});
				$('main .main-conteudo').animate({'padding-left':'200px'});
				$('main .main-conteudo').css({'width':'calc(100% + 240px)'});
			
				minificado = false;
				return;
			}
		}

		if (windowSize > 600) {
			if (minificado == true) {
				$('section.menu').animate({'width':'240px'});	
				$('main').css('width','calc(100% - 240px)');
				minificado = false;
				return;
			}
			if (minificado == false) {
				$('section.menu').animate({'width':'50px'});	
					$('main').css('width','calc(100% - 50px)');
				minificado = true;
				return;
			}
		}
	})

	

	//Quando da resize na tela
	
		$(window).resize(function(){	
				if (windowSize <= 600) {
				
					$('main').css('width','calc(100% - 50px)');
					$('section.menu').css({'width':'50px'});
					minificado = true;
					
				}
				if (windowSize >= 600) {
					
					$('main').css('width','calc(100% - 240px)');
					$('section.menu').css({'width':'240px'});
					minificado = false;
				}
			
		});
	
	

	//Quando entra na tela 
	function verificatela(){
		
		if (windowSize <= 600) {
			$('section.menu').animate({'width':'50px'});
			$('main').css('width','calc(100% - 50px)');
			minificado = true;
			
		}
		if (windowSize > 600) {
			$('section.menu').animate({'width':'240px'});
			$('main').css('width','calc(100% - 240px)');
			minificado = false;
			
		}
		return;
	}


})