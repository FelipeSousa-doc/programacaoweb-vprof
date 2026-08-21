<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome_modelo'] ;
            $cor = $_POST['cor_modelo'];
            $ano = $_POST['ano_modelo'];
            $tipo = $_POST['tipo_modelo'];
            $marca = $_POST['marca_id_marca'];

            $sql = "INSERT INTO modelo(nome_modelo, cor_modelo, ano_modelo, tipo_modelo, marca_id_marca)
                    VALUES('{$nome}','{$cor}','{$ano}','{$tipo}','{$marca}')";
            $res = $conn->query($sql);
            if($res == true){
                echo("<script>alert('Cadastro efetuado com sucesso');</script>");
                echo("<script>location.href='?page=listar-modelo';</script>");
            }else{
                echo("<script>alert('Cadastro efetuado com sucesso');</script>");
                echo("<script>location.href='?page=listar-modelo';</script>");
            }
            break;
        
        case 'editar':
            $nome = $_POST['nome_modelo'] ;
            $cor = $_POST['cor_modelo'];
            $ano = $_POST['ano_modelo'];
            $tipo = $_POST['tipo_modelo'];
            $marca = $_POST['marca_id_marca'];

            $sql = "UPDATE modelo SET nome_modelo='{$nome}',cor_modelo='{$cor}',ano_modelo='{$ano}',tipo_modelo='{$tipo}',marca_id_marca={$marca} WHERE id_modelo=".$_REQUEST['id_modelo'];

            $res = $conn->query($sql);

            if($res == true){
                echo("<script>alert('Modelo atualizado com sucesso');</script>");
                echo("<script>location.href='?page=listar-modelo';</script>");
            }else{
                echo("<script>alert('Falha ao atualizar modelo!');</script>");
                echo("<script>location.href='?page=listar-modelo';</script>");
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM modelo WHERE id_modelo=".$_REQUEST['id_modelo'];

            $res = $conn->query($sql);

            if($res == true){
                echo("<script>alert('Excluido com sucesso!');</script>");
                echo("<script>location.href='?page=listar-modelo';</script>");
            }else{
                echo("<script>alert('Falha ao tentar excluir!');</script>");
                echo("<script>location.href='?page=listar-modelo';</script>");
            }
            break;
    }
?>