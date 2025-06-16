<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Biblioteca - Lista de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div>
        <?php include VIEWS . 'Includes/menu.php' ?>

        <h1>Lista de Usuários</h1>

        <a href="/usuario/cadastro">Novo Usuário</a>

        <?= $model->getErrors()?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($model->rows as $usuario): ?>
                <tr>
                    <td><?= $usuario->Id ?></td>
                    <td><a href="/usuario/cadastro?id=<?= $usuario->Id ?>"><?= $usuario->Nome ?></a></td>
                    <td><?= $usuario->Email ?></td>
                    <td><a href="/usuario/delete?id=<?= $usuario->Id ?>">Remover</a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>
