<?php

spl_autoload_register(function($class){
	if(file_exists("../principal/{$class}.php")){require_once "../principal/{$class}.php";}
	
});

$classe = $_REQUEST['class'];
$metodo = isset($_REQUEST['method']) ? $_REQUEST['method'] : null;
if(class_exists($classe)){

	$pagina = new $classe($_REQUEST);
  
	if(!empty($metodo) AND (method_exists($classe,$metodo))){

		$pagina->$metodo($_POST);
	}

}

?>