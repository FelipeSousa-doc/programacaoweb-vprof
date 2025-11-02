<h1>Listar Funcionário</h1>
<?php
    $sql = "SELECT * FROM funcionario";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        echo("<p>Encontrou <b>$qtd</b> resultado(s).</p>");
        echo("<table class='table table-bordered table-striped table-hover'>");
        echo("<tr>");
        echo("<th>#</th>");
        echo("<th>Nome</th>");
        echo("<th>E-mail</th>");
        echo("<th>Telefone</th>");
        echo("</tr>");

        while($row = $res->fetch_object() ){
            echo("<tr>");
            echo("<td>". $row->id_funcionario . "</td>");
            echo("<td>". $row->nome_funcionario . "</td>");
            echo("<td>". $row->email_funcionario . "</td>");
            echo("<td>". $row->telefone_funcionario . "</td>");
            echo("</tr>");
        }
        echo("</table>");
        

    }
    else{
        echo("<p>Nenhum resultado encontrado.</p>");
    }
?>
