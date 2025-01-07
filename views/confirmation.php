<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube POP - Confirmação de Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <div class="confirmation-wrapper">
        <h1>Confirmação de Cadastro</h1>
        <p>Confira os dados abaixo e clique no botão para ativar sua conta:</p>
        <div class="user-details">
            <ul>
                <li><strong>Nome:</strong> <?= $user['nome_completo'] ?></li>
                <li><strong>E-mail:</strong> <?= $user['email'] ?></li>
                <li><strong>CPF:</strong> <?= $user['cpf'] ?></li>
                <li><strong>Telefone:</strong> <?= $user['fone'] ?></li>
                <li><strong>Endereço:</strong> <?= $user['logradouro'] ?>, <?= $user['numero'] ?> - <?= $user['bairro'] ?>, <?= $user['cidade'] ?>/<?= $user['estado'] ?>, <?= $user['cep'] ?></li>
            </ul>
        </div>
        <form method="POST" action="index.php?action=activate">
            <input type="hidden" name="email" value="<?= $user['email'] ?>">
            <button type="submit">Ativar</button>
        </form>
</body>
</html>
