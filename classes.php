<?php

include_once 'conexao.php';
class Login {

    public $login;
    public $senha;

    public function Logar($login, $senha, $conn) {
        

        $sql = "select * from u where login = '$login' and senha = '$senha'";
        //$conn = $GLOBALS['conn'];
        $query = $conn->query($sql);
        $return = $query->fetchAll(PDO::FETCH_ASSOC);
        echo $return[0]['url_imagem'];
    }

}

class Cadastro {

    public $login;
    public $senha;

    public function Cadastrar($grupo, $usuario,$conn) {
        //include_once 'conexao.php';
//$conn = $GLOBALS['conn'];
        $sql = "insert into usuario_grupo (id_grupo,id_usuario) values ('$grupo','$usuario')";
        $query = $conn->query($sql);

        $a = 'igor';
        $b = '123';
        $login = new Login();
        $login->Logar($a, $b , $conn);
    }

}