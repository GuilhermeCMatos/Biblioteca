<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Biblioteca - Lista de Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div>
        <?php include VIEWS . 'Includes/menu.php' ?>

        <h1>Lista de Categorias</h1>

        <a href="/categoria/cadastro">Nova Categoria</a>

        <?= $model->getErrors()?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($model->rows as $categoria): ?>
                <tr>
                    <td><?= $categoria->Id ?></td>
                    <td><a href="/categoria/cadastro?id=<?= $categoria->Id ?>"><?= $categoria->Nome ?></a></td>
                    <td><a href="/categoria/delete?id=<?= $categoria->Id ?>">Remover</a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>
