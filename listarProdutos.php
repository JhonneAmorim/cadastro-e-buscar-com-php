<h1 class="title-pages">Buscar de Produtos</h1>

<form method="post" class="form-lista">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="label-buscar">Tipo: </label>
            <input id="input-lista" placeholder="Pesquisar por tipo" name="tipo">
            <button type="submit" class="btn btn-primary" id="btn-buscar">Buscar</button>
        </div>
    </div>
</form>

<div class="container mt-5">
    <div class="row mb-3">
        <?php
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
        $query_insert = "SELECT * FROM addprodutos WHERE tipo LIKE '%$tipo%'";

        $res = $conn->query($query_insert);

        $qtd = $res->num_rows;
        ?>
    </div>
</div>
<div class="container listar-produtos">
    <table class="table" id="table">
        <tbody>
            <?php
            if ($qtd > 0) {
                while ($row = $res->fetch_object()) {
                    echo "<tr>";
                    echo "<td >" . $row->id . "</td>";
                    echo "<td >" . $row->nome . "</td>";
                    echo "<td >" . $row->tipo . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>