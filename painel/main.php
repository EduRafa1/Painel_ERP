<?php 
	if (isset($_GET['sair'])) {
		Painel::logout();
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>|| PAINEL ERP ||</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_PAINEL?>css/style.min.css">
</head>
<body>
	<header>
		<div class="box-header">
			<li class=" right">
				<p class="desktop">Olá, admin <i class="fas fa-user"></i></p>
				<div class="header-menu-mobile">
					<p class="mobile">Admin <i class="fas fa-user"></i></p>
				</div><!--header-menu-mobile-->
			</li>
			<div class="  left">
				<a title="Sair" class="desktop" href="<?php echo INCLUDE_PATH_PAINEL ?>?sair"><i class="fas fa-external-link-alt"></i> Sair</a>
				<a title="Configuração" class="desktop" href=""><i class="fas fa-cog"></i> Configuração</a>
				<a title="Ajuda" class="desktop" href=""><i class="fas fa-comment-dots"></i> Ajuda</a>

				<div class="header-menu-mobile">
					<a title="Sair" class="mobile" href="<?php echo INCLUDE_PATH_PAINEL ?>?sair"><i class="fas fa-external-link-alt"></i> </a>
					<a title="Configuração" class="mobile" href=""><i class="fas fa-cog"></i> </a>
					<a title="Ajuda" class="mobile" href=""><i class="fas fa-comment-dots"></i> </a>
				</div><!--header-menu-mobile-->
			</div>
			<div class="clear"></div>
		</div><!--box-header-->
	</header>
	<section class="menu">
		<div class="container-menu">
		<div class="box-painel">
			<div id="painel" class="box-menu">
				<p><i title="Painel" class="fas fa-tachometer-alt"></i>Painel<p>
				<span><i class="fas fa-angle-down"></i></span>
			</div><!--box-menu-->
			<div class="box-menu-wraper submenu-painel">
				<div realtime="inicio" class="box-menu">
					<a><i title="Inicio" class="fas fa-home"></i> Inicio<a>
				</div><!--box-menu-->
				<div realtime="Atualizacoes" class="box-menu">
					<a><i title="Atualizações " class="fas fa-sync"></i> Atualizações<a>
				</div><!--box-menu-->
			</div><!--box-menu-wraper-->
			<!--------->
			<div id="cadastro" class="box-menu">
				<p><i title="Cadastro" class="fas fa-edit"></i></i>Cadastro<p>
				<span><i class="fas fa-angle-down"></i></span>
			</div><!--box-menu-->
			<div class="box-menu-wraper submenu-cadastro">
				<div realtime="inicio" class="box-menu">
					<a><i title="Banco" class="fas fa-university"></i> Banco<a>
				</div><!--box-menu-->
				<div realtime="condicao-de-pagamento" class="box-menu">
					<a> <i title="Condição de Pagamento" class="fas fa-comments-dollar"></i> Condição de Pagamento<a>
				</div><!--box-menu-->
				<div realtime="forma-de-pagamento" class="box-menu">
					<a><i title="Forma de Pagamento" class="fas fa-book-open"></i> Forma de Pagamento<a>
				</div><!--box-menu-->
				<div realtime="funcao" class="box-menu">
					<a><i title="Função" class="fas fa-square-root-alt"></i>Função<a>
				</div><!--box-menu-->
				<div realtime="pessoas" class="box-menu">
					<a><i title="Pessoas" class="fas fa-user"></i> Pessoas<a>
				</div><!--box-menu-->
				<div class="box-menu">
					<a><i title="Plano de Conta" class="fas fa-chart-line"></i> Plano de Conta<a>
				</div><!--box-menu-->
				<div class="box-menu">
					<a><i title="Produto" class="fas fa-box"></i> Produto<a>
				</div><!--box-menu-->
			</div><!--box-menu-wraper-->
			<!--------COMPRA-------->
			<div id="compra" class="box-menu">
				<p><i title="Compra" class="fas fa-shopping-cart"></i></i>Compra<p>
				<span><i class="fas fa-angle-down"></i></span>
			</div><!--box-menu-->
			<div class="box-menu-wraper submenu-compra">
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
			</div><!--box-menu-wraper-->
			<!--------VENDA------->
			<div id="venda" class="box-menu">
				<p><i title="Venda" class="fas fa-coins"></i> Venda<p>
				<span><i class="fas fa-angle-down"></i></span>
			</div><!--box-menu-->
			<div class="box-menu-wraper submenu-venda">
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
			</div><!--box-menu-wraper-->
			<!------EXPEDIÇÔES------->
			<div id="expedicao" class="box-menu">
				<p><i title="Expedição" class="fab fa-flickr"></i> Expedição<p>
				<span><i class="fas fa-angle-down"></i></span>
			</div><!--box-menu-->
			<div class="box-menu-wraper submenu-expedicao">
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
			</div><!--box-menu-wraper-->
			<!--------FISCAL------->
			<div id="fiscal" class="box-menu">
				<p><i title="Fiscal" class="fas fa-poll"></i>Fiscal<p>
				<span><i class="fas fa-angle-down"></i></span>
			</div><!--box-menu-->
			<div class="box-menu-wraper submenu-fiscal">
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
			</div><!--box-menu-wraper-->
			<!-----SERVICO-------->
			<div id="servico" class="box-menu">
				<p><i title="Serviço" class="fas fa-user-tie"></i>Serviço<p>
				<span><i class="fas fa-angle-down"></i></span>
			</div><!--box-menu-->
			<div class="box-menu-wraper submenu-servico">
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
			</div><!--box-menu-wraper-->
			<!-----FINANCEIRO-------->
			<div id="financeiro" class="box-menu">
				<p><i title="Financeiro" class="fas fa-chart-bar"></i>Financeiro<p>
				<span><i class="fas fa-angle-down"></i></span>
			</div><!--box-menu-->
			<div class="box-menu-wraper submenu-financeiro">
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
			</div><!--box-menu-wraper-->
			<!-------GERENCIAL------>
			<div id="gerencial" class="box-menu">
				<p><i title="Gerencial" class="fas fa-chart-pie"></i>Gerencial<p>
				<span><i class="fas fa-angle-down"></i></span>
			</div><!--box-menu-->
			<div class="box-menu-wraper submenu-gerencial">
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
				<div class="box-menu">
					<a href=""><i title="Plano de Conta" class="fas fa-chart-line"></i> Lorem Ipsum<a>
				</div><!--box-menu-->
			</div><!--box-menu-wraper-->
			<!-------esconder menu------>
			<div id="recolher-menu" class="esconder-menu">
				<p><i title="Recolher menu" class="fas fa-chevron-circle-left"></i>Recolher menu<p>
			</div><!--box-menu-->
			<div id="menu-minificado" class="menu-minificado">
				<p><i title="Menu Minificado - Menu Normal" class="fas fa-th-large"></i> Menu minificado<p>
			</div><!--box-menu-->
				
		</div><!--box-painel-->
	</div><!--container-menu-->
	</section><!--menu-->
	<div id="abrir-menu" class="abrir-menu" >
		<p><i class="fas fa-angle-double-right"></i></i><p>
	</div><!--box-menu-->
	<!--- Scripts Carregando antes do Container Main -->
	<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.js"></script><!--Carregamento do Jquery-->
	<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/dynamicLoad.js"></script><!--Carregamento dinamico da pagina Main-->
	<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script><!--Scripts do Menu -->
	<!--Container do Conteudo da pagina -->
	<main>
		<div class="main-topo">
			<!--Ideia futura-->
		</div><!--main-topo-->
		<div class="main-conteudo">
			<?php include('pessoas.php') ?>
		</div><!--main-conteudo-->
	</main>
</body>
</html>