
<div class="main-title">
		<h1><i title="Condição de Pagamento" class="fas fa-comments-dollar"></i> Condição de Pagamento</h1>
</div>
<div class="main-box">
	<span>Consultar:</span>
	<div class="search">
		<input  class="w100 left" type="text" name="buscador" placeholder="Consultar">
		<a href="#"><i class="fas fa-search "></i></a>
		<div class="clear"></div>
	</div>
	<div class="options">
		<div btnAcao="novoCondicaoPagamento" class="options-box">
			<a><i class="far fa-file"></i> Novo</a>
		</div><!--option-box-->
		<div class="options-box">
			<a href="#"><i class="fas fa-edit"></i> Alterar</a>
		</div><!--option-box-->
		<div class="options-box">
			<a href="#"><i class="fas fa-times"></i> Excluir</a>
		</div><!--option-box-->
	</div><!--options-->
</div><!--main-box-->
<div class="main-fixed" id="condicaoPagamento">
	<div class="box-fixed">
		<div class="title-fixed">
			<h2>Inserir nova condição de pagamento</h2>
		</div><!--title-fixed-->
		<form method="post">
		<div class="conteudo-fixed">	
				<div class="w25 left">
					<div class="container-input">
						<label>IDCODPAG</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w25-->
				<div class="w75 right center">
					<div class="container-input right">
						<label>Condição de Pagamento</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w75-->
				<div class="w20 left center">
					<div class="container-input">
						<label>Parcelas</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w20-->
				<div class="w20 left center">
					<div class="container-input">
						<label>Juros</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w20-->
				<div class="w30 left center">
					<div class="container-input right">
						<label>INT. PAG</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w30-->
				<div class="w30 left center">
					<div class="container-input right">
						<label>INT. 1º PAG</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w30-->
				<div class="w90 left center">
					<div class="container-input left">
						<label>Forma de Pagamento</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w85-->
				<div class="w10 left center">
					<div class="container-input right">
						<button><i class="fas fa-plus"></i></button>
					</div><!--container-input-->
				</div><!--boot w15-->
				<div class="clear"></div>		
		</div><!--conteudo-fixed-->
		<div class="footer-fixed">
			<div class="footer-button-fixed" >
				<i for = "salvar" class="fas fa-check"> <input id="salvar" id="salvar" type="submit" name="salvar" value="Salvar"></i>		
			</div><!--footer-button-fixed-->
			<div btnAcao="fecharFixed" class="footer-button-fixed" >
				<i class="fas fa-times"> Sair</i>
			</div><!--footer-button-fixed-->
		</div><!--footer-fixed-->
		</form><!--Form method Post-->
	</div><!--box-fixed-->
</div><!--main-fixed-->
<!--Script da Pagina "CONDICAO DE PAGAMENTO" -->
<script src="js/botoes.js"></script><!--Botoes da Pagina -->
