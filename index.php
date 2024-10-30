<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
</head>
<body>
    <h2>Formulário de Contato</h2>

    <form action="processa_form.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" require><br><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" require><br><br>
        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" id="" cols="0" rows="4" require></textarea><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>