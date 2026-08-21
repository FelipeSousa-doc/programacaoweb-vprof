<h1>Cadastrar Cliente</h1>
<form action="?page=salvar-cliente" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">
            Nome
            <input type="text" name="nome_cliente" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Telefone
            <input type="text" name="telefone_cliente" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            E-mail
            <input type="email" name="email_cliente" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            CPF
            <input type="number" name="cpf_cliente" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Data de Nascimento
            <input type="date" name="dt_nasc_cliente" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label for="">
            Endereço
            <input type="text" name="endereco_cliente" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>