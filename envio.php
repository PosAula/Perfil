<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['enviar_formulario'])){
    $formatos = array("jpg","jpeg","png");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
    
    if(in_array($extensao, $formatos)){
        echo 'existe';
        $pasta = 'imagens/';
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novo_nome = uniqid().".$extensao";
        if(move_uploaded_file($temporario, $pasta.$novo_nome)){
            echo 'sucesso';
        }  else {
            echo 'Falha no upload';
        }
        
    }  else {
        echo 'Extensão inválida';
    }
}  else {
    echo 'Nenhum arquivo foi enviado';
}