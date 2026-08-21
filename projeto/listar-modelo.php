<h1>Listar Modelo</h1>
<?php 
    $sql = "SELECT * FROM modelo AS mo INNER JOIN marca AS ma ON mo.marca_id_marca = ma.id_marca";

    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        echo("<p>$qtd resultado(s) encontrado(s). <p>");
        echo("<table class='table table-bordered table-striped table-hover'>");
        echo("<tr>");
        echo("<th>#</th>");
        echo("<th>Nome </th>");
        echo("<th>Marca</th>");
        echo("<th>Cor</th>");
        echo("<th>Ano</th>");
        echo("<th>Tipo</th>");
        echo("<th>Acoes</th>");
        echo("</tr>");
        while($row =  $res->fetch_object()){
            echo("<tr>");
            echo("<td>{$row->id_modelo}</td>");
            echo("<td>{$row->nome_modelo}</td>");
            echo("<td>{$row->nome_marca}</td>");
            echo("<td>{$row->cor_modelo}</td>");
            echo("<td>{$row->ano_modelo}</td>");
            echo("<td>{$row->tipo_modelo}</td>");
            echo("<td>
                <button class='btn btn-success' onclick=\"location.href='?page=editar-modelo&id_modelo={$row->id_modelo}';\">Editar</button>

                <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir o modelo?')){location.href='?page=salvar-modelo&acao=excluir&id_modelo={$row->id_modelo}';}else{false;}\">Excluir</button>
        
                                                    </td>");
            echo("</tr>");
        }
        echo("</table>");
    }else{
        echo("<strong>Nenhum</strong> resultado encontrado!");
    }
?>