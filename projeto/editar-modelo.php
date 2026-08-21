<h1>Editar Modelo</h1>
<?php 
    $sql = "SELECT * FROM modelo WHERE id_modelo=".$_REQUEST['id_modelo'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-modelo" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_modelo" value="<?php echo($row->id_modelo) ?>">
    <div class="mb-3">
        <label>Nome
        <input type="text" name="nome_modelo" class="form-control" value="<?php echo($row->nome_modelo); ?>"> 
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Cor
            <input type="text" name="cor_modelo" class="form-control" value="<?php echo($row->cor_modelo); ?>">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Ano
            <input type="text" name="ano_modelo" class="form-control" value="<?php echo($row->ano_modelo); ?>">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Tipo
            <input type="text" name="tipo_modelo" class="form-control" value="<?php echo($row->tipo_modelo); ?>">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Marca
            <select name="marca_id_marca" class="form-control">
            <option>=-Escolha -=</option>
            <?php 
                $sql_1 = "SELECT * FROM marca";
                $res_1 = $conn->query($sql_1);
                $qtd_1 = $res_1->num_rows;
                if($qtd_1 > 0){
                    while($row_1 = $res_1->fetch_object()){
                        if($row->marca_id_marca == $row_1->id_marca){
                            echo("<option value='{$row_1->id_marca}' selected>{$row_1->nome_marca}</option>");
                        }else{
                            echo("<option value='{$row_1->id_marca}'>{$row_1->nome_marca}</option>");
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