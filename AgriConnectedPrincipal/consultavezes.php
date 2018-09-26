<html>
        <!-- Header da página -->
        <div class="page-header">
              <a href="">
                    <img class="img-responsive center-block" src="../img/agri.png" alt ="imagem" width="60%" >
              </a>
        </div>

</html>


<?php
        // Conecta ao Banco
        include_once "conexaopura.php";


         // Gera Tabela
         echo "<table border=1>";
         echo "<tr>";
         echo "<th> Estado </th>";
         echo "<th> Total de Eventos </th>";
         echo "</tr>";

         // Recupera os dados do banco de dados e conta a frequência de cada estado
         $dados = mysqli_query($conecta, "SELECT estado, COUNT(estado) AS totaleventos FROM detalhescadastro GROUP BY estado HAVING COUNT(estado) > 0 ORDER BY COUNT(estado) DESC");

        // Armazena os estados e total de eventos
        while  ($registro = mysqli_fetch_array($dados)){

            $estado = $registro['estado'];
            $totaleventos = $registro['totaleventos'];

            echo "<tr>";
            echo "<td>".$estado."</td>";
            echo "<td>".$totaleventos."</td>";
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
