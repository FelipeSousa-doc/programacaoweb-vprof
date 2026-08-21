<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_REQUEST['nome-marca'];

            $sql = "INSERT INTO marca(nome_marca) VALUES('{$nome}')";

            $res = $conn->query($sql);
            
            if($res == True){
                echo("<script>alert('Cadastro efetuado com sucesso!')</script>");
                echo("<script>location.href='?page=listar-marca';</script>");
            }else{
                echo("<script>alert('Falha ao cadastrar!')</script>");
                echo("<script>location.href='?page=listar-marca';</script>");
            }
            break;

        case 'editar':
            $nome_marca = $_POST['nome-marca'];

            $sql = "UPDATE marca SET nome_marca='{$nome_marca}' WHERE id_marca=".$_REQUEST['id_marca'];

            $res = $conn->query($sql);

            if($res === true){
                echo("<script>alert('Marca atualizada com sucesso!');</script>");
                echo("<script>location.href='?page=listar-marca';</script>");
            }else{
                echo("<script>alert('Erro ao atualizar marca!');</script>");
                echo("<script>location.href='?page=listar-marca';</script>");
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM marca WHERE id_marca=".$_REQUEST['id_marca'];
            $res = $conn->query($sql);

            if($res == true){
                echo("<script>alert('Excluido com sucesso!');</script>");
                echo("<script>location.href='?page=listar-marca';</script>");
            }else{
                echo("<script>alert('Falha ao excluir!');</script>");
                echo("<script>location.href='?page=listar-marca';</script>");
            }
            break;
    }
?>