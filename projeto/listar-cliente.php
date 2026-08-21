<h1>Listar Cliente</h1>
<?php
    $sql = "SELECT * FROM cliente";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    if($qtd > 0){
        echo("<p>Encontrou <b>$qtd</b> resultado(s).</p>");
        echo("<table class='table table-bordered table-striped table-hover'>");
        echo("<tr>");
        echo("<th>#</th>");
        echo("<th>Nome</th>");
        echo("<th>CPF</th>");
        echo("<th>E-mail</th>");
        echo("<th>Telefone</th>");
        echo("<th>Endereço</th>");
        echo("<th>Data de Nascimento</th>");
        echo("<th>Acoes</th>");
        echo("</tr>");

        while($row = $res->fetch_object() ){
            echo("<tr>");
            echo("<td>". $row->id_cliente . "</td>");
            echo("<td>". $row->nome_cliente . "</td>");
            echo("<td>". $row->cpf_cliente . "</td>");
            echo("<td>". $row->email_cliente . "</td>");
            echo("<td>". $row->telefone_cliente . "</td>");
            echo("<td>". $row->endereco_cliente . "</td>");
            echo("<td>". $row->dt_nasc_cliente . "</td>");
            echo("<td>

            <button class='btn btn-success' onclick=\"location.href='?page=editar-cliente&id_cliente=".$row->id_cliente."';\">Editar</button>
            
            <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-cliente&acao=excluir&id_cliente=". $row->id_cliente ."';}else{false;}\">Excluir</button>
            
            </td>");
            echo("</tr>");
        }
        echo("</table>");
        

    }
    else{
        echo("<p>Nenhum resultado encontrado.</p>");}
?>