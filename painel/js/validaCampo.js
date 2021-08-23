$(function(){
	$('[btnAcao=continuar-form]').click(function(){
		if (verificaCampo() == false) {
			return false;
		}else{
			$('#conteudo-fixed-1').fadeOut(1);
			$('#conteudo-fixed-2').fadeIn();
		}
	})

	function verificaCampo(){
		$value = $('input[name=id]').val();
		$value2 = $('input[type=date]').val();
		if ($value == '' || $value2 == '') {
			return false;
		}
	}
})