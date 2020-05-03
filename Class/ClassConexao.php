<?php

abstract class ClassConexao{
    #Protege O Banco de Dados
    protected function conectaDB(){
        try{
            $Con=new PDO("mysql:host=localhost;dbname=carlos_assistencia","d3r","code");
            return $Con;
        }catch(PDOException $Erro){
            return $Erro->getMessage();
        }
    }
}

?>