<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $data = $_POST['data-venda'];
            $valor = $_POST['valor-venda'];
            $cliente = $_POST['cliente_id_cliente'];
            $funcionario = $_POST['funcionario_id_funcionario'];
            $modelo = $_POST['modelo_id_modelo'];

            $sql = "INSERT INTO venda (data_venda, valor_venda, cliente_id_cliente, funcionario_id_funcionario, modelo_id_modelo)
            VALUES('{$data}', '{$valor}', '{$cliente}', '{$funcionario}', '{$modelo}')";

            $res = $conn->query($sql);

            if($res){
                echo("<script>alert('Cadastro efetuado com sucesso')</script>");
                echo("<script>location.href='?page=listar-venda'</script>");
            }else{
                echo("<script>alert('Erro ao cadastrar')</script>");
                echo("<script>location.href='?page=listar-venda'</script>");
            }
            
            break;

        case 'editar':
            $data = $_POST['data-venda'];
            $valor = $_POST['valor-venda'];
            $cliente = $_POST['cliente_id_cliente'];
            $funcionario = $_POST['funcionario_id_funcionario'];
            $modelo = $_POST['modelo_id_modelo'];

            $sql = "UPDATE venda SET data_venda='{$data}', valor_venda='{$valor}', cliente_id_cliente={$cliente}, funcionario_id_funcionario={$funcionario}, modelo_id_modelo={$modelo} WHERE id_venda=". $_REQUEST['id_venda'];

            $res = $conn->query($sql);
            if($res == true){
                echo("<script>alert('Venda editada com sucesso!');</script>");
                echo("<script>location.href='?page=listar-venda';</script>");
            }else{
                echo("<script>alert('Falha ao editar venda!');</script>");
                echo("<script>location.href='?page=listar-venda';</script>");
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM venda WHERE id_venda=".$_REQUEST['id_venda'];

            $res = $conn->query($sql);
            if($res == true){
                echo("<script>alert('Venda excluida com sucesso!');</script>");
                echo("<script>location.href='?page=listar-venda';</script>");
            }else{
                echo("<script>alert('Falha ao excluir venda!');</script>");
                echo("<script>location.href='?page=listar-venda';</script>");
            }
            break;
    }
?>