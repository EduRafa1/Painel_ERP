$(function(){
	$('[btnAcao=continuar-form]').click(function(){
		if (verificaCampo() == false) {
			valorInvalido($('input[name="id"]'));
			return false;
		}
		if (verificaRazaoSocial() == false) {
			valorInvalido($('input[name="razao_social"]'));
			return false;
		}
		if (verificaNomeFantasia() == false) {
			valorInvalido($('input[name="nome_fantasia"]'));
			return false;
		}
		if (verificaData() == false) {
			valorInvalido($('input[name="date"]'));
			return false;
		}
		if (verificaCEP() == false) {
			valorInvalido($('input[name="cep"]'));
			return false;
		}
		if (verificaEndereco() == false) {
			valorInvalido($('input[name="endereco"]'));
			return false;
		}
		if (verificaNumero_casa() == false) {
			valorInvalido($('input[name="numero_casa"]'));
			return false;
		}
		if (verificaBairro() == false) {
			valorInvalido($('input[name="bairro"]'));
			return false;
		}
		if (verificaComplemento() == false) {
			valorInvalido($('input[name="complemento"]'));
			return false;
		}
		if (verificaCidade() == false) {
			valorInvalido($('input[name="cidade"]'));
			return false;
		}
		if (verificaUF() == false) {
			valorInvalido($('input[name="uf"]'));
			return false;
		}else{
			$('#conteudo-fixed-1').animate({'width':'0','padding':'20px 0'},function(){
				$('#conteudo-fixed-1').css('display','none');
				$('#conteudo-fixed-2').animate({'width':'100%'}).css('display','block');
			})
			
		}
	})

	function verificaCampo(){
		$value = $('input[name=id]').val();
		
		if ($value == '') {
			return false;
		}
	}
	function verificaData(){
		$value = $('input[name=date]').val();
		if ($value == '') {
			return false;
		}
	}
	function verificaRazaoSocial(){
		$value = $('input[name=razao_social]').val();
		if ($value == '') {
			return false;
		}
	}
	function verificaNomeFantasia(){
		$value = $('input[name=nome_fantasia]').val();
		if ($value == '') {
			return false;
		}
	}
	function verificaCEP(){
		$value = $('input[name=cep]').val();
		if ($value == '') {
			return false;
		}
	}
	function verificaEndereco(){
		$value = $('input[name=endereco]').val();
		if ($value == '') {
			return false;
		}
	}
	function verificaNumero_casa(){
		$value = $('input[name=numero_casa]').val();
		if ($value == '') {
			return false;
		}
	}
	function verificaBairro(){
		$value = $('input[name=bairro]').val();
		if ($value == '') {
			return false;
		}
	}
	function verificaComplemento(){
		$value = $('input[name=complemento]').val();
		if ($value == '') {
			return false;
		}
	}
	function verificaCidade(){
		$value = $('input[name=cidade]').val();
		if ($value == '') {
			return false;
		}
	}
	function verificaUF(){
		$value = $('input[name=uf]').val();
		if ($value == '') {
			return false;
		}
	}

	//Função de estilo

	function valorInvalido($value){
		$($value).css('border','1px solid red');
	}
		$('input[type=text]').click(function(){
			$(this).css('border','1px solid #666');
		})
	
})