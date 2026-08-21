<h1>Listar Marca</h1>
<?php
    $sql = "SELECT * FROM marca";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0 ){
        echo("<p>Encontrei <strong>$qtd</strong> resultado(s).</p>");
        echo("<table class='table table-bordered table-striped table-hover'>");
        echo("<tr>");
        echo("<th>#</th>");
        echo("<th>Nome</th>");
        echo("<th>Ações</th>");
        echo("</tr>");

        while($row = $res->fetch_object()){
            echo("<tr>");
            echo("<td>" . $row->id_marca . "</td>");
            echo("<td>" . $row->nome_marca . "</td>");
            echo("<td>
            <button class='btn btn-success' onclick=\"location.href='?page=editar-marca&id_marca=" . $row->id_marca . "';\">Editar</button>
            
            <button class='btn btn-danger' onclick=\"if(confirm('Tem Certeza que deseja excluir?')){location.href='?page=salvar-marca&acao=excluir&id_marca=" . $row->id_marca."';}else{false;}\">Excluir</button>
            </td>");

            echo("</tr>");
        }
        echo("</table>");
    }else{
        echo("Nenhum resultado encontrado!");
    }
?>