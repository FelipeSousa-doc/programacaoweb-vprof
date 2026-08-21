<h1>Cadastrar Venda</h1>
<form action="?page=salvar-venda" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>
            Data da venda
            <input type="date" name="data-venda" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>
            Valor
            <input type="text" name="valor-venda" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Cliente
            <select name="cliente_id_cliente" class="form-control">
                <option>Escolha</option>
                <?php  
                    $sql = "SELECT * FROM cliente";
                    $res = $conn->query($sql);
                    $qtd = $res->num_rows;
                    if($qtd > 0){
                        while($row = $res->fetch_object()){
                            echo("<option value='{$row->id_cliente}'>{$row->nome_cliente}</option>");
                        }
                    }else{
                        echo("<option>Nao ha clientes</option>");
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
                        $sql = "SELECT * FROM funcionario";
                        $res = $conn->query($sql);
                        $qtd = $res->num_rows;
                        if($qtd > 0){
                            while($row = $res->fetch_object()){
                                echo("<option value='{$row->id_funcionario}'>{$row->nome_funcionario}</option>");
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
                        $sql = "SELECT  * FROM modelo";
                        $res = $conn->query($sql);
                        $qtd = $res->num_rows;
                        if($qtd > 0){
                            while($row = $res->fetch_object()){                        
                                echo("<option value='{$row->id_modelo}'>{$row->nome_modelo}</option>");
                            }
                        }else{

                        }
                    ?>
        </select>
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>