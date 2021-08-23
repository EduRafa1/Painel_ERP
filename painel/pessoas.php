
<div class="main-title">
		<h1><i title="Pessoas" class="fas fa-user"></i> Cadastro de Pessoas</h1>
</div>
<div class="main-box">
	<span>Consultar:</span>
	<div class="search">
		<input  class="w100 left" type="text" name="buscador" placeholder="Consultar">
		<a href="#"><i class="fas fa-search "></i></a>
		<div class="clear"></div>
	</div>
	<div class="options">
		<div btnAcao="pessoas" class="options-box">
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
<div class="main-fixed" id="pessoas">
	<div class="box-fixed2 box-fixed">
		<div class="title-fixed">
			<h2>Inserindo nova Pessoa</h2>
		</div><!--title-fixed-->
		<form method="post">
		<div class="conteudo-fixed" id="conteudo-fixed-1" >	
				<div class="w15 left">
					<div class="container-input left">
						<label>IDPESSOA</label>
						<input name="id" type="text" name="">
					</div><!--container-input-->
				</div><!--boot w25-->
				<div class="w30 left ">
					<div class="container-input ">
						<label>Razão Social</label>
						<input name="razao_social" type="text" name="">
					</div><!--container-input-->
				</div><!--boot w50-->
				<div class="w30 left ">
					<div class="container-input ">
						<label>Nome Fantasia</label>
						<input name="nome_fantasia" type="text" name="">
					</div><!--container-input-->
				</div><!--boot w25-->
				<div class="w25 left ">
					<div class="container-input ">
						<label>Cliente desde</label>
						<input name="cliente_date" type="date" name="">
					</div><!--container-input-->
				</div><!--boot w25-->
				<div class="clear"></div>
				<div class="w20 left">
					<div class="container-input left ">
						<label>CEP</label>
						<input name="cep" type="text" name="">
					</div><!--container-input-->
				</div><!--boot w15-->
				<div class="w30 left ">
					<div class="container-input ">
						<label>Endereço</label>
						<input name="endereco" type="text" name="">
					</div><!--container-input-->
				</div><!--boot w30-->
				<div class="w10 left">
					<div class="container-input ">
						<label>Nº</label>
						<input name="numero_casa" type="text" name="">
					</div><!--container-input-->
				</div><!--boot w10-->
				<div class="w40 left">
					<div class="container-input right ">
						<label>Bairro</label>
						<input name="bairro" type="text" name="">
					</div><!--container-input-->
				</div><!--boot w40-->
				<div class="clear"></div>
				<div class="w33 left">
					<div class="container-input left ">
						<label>Complemento</label>
						<input name="complemento" type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="w33 left">
					<div class="container-input  ">
						<label>Cidade</label>
						<input name="cidade" type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="w33 left">
					<div class="container-input right ">
						<label>UF</label>
						<input name="uf" type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="clear"></div>		
		</div><!--conteudo-fixed-->
		<div class="conteudo-fixed" id="conteudo-fixed-2" style="display: none">	
				<div class="w15 left">
					<div class="container-input left">
						<label>IDPESSOAs</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w25-->
				<div class="w30 left ">
					<div class="container-input ">
						<label>Razão Social</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w50-->
				<div class="w30 left ">
					<div class="container-input ">
						<label>Nome Fantasia</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w25-->
				<div class="w25 left ">
					<div class="container-input ">
						<label>Cliente desde</label>
						<input type="date" name="">
					</div><!--container-input-->
				</div><!--boot w25-->
				<div class="clear"></div>
				<div class="w20 left">
					<div class="container-input left ">
						<label>CEP</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w15-->
				<div class="w30 left ">
					<div class="container-input ">
						<label>Endereço</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w30-->
				<div class="w10 left">
					<div class="container-input ">
						<label>Nº</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w10-->
				<div class="w40 left">
					<div class="container-input right ">
						<label>Bairro</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w40-->
				<div class="clear"></div>
				<div class="w33 left">
					<div class="container-input left ">
						<label>Complemento</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="w33 left">
					<div class="container-input  ">
						<label>Cidade</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="w33 left">
					<div class="container-input right ">
						<label>UF</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="clear"></div>		
		</div><!--conteudo-fixed2-->
		<div class="footer-fixed">
			<div class="footer-button-fixed" >
				<i for = "salvar" class="fas fa-check"> <input id="salvar" id="salvar" type="submit" name="salvar" value="Salvar"></i>		
			</div><!--footer-button-fixed-->
			<div btnAcao="fecharFixed" class="footer-button-fixed" >
				<i class="fas fa-times"> <span>Sair</span></i>
			</div><!--footer-button-fixed-->
			<div btnAcao="continuar-form" class="footer-button-fixed right" >
				<i class="fas fa-arrow-right"> <span>Avançar</span></i>		
			</div><!--footer-button-fixed-->
		</div><!--footer-fixed-->
		</form><!--Form method Post-->
	</div><!--box-fixed-->
</div><!--main-fixed-->
<!--Script da Pagina "CONDICAO DE PAGAMENTO" -->
<script src="js/botoes.js"></script><!--Botoes da Pagina -->
<script src="js/validaCampo.js"></script><!--Scripts de Validação dos input do formulário -->
