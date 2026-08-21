<h1>Editar Cliente</h1>
<?php
    $sql = "SELECT * FROM cliente WHERE id_cliente=". $_REQUEST['id_cliente'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-cliente" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_cliente" value="<?php echo($row->id_cliente); ?>">
    <div class="mb-3">
        <label for="">
            Nome
            <input type="text" name="nome_cliente" class="form-control" value="<?php echo($row->nome_cliente);?>">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Telefone
            <input type="text" name="telefone_cliente" class="form-control" value="<?php echo($row->telefone_cliente);?>">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            E-mail
            <input type="email" name="email_cliente" class="form-control" value="<?php echo($row->email_cliente); ?>">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            CPF
            <input type="number" name="cpf_cliente" class="form-control" value="<?php echo($row->cpf_cliente);?>">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Data de Nascimento
            <input type="date" name="dt_nasc_cliente" class="form-control" value="<?php echo($row->dt_nasc_cliente);?>">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Endereço
            <input type="text" name="endereco_cliente" class="form-control" value="<?php echo($row->endereco_cliente);?>">
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>