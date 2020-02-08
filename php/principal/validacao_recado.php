<?php

include_once "Recado.php";

class Validacao_recado{

    private $html;
    private $aviso;

     /* METODO QUE RECEBER OS DADOS DO FORMULARIO E FAZ A VERIFICAÇÃO DO DADOS */

    public function pegar_informacoes($dados){


                    $this->html = file_get_contents("../site/recados.php");

                    
                    if(isset($dados) AND isset($dados["enviar"])){

                        if(empty($dados["recado"]) OR $dados["recado"] == ""){

                                $this->aviso = "Preencha o campo Recado ";
                                $this->html = str_replace('{mensagem}',$this->aviso,$this->html);
                                print $this->html;
    
                        }elseif(empty($dados["funcionario"]) OR $dados["funcionario"] == ""){
    
                                $this->aviso = "Preencha o campo Nome de Funcionario";
                                $this->html = str_replace('{mensagem}',$this->aviso,$this->html);  
                                print $this->html; 
    
                        }elseif(empty($dados["descricao"]) OR $dados["descricao"] == ""){
    
                                $this->aviso = "Preencha o campo Descrição";
                                $this->html = str_replace('{mensagem}',$this->aviso,$this->html);
                                print $this->html;
    
                        }elseif(empty($dados["data"]) OR $dados["data"] == ""){
    
                                $this->aviso = "Preencha o campo Data";
                                $this->html = str_replace('{mensagem}',$this->aviso,$this->html);
                                print $this->html;
    
                        }else{
    
                                if(class_exists("Recado")){
    
                                     $class = new Recado($dados);
    
                                     $select = $class->selectQuery($dados);
                                     $this->aviso = json_decode($select);
                                     $this->html = str_replace('{mensagem}',$this->aviso,$this->html);
                                     print $this->html;
    
    
                                }
    
                        }

                }else{

                       $this->html = str_replace('{mensagem}',"",$this->html);
                       print $this->html;

                }


    }
       

}


?>