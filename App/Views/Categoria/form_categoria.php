<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Biblioteca - Cadastro de Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div>
        <?php include VIEWS . '/Includes/menu.php'?>

        <h1>Cadastro de Categoria</h1>

        <?= $model->getErrors() ?>

        <form method="post" action="/categoria/cadastro" class="p-5">
            <input name="id" type="hidden" value="<?= $model->Id ?>" />

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" value="<?= $model->Nome ?>" class="form-control" name="nome" id="nome">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
</body>
</html>
