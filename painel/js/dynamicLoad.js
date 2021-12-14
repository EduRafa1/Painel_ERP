$(function(){
	dynamicLoad();

	function dynamicLoad(){
		$('[realtime]').click(function(){
			//Estilo pro menu lateral
			$('.box-menu').removeClass('selected');
			$(this).css('color','white !important');
			$(this).addClass('selected');

			//carrega pagina
			var page = $(this).attr('realtime');
			$('main .main-conteudo').load(page+'.php');
			return false;
		})

	}
})