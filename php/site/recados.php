<!DOCTYPE html>
<html>
<head>
	<title>Oliveira Bikes | Recados</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/cores.css">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=7">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Seymour+One&display=swap" rel="stylesheet"> 
</head>
<body>

    <!-- MENU DO SITE-->
    <div class="container azul mt-1">
    	<div class="row">
    		<div class="col-12 p-4">
    			<p class="white text-center fonte munda"><img src="../../icons/recado.png">Recados</p>
    		</div>
    	</div>
    </div>

	<!-- CONTEUDO SITE -->
	<div class="container">
		<div class="row">
			<hr width="100%">
			<div class="col-12 col-lg-7">

            <h3>O que esta faltando na loja ? </h3>
			<img class="p-2 bike" src="../../fotos/oliveira.png" alt="Fotos da bike oliveira">

			<form class="mb-3 mt-3" action="inderecamento.php?class=Validacao_recado&method=pegar_informacoes" method="POST">
				<div class="form-row">
					    <div class="form-group col-md-6">
					      <label class="titulo" for="modelo">Recado</label>
					      <input type="text" name="recado" class="form-control" id="modelo" placeholder="Digite o que falta?">
					    </div>
					    <div class="form-group col-md-6">
					      <label class="titulo" for="funcionario">Nome funcionario</label>
					      <input type="text" name="funcionario" class="form-control" id="funcionario" placeholder="Digite o seu nome">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="titulo" for="Descrição">Descrição</label>
					    <textarea class="form-control" name="descricao" id="Descrição" rows="6" placeholder="Digite a descrição do recado"></textarea>
					  </div>
					  <div class="form-group">
					    <label class="titulo" for="data">Data</label>
					    <input type="date" name="data" class="form-control" id="data">
				      </div>
					 
					  <button name="enviar" type="submit" class="btn btn-success">Enviar</button>
            </form>

			</div>
			<div class="h-100 col-12 col-lg-5">
				<div class="row justify-content-center">
					<div class="h-100 borda col-12 col-lg-8">
						<ul id="lista-contato mt-5 bd">
						 <li class="item-informacao"><a class="" href="index.php">Voltar <img src="../../icons/seta_esquerda.png"></a></li>
						 <li class="item-informacao"><a class="" href="inserir_peca.php">Peças <img src="../../icons/pecas.png"></a></li>
						 <li class="item-informacao"><a class="" href="">Estoque <img src="../../icons/estoque.png"></a></li>
						 <li class="item-informacao"><a class="" href="">Orçamentos <img src="../../icons/orcamento.png"></a></li>
						 <li class="item-informacao"><a class="" href="inderecamento.php?class=Listagem_recado&method=show">Todos recados <img src="../../icons/recados.png"></a></li>
						</ul>
                    </div>

                     <div class="mt-3 p-3 text-center col-lg-12">
                       
                       <img class="image-fluid" src="../../fotos/recado.jpg">
						
			         </div>
			         <div id="mensagem" class="mt-3 p-3 text-center col-lg-12">
                       <p id="">{mensagem}</p>
			         </div>


				</div>
			</div>
			<hr width="100%">

			 <!-- RODAPE DO SITE -->
			 
			<div class="col-12 col-lg-12 azul p-4 mt-2 mb-2">
                 <p class="text-white text-center">Direitos reservados | Oliveira Bikes ltda &copy</p>
			</div>
		</div>
	</div>
	
<script src="../../js/jquey.js"></script>
<script src="../../js/bootstrap.js"></script>
</body>
</html>