<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome-funcionario'];
            $email = $_POST['email-funcionario'];
            $telefone = $_POST['tel-funcionario'];

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
            //code
            break;
        case 'excluir':
            //code
            break;
    }
?>