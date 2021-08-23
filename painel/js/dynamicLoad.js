$(function(){
	dynamicLoad();

	function dynamicLoad(){
		$('[realtime]').click(function(){
			$(this).css('color','white !important');
			$(this).addClass('selected');
			var page = $(this).attr('realtime');
			$('main .main-conteudo').load(page+'.php');
			return false;
		})

	}
})