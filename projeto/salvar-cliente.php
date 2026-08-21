<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome_cliente'];
            $tel = $_POST['telefone_cliente'];
            $email = $_POST['email_cliente'];
            $cpf = $_POST['cpf_cliente'];
            $dt_nasc = $_POST['dt_nasc_cliente'];
            $endereco = $_POST['endereco_cliente'];


            $sql = "INSERT INTO cliente(nome_cliente, cpf_cliente, email_cliente, telefone_cliente, endereco_cliente, dt_nasc_cliente)
            VALUES('{$nome}','{$cpf}','{$email}','{$tel}','{$endereco}','{$dt_nasc}')";

            $res = $conn->query($sql);

            if($res == true){
                echo("<script>alert('Cadastro feito com sucesso!');</script>");
                echo("<script>location.href='?page=listar-cliente';</script>");
            }else{
                echo("<script>alert('Falha ao efetuar cadastro!');</script>");
                echo("<script>location.href='?page=listar-cliente';</script>");
            }
            break;
        case 'editar':
            $nome = $_POST['nome_cliente'];
            $cpf = $_POST['cpf_cliente'];
            $email = $_POST['email_cliente'];
            $tel = $_POST['telefone_cliente'];
            $endereco = $_POST['endereco_cliente'];
            $dt_nasc = $_POST['dt_nasc_cliente'];

            $sql = "UPDATE cliente SET nome_cliente='{$nome}',cpf_cliente='{$cpf}', email_cliente='{$email}', telefone_cliente='{$tel}', endereco_cliente='{$endereco}', dt_nasc_cliente='{$dt_nasc}' WHERE id_cliente=".$_REQUEST['id_cliente'];

            $res = $conn->query($sql);
            if($res == true){
                echo("<script>alert('Cliente atualizado com sucesso!')</script>");
                echo("<script>location.href='?page=listar-cliente';</script>");
            }else{
                echo("<script>alert('Erro ao atualizar cliente!')</script>");
                echo("<script>location.href='?page=listar-cliente';</script>");
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM cliente WHERE id_cliente=".$_REQUEST['id_cliente'];
            //check if the process works.
            $res = $conn->query($sql);
            if($res == true){
                echo("<script>alert('Excluiu com sucesso!');</script>");
                echo("<script>location.href='?page=listar-cliente';</script>");
            }else{  
                echo("<script>alert('Falha ao excluir!');</script>");
                echo("<script>location.href='?page=listar-cliente';</script>");
            }
            break;
    }
?>