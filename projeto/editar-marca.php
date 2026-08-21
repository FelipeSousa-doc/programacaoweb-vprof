<?php
    $sql = "SELECT * FROM marca WHERE id_marca=".$_REQUEST['id_marca'];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<h1>Editar Marca</h1>
<form action="?page=salvar-marca" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_marca" value="<?php echo($row->id_marca);?>">
    <div class="mb-3">
        <label for="">
            Nome Marca
            <input type="text" name="nome-marca" class="form-control" value="<?php echo($row->nome_marca);?>">
        </label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
