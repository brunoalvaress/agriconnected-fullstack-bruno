<?php

        // Conecta ao banco de dados
        include_once "conexaopura.php";


        // Recebe os valores inseridos no formulário
        // Converte os campos cidade e estado para maiúsculo
        $cidade         =       strtoupper($_POST['cidade']);
        $estado         =       strtoupper($_POST['estado']);
        $data           =       $_POST['data'];

        // Insere esses valores no banco de dados
        $inserir    = "INSERT INTO detalhescadastro ";
        $inserir    .= "(cidade,estado,data) ";
        $inserir    .= "VALUES ";
        $inserir    .= "('$cidade','$estado','$data')";
        $operacao_inserir = mysqli_query($conecta, $inserir);


        // Caso inseridos corretamente, volta para a página principal
        if(mysqli_insert_id($conecta)){
            echo"<script language='javascript' type='text/javascript'>alert('O registro foi enviado. Clique em ok para voltar a página principal.');window.location.href='paginaprincipal.html';</script>";
        }else{
            header("location: paginaprincipal.html");
        }

        // Fecha a conexão
        mysqli_close($conecta);
?>
