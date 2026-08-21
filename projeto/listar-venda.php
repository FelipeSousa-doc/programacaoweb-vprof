<h1>Listar Venda</h1>
<?php 
    $sql = "SELECT * FROM venda AS mo INNER JOIN cliente AS ma ON mo.cliente_id_cliente = ma.id_cliente
    INNER JOIN funcionario AS fu ON mo.funcionario_id_funcionario = fu.id_funcionario
    INNER JOIN modelo AS md ON mo.modelo_id_modelo =  md.id_modelo
    ";

    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    
    if($qtd > 0){
        echo("<p>$qtd resultado(s) encontrados.</p>");
        echo("<table class='table table-bordered table-striped table-hover'>");
        echo("<tr>");
        echo("<th>#</th>");
        echo("<th>Data</th>");
        echo("<th>Valor</th>");
        echo("<th>Cliente</th>");
        echo("<th>Funcionario</th>");
        echo("<th>Modelo</th>");
        echo("<th>Acoes</th>");
        while($row = $res->fetch_object()){
            echo("<tr>");
            echo("<td>{$row->id_venda}</td>");
            echo("<td>{$row->data_venda}</td>");
            echo("<td>{$row->valor_venda}</td>");
            echo("<td>{$row->nome_cliente}</td>");
            echo("<td>{$row->nome_funcionario}</td>");
            echo("<td>{$row->nome_modelo}</td>");
            echo("<td>
                <button class='btn btn-success' onclick=\"location.href='?page=editar-venda&id_venda={$row->id_venda}';\">Editar</button>

                <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que seja excluir a venda?')){location.href='?page=salvar-venda&acao=excluir&id_venda={$row->id_venda}';}else{false;}\">Excluir</button>
            
            </td>");
            echo("</tr>");
        }
        echo("</table>");
    }else{
        echo("<strong>Nenhum resultado encontrado.</strong>");
    }
?>