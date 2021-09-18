
<div class="main-title">
		<h1><i title="Plano de Conta" class="fas fa-chart-line"></i> Plano de Conta</h1>
</div>
<div class="main-box">
	<span>Consultar:</span>
	<div class="search">
		<input  class="w100 left" type="text" name="buscador" placeholder="Consultar">
		<a href="#"><i class="fas fa-search "></i></a>
		<div class="clear"></div>
	</div>
	<div class="options">
		<div btnAcao="novo" class="options-box">
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
<div class="main-fixed" id="novo">
	<div class="box-fixed">
		<div class="title-fixed">
			<h2>Insira o plano de conta</h2>
		</div><!--title-fixed-->
		<form method="post">
		<div class="conteudo-fixed">	
				<div class="w20 left">
					<div class="container-input">
						<label>IDP. Conta</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w25-->
				<div class="w40 left">
					<div class="container-input left">
						<label>Plano de conta</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w50-->
				<div class="w40 left">
					<div class="container-input left">
						<label>Tipo de plano de conta</label>
						<select class="plano-de-conta">
							<option selected disabled>Selecionar</option>
							<option>Receita</option>
							<option>Despesa</option>
						</select>
					</div><!--container-input-->
				</div><!--boot w50-->
				<div class="w100 left">
					<div class="container-input left">
						<label>DRE</label>
						<select class="plano-de-conta">
							<option selected disabled>Selecionar</option>
							<option>Receita Operacional Bruto</option>
							<option>Deduções da Receita Bruta</option>
							<option>Outras Receitas Operacionais</option>
							<option>Despesas Operacionais</option>
							<option>Despesas Gerais e Administrativas</option>
							<option>Despesas Financeiras</option>
							<option>(-) Despesas não operacionais</option>
						</select>
					</div><!--container-input-->
				</div><!--boot w50-->
				
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
