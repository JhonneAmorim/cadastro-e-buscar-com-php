<h1 class="title-pages">Cadastro de produtos</h1>
<div class="container">
    <div class="row">
    </div>
    <div>
        <form method="POST" class="form-cadastro">
            <input type="hidden" name="acao" value="cadastrar">
            <label class="label-cadastro">Nome do Produto:</label>
            <input type="text" class="input-cadastro" name="nome" required>
            <label class="label-cadastro">Tipo do Produto:</label>
            <input type="text" class="input-cadastro" name="tipo">
            <button type="submit" class="btn btn-outline-dark mt-2" id="btn-cadastro">Enviar</button>
        </form>
    </div>
</div>


<?php

switch (@$_REQUEST['acao']) {
    case 'cadastrar':
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];

        $query_insert = "INSERT INTO addprodutos (nome, tipo) VALUES ('{$nome}', '{$tipo}')";

        $res = $conn->query($query_insert);

        if ($res) {
            echo "Produto cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar produto.";
        }
        break;
}

?>