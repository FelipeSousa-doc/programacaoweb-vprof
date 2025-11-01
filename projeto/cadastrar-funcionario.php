<h1>Cadastar Funcionário</h1>
<form action="?page=salvar-funcionario" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome
            <input type="text" name="nome-funcionario" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label for="">E-mail
            <input type="email" name="email-funcionario" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label for="">Telefone
            <input type="text" name="tel-funcionario" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>