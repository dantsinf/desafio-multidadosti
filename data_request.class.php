			<head>
				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			</head>
			<!-- BEGIN DASHBOARD STATS -->
			<script type="text/javascript">
				function mudarCor(cor) {
  				var elemento = document.getElementById('elemento');
 				elemento.style.backgroundColor = cor;
				}

			    $(document).ready(function() {
      // Função para exibir os dados retornados na tabela
      function exibirDadosNaTabela(dados) {
        var tabela = $('<table>');
        var cabecalho = $('<tr>').append('<th>ID</th><th>Nome</th><th>Sobrenome</th><th>Usuário</th><th>Status</th>');

        tabela.append(cabecalho);

        for (var i = 0; i < dados.length; i++) {
          var linha = $('<tr>').append('<td>' + dados[i].id + '</td>' +
                                      '<td>' + dados[i].nome + '</td>' +
                                      '<td>' + dados[i].sobrenome + '</td>' +
                                      '<td>' + dados[i].usuario + '</td>' +
                                      '<td>' + dados[i].status + '</td>');
          tabela.append(linha);
        }

        $('#resultado').html(tabela);
      }

      // Função para realizar a consulta AJAX e exibir os dados de clientes
      $('#visualizar').click(function() {
        $.ajax({
          url: 'consulta.php',
          type: 'GET',
          dataType: 'json',
          success: function(response) {
            exibirDadosNaTabela(response);
          },
          error: function() {
            alert('Erro ao obter os dados.');
          }
        });
      });
    });	

			</script>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" class="caixa" >
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								 1349
							</div>
							<div class="desc">
								 Clientes
							</div>
						</div>
						<a class="more" href="#" id="visualizar" onclick="mudarCor('#27a9e3')">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat green">
						<div class="visual">
							<i class="fa fa-group"></i>
						</div>
						<div class="details">
							<div class="number">
								549
							</div>
							<div class="desc">
								Usuários
							</div>
						</div>
						<a class="more" href="#" onclick="mudarCor('#28b779')">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								89
							</div>
							<div class="desc">
								Fornecedores
							</div>
						</div>
						<a class="more" href="#" onclick="mudarCor('#852b99')">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
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
							<div class="tools" >
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body" id="elemento">
							<div class="table-responsive" id="resultado">
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