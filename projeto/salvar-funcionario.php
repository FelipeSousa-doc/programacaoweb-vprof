<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome_funcionario'];
            $email = $_POST['email_funcionario'];
            $telefone = $_POST['telefone_funcionario'];

            $sql = "INSERT INTO funcionario(nome_funcionario, email_funcionario, telefone_funcionario)
                            VALUES('{$nome}', '{$email}', '{$telefone}')";
        $res = $conn->query($sql);
        
        if($res==true){
            echo("<script>alert('Cadastro efetuado com sucesso!');</script>");
            echo("<script>location.href='?page=listar-funcionario';</script>");
        }else{
            echo("<script>alert('Erro ao efetuar cadastro!');</script>");
            echo("<script>location.href='?page=listar-funcionario';</script>");
        }
        break;

        case 'editar':
            $nome = $_POST['nome_funcionario'];
            $email = $_POST['email_funcionario'];
            $telefone = $_POST['telefone_funcionario'];
            $sql = "UPDATE funcionario SET 
                nome_funcionario = '{$nome}',
                email_funcionario = '{$email}',
                telefone_funcionario = '{$telefone}'
                WHERE id_funcionario=".$_REQUEST['id_funcionario'];

                $res = $conn->query($sql);
                if($res === TRUE){
                    echo("<script>alert('Editado com sucesso!')</script>");
                    echo("<script>location.href='?page=listar-funcionario';</script>");
                }else{
                    echo("<script>alert('Falha ao editar!')</script>");
                    echo("<script>location.href='?page=listar-funcionario';</script>");
                }
            break;
        case 'excluir':
            $sql = "DELETE FROM funcionario WHERE id_funcionario=".$_REQUEST['id_funcionario'];
            $res = $conn->query($sql);
            if($res == true){
                echo("<script>alert('Excluido com sucesso!');</script>");
                echo("<script>location.href='?page=listar-funcionario';</script>");
            }else{
                echo("<script>alert('Falha ao tentar excluir!');</script>");
                echo("<script>location.href='?page=listar-funcionario';</script>");
            }

            break;
    }
?>