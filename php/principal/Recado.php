
<?php

class Recado
{
	private static $recado;
	private static $nome_funcionario;
	private static $descricao;
  private static $data;
	private static $conexao;


	 public function __construct($dados)
	{

      if(empty($_GET["id"]) AND empty($_POST["codigo"])){

      $this->setRecado($dados);
      $this->setFuncionario($dados);
      $this->setDescricao($dados);
      $this->setData($dados);

      }else{

          if(isset($_GET["action"]) AND $_GET["action"] == "delete"){

            self::deleteQuery();

          }else{

            self::updateQuery();

          }

      }
  }

  /* METODO DE CONEXÃO COM O BANCO */

    public static function conexao(){

    try{

      self::$conexao = new PDO('mysql:host=localhost;dbname=oliveira','root','1234');
      self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   } catch(PDOException $e) {

    echo 'ERROR: ' . $e->getMessage();

   }

     return self::$conexao;

    }   

	public function setRecado($dados){
       
       self::$recado = $dados["recado"];

      
	}
	public function setFuncionario($dados){

       self::$nome_funcionario = $dados["funcionario"];


	}
    public function setDescricao($dados){

       self::$descricao = $dados["descricao"];


    }
    public function setData($dados){

       self::$data = $dados["data"];


    }
    public static function getRecado(){

      return self::$recado;

    }
    public static function getFuncionario(){

      return self::$nome_funcionario;

    }
    public static function getDescricao(){

      return self::$descricao;

    }
    public static function getData(){

      return self::$data;

    }

    /* METODO PARA INSERIR OS RECADOS NO BANCO */

    public static function insertQuery(){
       
        $dados_con = self::conexao();
        $insert = "INSERT INTO recado(modelo_bike,descricao,data_recado,nome_funcionario)VALUES(:recado,:descricao,:data,:funcionario);";
        $insersao = $dados_con->prepare($insert);
        $insersao->BindValue(':recado',self::getRecado());
        $insersao->BindValue(':descricao',self::getDescricao());
        $insersao->BindValue(':data',self::getData());
        $insersao->BindValue(':funcionario',self::getFuncionario());
        $insersao->execute();
        if ($insersao) {

          return true;

          }
              
          return false;

    }

     /* METODO PARA ALUTERAR OS RECADOS NO BANCO */

    public static function updateQuery(){

          $dado = $_POST;
        
          $dados_con = self::conexao();
          $update = "UPDATE recado SET modelo_bike = :recado, descricao = :descricao, data_recado = :data_recado,nome_funcionario = :nome_fun WHERE cod_recado = :id;";
          $acao = $dados_con->prepare($update);
          $acao->bindParam(':recado',$dado["recado"]);
          $acao->bindParam(':descricao',$dado["descricao"]);
          $acao->bindParam(':data_recado',$dado["data"]);
          $acao->bindParam(':nome_fun',$dado["funcionario"]);
          $acao->bindParam(':id',$_GET["id"]);
          $executa = $acao->execute();

          if($executa){
          
            header('location:../site/inderecamento.php?class=Listagem_recado&method=show');

          }else{

            header('location:');


          }

    }

     /* METODO PARA DELETAR OS RECADOS NO BANCO */

    public static function deleteQuery(){
       
        $Post = $_POST["codigo"];
        $dados_con = self::conexao();
        $delete = "DELETE FROM recado WHERE cod_recado = :id;";
        $delete = $dados_con->prepare($delete);
        $delete->BindParam(':id',$Post);  
        $execute = $delete->execute();

        if($execute){
          
          header('location:../site/inderecamento.php?class=Listagem_recado&method=show');

        }else{

          header('location:../site/inderecamento.php?class=Listagem_recado&method=show');


        }

    }

     /* METODO QUE RETORNA TODOS OS RECADOS DO BANCO */

    public static function listagem_recado(){

      $dados_con = self::conexao();
      $informacao = "SELECT * FROM recado ORDER BY cod_recado ASC;";
      $select = $dados_con->prepare($informacao);
      $execute = $select->execute();
      $result = $select->fetchALL();
      
      return $result;
    }

     /* METODO PARA VERIFICAR SE JÁ EXISTE O RECADOS NO BANCO SE SIM ENTAO NAO INSERE // SE NÃO ELE INSERE NO BANCO */

    public static function selectQuery($digitado){

      $dados_con = self::conexao();
      $informacao = "SELECT * FROM recado;";
      $select = $dados_con->prepare($informacao);
      $execute = $select->execute();
      
      while($res = $select->fetch(PDO::FETCH_ASSOC)){
 
        if($res["modelo_bike"] == $digitado["recado"] AND $res["descricao"] == $digitado["descricao"] AND $res["nome_funcionario"] == $digitado["funcionario"]){

          return json_encode("ja existe esse recado!");

        }

      }

      $resultado = self::insertQuery();
                                 
       if(is_bool($resultado)== true)
         return json_encode("O recado foi inserido!");
        else
         return json_encode("O recado não foi inserido!");
    
       

    }






}


?>