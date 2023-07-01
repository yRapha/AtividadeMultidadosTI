<html>    
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove"></a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active ">
					<a href="index.html">
					<i class="fa fa-home"></i>
					<span class="title">
						Dashboard
					</span>
					<span class="selected">
					</span>
					</a>
				</li>
				<!--Cliente-->
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-file-text"></i>
					<span class="title">
						Cadastro
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">Cliente</a>
						</li>
						<li>
							<a href="#">Fornecedor</a>
						</li>
						<li>
							<a href="#">Usuário</a>
						</li>
					</ul>
				</li>
				<!--Relatorio-->
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">
						Relatório
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">Cliente</a>
						</li>
						<li>
							<a href="#">Faturamento</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Dashboard <small>tudo que você precisa à um click.</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li class="pull-right">
							<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
								<i class="fa fa-calendar"></i>
								<span>
								</span>
								<i class="fa fa-angle-down"></i>
							</div>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number"> <?php echo count($clientes); ?></div>                                                        
							<div class="desc">
								 Clientes
							</div>
						</div>
						<a class="more" href="#">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
                            <script>
                            var elemento = document.querySelector('.portlet-body');
                            elemento.style.color = 'blue';
                            </script>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat green">
						<div class="visual">
							<i class="fa fa-group"></i>
						</div>
						<div class="details">
							<div class="number"><?php echo count($usuarios);?></div>
							<div class="desc">
								Usuários
							</div>
						</div>
						<a class="more" href="#">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
                        <script>
                            var elemento = document.querySelector('.portlet-body');
                            elemento.style.color = 'green';
                            </script>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
                            <?php echo count($fornecedores);?>
							</div>
							<div class="desc">
								Fornecedores
							</div>
						</div>
						<a class="more" href="#">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
                        <script>
                            var elemento = document.querySelector('.portlet-body');
                            elemento.style.color = 'purple';
                            </script>
					</div>
				</div>
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			<!--Tabela-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-folder-open"></i>Tabela Simples
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover">
								<thead>
								<tr>
									<th>
										#
									</th>
									<th>
										Nome
									</th>
									<th>
										Sobrenome
									</th>
									<th>
										Usuario
									</th>
									<th>
										Status
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										1
									</td>
									<td>
										Mark
									</td>
									<td>
										Otto
									</td>
									<td>
										makr124
									</td>
									<td>
										<span class="label label-sm label-success">
											Aprovado
										</span>
									</td>
								</tr>
								<tr>
									<td>
										2
									</td>
									<td>
										Jacob
									</td>
									<td>
										Nilson
									</td>
									<td>
										jac123
									</td>
									<td>
										<span class="label label-sm label-info">
											Pendente
										</span>
									</td>
								</tr>
								<tr>
									<td>
										3
									</td>
									<td>
										Larry
									</td>
									<td>
										Cooper
									</td>
									<td>
										lar
									</td>
									<td>
										<span class="label label-sm label-warning">
											Suspenso
										</span>
									</td>
								</tr>
								<tr>
									<td>
										4
									</td>
									<td>
										Sandy
									</td>
									<td>
										Lim
									</td>
									<td>
										sanlim
									</td>
									<td>
										<span class="label label-sm label-danger">
											Bloqueado
										</span>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
</html>
<nav>
    <ul>
        <li><a href="index.php">Página Principal</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
    </ul>
</nav>
<?php
$menuOptions = [
    "Página Principal" => "index.php",
    "Sobre" => "sobre.php",
    "Contato" => "contato.php",
];

// Adicionando os novos itens ao menu
$menuOptions["Cadastro > Produtos"] = "cadastro_produtos.php";
$menuOptions["Cadastro > Perfil de acesso"] = "cadastro_perfil_acesso.php";
$menuOptions["Relatório > Produtos"] = "relatorio_produtos.php";

ksort($menuOptions); // Ordenando as opções em ordem alfabética pela chave

?>

<nav>
    <ul>
        <?php foreach ($menuOptions as $label => $link) : ?>
            <li><a href="<?php echo $link; ?>"><?php echo $label; ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

<?php
$clientes = $dataRequest->dadosClientes();
$usuarios = $dataRequest->dadosUsuarios();
$fornecedores = $dataRequest->dadosFornecedores();
?>