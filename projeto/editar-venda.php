<h1>Editar Venda</h1>
<?php 
    $sql = "SELECT * FROM venda WHERE id_venda=".$_REQUEST['id_venda'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-venda" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_venda" value="<?php echo($row->id_venda) ?>">
    <div class="mb-3">
        <label>
            Data da venda
            <input type="date" name="data-venda" class="form-control" value="<?php echo($row->data_venda); ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>
            Valor
            <input type="text" name="valor-venda" class="form-control" value="<?php echo("$row->valor_venda"); ?>">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Cliente
            <select name="cliente_id_cliente" class="form-control">
                <option>Escolha</option>
                <?php  
                    $sql_1 = "SELECT * FROM cliente";
                    $res_1 = $conn->query($sql_1);
                    $qtd_1 = $res_1->num_rows;
                    if($qtd_1 > 0){
                        while($row_1 = $res_1->fetch_object()){
                            if($row->cliente_id_cliente == $row_1->id_cliente){
                                echo("<option value='{$row_1->id_cliente}' selected>{$row_1->nome_cliente}</option>");
                            }
                        }
                    }else{
                        echo("<option>Nenhuma opcao encontrada.</option>");
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Funcionario
            <select name="funcionario_id_funcionario" class="form-control">
                    <option value="">Escolha</option>
                    <?php
                        $sql_1 = "SELECT * FROM funcionario";
                        $res_1 = $conn->query($sql_1);
                        $qtd_1 = $res_1->num_rows;
                        if($qtd_1 > 0){
                            while($row_1 = $res_1->fetch_object()){
                                if($row->funcionario_id_funcionario == $row_1->id_funcionario){
                                    echo("<option value='{$row_1->id_funcionario}' selected>{$row_1->nome_funcionario}</option>");
                                }
                                else{
                                    echo("<option value='{$row_1->id_funcionario}'>{$row_1->nome_funcionario}</option>");
                                }
                                
                            }
                        }else{
                            echo("<option>Nao ha funcionario</option>");
                        }
                    ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Modelo
            <select name="modelo_id_modelo" class="form-control">
                <option value="">Escolha</option>
                    <?php
                        $sql_1 = "SELECT  * FROM modelo";
                        $res_1 = $conn->query($sql_1);
                        $qtd_1 = $res_1->num_rows;
                        if($qtd_1 > 0){
                            while($row_1 = $res_1->fetch_object()){
                                if($row->modelo_id_modelo == $row_1->id_modelo){
                                    echo("<option value='{$row_1->id_modelo}' selected>{$row_1->nome_modelo}</option>");
                                }
                                else{
                                    echo("<option value='{$row_1->id_modelo}'>{$row_1->nome_modelo}</option>");
                                }          
                            }
                        }else{
                            echo("<option>Nenhuma opção encontrada.<option>");
                        }
                    ?>
        </select>
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>