<?php
include_once "Recado.php";
class Listagem_recado{
 
    private $html;
    private $aviso;

    public function __construct(){

      $this->html = file_get_contents("../site/listagem_recado.php");

    }

  /* PAGA OS DADOS TRAZINDO DO METODO E MANDA PARA A TABELA */

    public function carregamento(){
 
    try{
            $recados = Recado::listagem_recado();
                
            $itens = '';
                 
            foreach($recados as $recado => $value){

              $item = file_get_contents("../site/item_table.php");
              $item = str_replace("{id}",$value["cod_recado"],$item);
              $item = str_replace("{recado}",$value["modelo_bike"],$item);
              $item = str_replace("{nome}",$value["nome_funcionario"],$item);
              $item = str_replace("{descricao}",$value["descricao"],$item);
              $item = str_replace("{data}",$value["data_recado"],$item);
              $itens .= $item;

           }

            $this->html = str_replace("{tables}",$itens,$this->html);


        }catch(Exception $e){

          print $e->getMessage();
          
        }
          

    }

    /* METODO PARA TRAZER OS DADOS DO RECADO PARA E EDIÇÃO DO MODAL */
    public function select(){
      
    $conexao = Recado::conexao(); 
    $id = $_REQUEST["id"];
    $select = "SELECT * FROM recado WHERE cod_recado = $id";
    $preparo = $conexao->prepare($select);
    $executa = $preparo->execute();
    $preparo = $preparo->fetch(PDO::FETCH_ASSOC);
    //var_dump($preparo);
    $this->html = file_get_contents("../site/modal_editar.html");
    $this->html = str_replace("{id}",$preparo["cod_recado"],$this->html);
    $this->html = str_replace("{recado}",$preparo["modelo_bike"],$this->html);
    $this->html = str_replace("{funcionario}",$preparo["nome_funcionario"],$this->html);
    $this->html = str_replace("{descricao}",$preparo["descricao"],$this->html);  
    $this->html = str_replace("{data}",$preparo["data_recado"],$this->html);
    print $this->html;

    

    }

  /* METODO QUE EXIBE A LISTA NA TABELA */
  public function show(){

    $this->carregamento();
    print $this->html;
  }

}

?>