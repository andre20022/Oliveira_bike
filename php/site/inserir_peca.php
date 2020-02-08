<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../css/cores.css">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Seymour+One&display=swap" rel="stylesheet"> 
<title>Oliveira Bikes | Peças</title>
</head>
<body>
     <!-- MENU DO SITE-->
     <div class="container azul mt-1">
    	<div class="row">
    		<div class="col-12 p-4">
    			<p class="white text-center fonte munda"><img src="../../icons/peca.png">Inserir Peças</p>
    			<p class=" white text-center fonte">
    				
    			</p>
    		</div>
    	</div>
    </div>
<div class="container">
    <hr width="100%">
        <div class="row justify-content-center"> 
            <div class="col-11 col-sm-11 col-md-8 col-lg-6 p-3 jumbotron">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="nome">Nome</label>
                            <input name="nome" type="text" class="form-control" id="nome">
                    </div>
                    <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" name="descricao" id="descricao" rows="5"></textarea>
                    </div>

                        <div class="form-group">
                            <label for="data">Data</label>
                            <input class="form-control" type="data" name="data" id="data">
                        </div>
                        <div class="form-group">
                            <label for="">Arquivo</label>
                        <div class="custom-file">
                            <input type="file" name="arquivo" class="custom-file-input" id="file" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="file" data-browse="Abrir">Selecione a foto</label>
                        </div>
                        </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                </form>
            </div>
        <div class="col-11 col-sm-11 col-md-8 col-lg-6">
             
        </div>
    </div>
</div>


</body>
</html>