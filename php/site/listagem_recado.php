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
    <div class="container azul">
    	<div class="row">
    		<div class="col-12 p-4">
    			<p class="white text-center fonte munda"><img src="../../icons/peca.png">Recado</p>
    			<a class="float-right text-white" href="inderecamento.php?class=Validacao_recado&method=pegar_informacoes">Voltar</a>  			
    		</div>
    	</div>
    </div>
   <!-- CONTEUDO -->

   <div class="container">
   	<div class="row">
   		<hr width="100%">
   		<div class="col-12 col-sm-12">
		    <table class="table table-striped table-dark text-center table-hover table-condensed">
				  <thead>
				    <tr>
				      <th scope="col">Recado</th>
				      <th scope="col">Funcionario</th>
				      <th scope="col">Descrição</th>
				      <th scope="col">Data</th>
					  <th scope="col" colspan="2">Opções</th>
				    </tr>
				  </thead>
				  <tbody>
				  	{tables}
				  </tbody>
			</table>
        </div>
        <hr width="100%">
    </div><!-- row -->
 </div>

 <!-- RODA PE -->
 <div class="container">
   <div class="row">
       <div class=" col-12 col-lg-12 azul p-4 mt-2 mb-2">
            <p class="text-white text-center">Direitos reservados | Oliveira Bikes ltda &copy</p>
	    </div>
    </div>
 </div>
</body>
</html>