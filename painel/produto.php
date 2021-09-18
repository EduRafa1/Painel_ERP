
<div class="main-title">
		<h1><i title="Produto" class="fas fa-box"></i> Cadastro de Produtos</h1>
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
	<div class="box-fixed2 box-fixed">
		<div class="title-fixed">
			<h2>Novo Produto</h2>
		</div><!--title-fixed-->
		<form method="post">
		<div class="conteudo-fixed" id="conteudo-fixed-1" >	
			<div class="conteudo-fixed-wraper">
				<div class="w15 left">
					<div class="container-input left">
						<label>IDPRODUTO</label>
						<input name="id" type="text" name="">
					</div><!--container-input-->
				</div><!--boot w15-->
				<div class="w60 left ">
					<div class="container-input ">
						<label>Descrição</label>
						<input name="razao_social" type="text" name="">
					</div><!--container-input-->
				</div><!--boot w70-->
				<div class="w20 left ">
					<div class="container-input w70 ">
						<label>Unidade</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w15-->
				<div class="w5 left ">
					<div class="container-input container-input-espaco" >
						<p class="espaco"></p>
						<input type="button" name="" value="+">
					</div><!--container-input-->
				</div><!--boot w15-->

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
						<input name="cep" type="text" id="cep">
					</div><!--container-input-->
				</div><!--boot w15-->
				<div class="w30 left ">
					<div class="container-input ">
						<label>Endereço</label>
						<input name="endereco" type="text" id="rua">
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
						<input name="bairro" type="text" id="bairro">
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
						<input name="cidade" type="text" id="cidade">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="w33 left">
					<div class="container-input right ">
						<label>UF</label>
						<input name="uf" type="text" id="uf">
					</div><!--container-input-->
				</div><!--boot w33-->
			</div><!--conteudo-fixed-wraper-->
			<div class="clear"></div>		
		</div><!--conteudo-fixed-->
		<div class="conteudo-fixed" id="conteudo-fixed-2" >	
			<div class="conteudo-fixed-wraper">
				<div class="w25 left">
					<div class="container-input right ">
						<label>Telefone 1</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="w25 left">
					<div class="container-input right ">
						<label>Telefone 2</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="w25 left">
					<div class="container-input right ">
						<label>Telefone 3</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="w25 left">
					<div class="container-input right ">
						<label>Telefone 4</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="clear"></div>


				<div class="box-select-fixed">
					<div class="box-select-button">
						<span btnAcao="PessoaFisica" class="button-select">Pessoa Fisica</span>
						<span btnAcao="PessoaJuridica" >Pessoa Juridica</span>
					</div><!--box-select-button-->
					<div class="clear"></div>
					<div class="box-select-1 box-selected-single" id="PessoaFisica">
						<div class="w50 left">
							<div class="container-input right w33 box-select-1">
								<label>CPF</label>
								<input type="text" name="">
							</div><!--container-input-->
						</div><!--boot w33-->
						<div class="w50 left">
							<div class="container-input right w33 box-select-1">
								<label>RG</label>
								<input type="text" name="">
							</div><!--container-input-->
						</div><!--boot w33-->
					</div><!--box-select-1-->

					<div class="box-select-2 box-selected-single" id="PessoaJuridica" >
						<div class="w25 left">
							<div class="container-input right box-select-1">
								<label>CNPJ</label>
								<input type="text" name="">
							</div><!--container-input-->
						</div><!--boot w33-->
						<div class="w25 left">
							<div class="container-input right box-select-1">
								<label>Insc.Estadual</label>
								<input type="text" name="">
							</div><!--container-input-->
						</div><!--boot w33-->
						<div class="w25 left">
							<div class="container-input right box-select-1">
								<label>Suframa</label>
								<input type="text" name="">
							</div><!--container-input-->
						</div><!--boot w33-->
						<div class="w25 left">
							<div class="container-input right box-select-1">
								<select>
									<option>Mei/Simples</option>
									<option disabled>Lucro Presumido/Lucro Real</option>
								</select>
							</div><!--container-input-->
						</div><!--boot w33-->
					</div><!--box-select-2-->
					<div class="clear"></div>		
				</div><!--box-select-fixed-->
				<div class="w33 left">
					<div class="container-input right ">
						<label>E-mail Principal</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="w33 left">
					<div class="container-input right ">
						<label>Site</label>
						<input type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="w33 left">
					<div class="container-input right ">
						<label>Grupo</label>
						<input  type="text" name="">
					</div><!--container-input-->
				</div><!--boot w33-->
				<div class="clear"></div>
				<div class="box-select-fixed">
					<div class="box-select-button">
						<span btnAcao="Relacionamento" class="button-select">Relacionamento</span>
						<span btnAcao="Venda_Compra">Venda/Compra</span>
						<span btnAcao="Financeiro">Financeiro</span>
						<span btnAcao="Observacao">Observação</span>


					</div><!--box-select-button-->
					<div class="clear"></div>
					<div class="box-select-1 box-selected-single" id="Relacionamento">
						<div class="container-checkbox">
							<input id="cliente" type="checkbox" name="lembrar">
							<label for="cliente">Cliente</label>
							<input id="fornecedor" type="checkbox" name="lembrar">
							<label for="fornecedor">Fornecedor</label>
							<input id="funcionario" type="checkbox" name="lembrar">
							<label for="funcionario">Funcionario</label>
							<input id="colaborador" type="checkbox" name="lembrar">
							<label for="colaborador">Colaborador</label>
							<input id="transportadora" type="checkbox" name="lembrar">
							<label for="transportadora">Transportadora</label>
							<input id="tecnico" type="checkbox" name="lembrar">
							<label for="tecnico">Técnico</label>
							<input id="vendedor" type="checkbox" name="lembrar">
							<label for="vendedor">Vendedor</label>
							<input id="representante" type="checkbox" name="lembrar">
							<label for="representante">Representante</label>
						</div><!--container-checkbox-->
					</div><!--box-select-1-->

					<div class="box-select-2 box-selected-single" id="Venda_Compra" >
						<div class="w25 left">
							<div class="container-input right box-select-1">
								<label>Option1 venda</label>
								<input type="text" name="">
							</div><!--container-input-->
						</div><!--boot w33-->
						<div class="w25 left">
							<div class="container-input right box-select-1">
								<label>Option2 venda</label>
								<input type="text" name="">
							</div><!--container-input-->
						</div><!--boot w33-->
					</div><!--box-select-2-->
					<div class="box-select-2 box-selected-single" id="Financeiro" >
						<div class="w25 left">
							<div class="container-input right box-select-1">
								<label>Option1 Financeiro</label>
								<input type="text" name="">
							</div><!--container-input-->
						</div><!--boot w33-->
						<div class="w25 left">
							<div class="container-input right box-select-1">
								<label>Option2 Financeiro</label>
								<input type="text" name="">
							</div><!--container-input-->
						</div><!--boot w33-->
					</div><!--box-select-2-->
					<div class="box-select-2 box-selected-single" id="Observacao" >
						<div class="w25 left">
							<div class="container-input right box-select-1">
								<label>Option1 Observacao</label>
								<input type="text" name="">
							</div><!--container-input-->
						</div><!--boot w33-->
						<div class="w25 left">
							<div class="container-input right box-select-1">
								<label>Option2 observacao</label>
								<input type="text" name="">
							</div><!--container-input-->
						</div><!--boot w33-->
					</div><!--box-select-2-->
					<div class="clear"></div>		
				</div><!--box-select-fixed-->
			</div><!--conteudo-fixed-wreaper-->
			<div class="clear"></div>

		</div><!--conteudo-fixed2-->
		<div class="footer-fixed">
			
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
<script src="js/cepAutomatico.js"></script><!--Scripts de Validação dos input do formulário -->
