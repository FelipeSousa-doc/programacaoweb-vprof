<h1>Cadastrar modelo</h1>
<form action="?page=salvar-modelo" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome
        <input type="text" name="nome_modelo" class="form-control"> 
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Cor
            <input type="text" name="cor_modelo" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Ano
            <input type="text" name="ano_modelo" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Tipo
            <input type="text" name="tipo_modelo" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Marca
            <select name="marca_id_marca" class="form-control">
            <option>=-Escolha -=</option>
            <?php 
                $sql = "SELECT * FROM marca";
                $res = $conn->query($sql);
                $qtd = $res->num_rows;
                if($qtd > 0){
                    while($row = $res->fetch_object()){
                        echo("<option value='{$row->id_marca}'>{$row->nome_marca}</option>");
                    }
                }else{
                    echo("Nenhuma opção encontrada.");
                }
            ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>