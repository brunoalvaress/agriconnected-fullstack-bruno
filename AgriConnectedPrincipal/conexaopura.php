<?php

        // Dados do banco e servidor
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $database = "cadastrocirculo"; 

        // Conecta ao banco de dados
        $conecta = mysqli_connect($servidor,$usuario,$senha,$database); 

        if(mysqli_connect_errno()){
            die("Conexão falhou: " . mysqli_connect_errno() );
        }

?>
