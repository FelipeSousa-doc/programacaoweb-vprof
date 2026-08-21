<h1>Editar funcionário</h1>
<?php
	$sql = "SELECT * FROM funcionario WHERE id_funcionario=" . $_REQUEST['id_funcionario'];

	$res = $conn->query($sql);

	$row = $res->fetch_object();
?>
<form action="?page=salvar-funcionario" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_funcionario" value="<?php echo($row->id_funcionario); ?>">
    <div class="mb-3">
        <label for="">Nome
            <input type="text" name="nome_funcionario" class="form-control" value="<?php echo($row->nome_funcionario); ?>">
        </label>
    </div>

    <div class="mb-3">
        <label for="">E-mail
            <input type="email" name="email_funcionario" class="form-control" value="<?php echo($row->email_funcionario);?>">
        </label>
    </div>

    <div class="mb-3">
        <label for="">Telefone
            <input type="text" name="telefone_funcionario" class="form-control" value="<?php echo($row->telefone_funcionario);?>">
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>