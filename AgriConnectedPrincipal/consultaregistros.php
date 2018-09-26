<html>
            <!-- Header da página -->
            <div class="page-header">
              <a href="">
                    <img class="img-responsive center-block" src="../img/agri.png" alt ="imagem" width="60%" >
              </a>
            </div>

</html>

<?php
        // Conecta ao banco de dados
        include_once "conexaopura.php";


         // Gera a tabela
         echo "<table border=1>";
         echo "<tr>";
         echo "<th> Cidade </th>";
         echo "<th> Estado </th>";
         echo "<th> Data </th>";
         echo "</tr>";

        // Recupera todos os dados armazenados e formata a data modelo brasileiro
        $dados = mysqli_query($conecta, "SELECT id, cidade, estado, DATE_FORMAT( `data` , '%d/%c/%Y' ) AS `data` FROM `detalhescadastro`");


        // Armazena os dados nas tabelas
        while  ($registro = mysqli_fetch_array($dados)){

            $cidade = $registro['cidade'];
            $estado = $registro['estado'];
            $data = $registro['data'];

            echo "<tr>";
            echo "<td>".$cidade."</td>";
            echo "<td>".$estado."</td>";
            echo "<td>".$data."</td>";
            echo "</tr>";

        }

        echo "</table>";

    ?>
        <html>

        <head>

        <title>Dev AgriConnected</title>
            <meta http-equiv="X-UA-Compatible" content="IE-edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="utf-8">
            <link href="../css/bootstrap.min.css" rel="stylesheet">
            <link href="_css/estilo.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        </head>

        <body>

            <br>
            <div class="container-fluid">
            <form name="voltar" action="paginaprincipal.html" method="POST">
                <button class="btn" style="width: 15em" type="submit" >Voltar</button>
            </form>
            </div>

        </body>

        </html>
