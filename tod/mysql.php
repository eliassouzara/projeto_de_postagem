<?php

class mysql{
     // Atributo privado e estático para armazenar a instância do objeto PDO
    private static $pdo;
// Método público e estático para estabelecer a conexão com o banco de dados
    public static function conectar(){
        // Verifica se a conexão já foi estabelecida
        if(self::$pdo == null){
            try{
                 // Tenta criar uma nova instância do objeto PDO para a conexão MySQL
                self::$pdo = new PDO('mysql:host='.HOST.'dbname='.DATABASE,// Configurações de conexão
                USER,// Nome de usuário do banco de dados
                PASSWORD,// Senha do banco de dados
                array(PDO::
                MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); // Configuração de caracteres UTF-8
                 // Define o modo de erro e exceção do PDO
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
            }catch(Exception $e){
                 // Em caso de falha ao conectar, exibe uma mensagem de erro em HTML
                echo '<h2 style="color:red;">Erro ao conectar<h2>';
            }
        }
        // Retorna a instância do objeto PDO (ou a que já estava criada anteriormente)
        return self::$pdo;
    }
}

?>
