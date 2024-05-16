<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <style>
        /* Estilos para centralizar o conteúdo */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: red;
            background-image: url('https://baldezh.top/uploads/posts/2022-08/1659958835_9-funart-pro-p-fon-dlya-retsepta-krasivo-9.jpg');
            background-size: cover; /* Garante que a imagem cubra todo o fundo */
            background-position: center; /* Centraliza a imagem */
            height: 100vh; /* Tamanho da tela vertical */
        }

        /* Estilos para o formulário */
        form {
            width: 350px; /* Largura do formulário */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        /* Estilos para etiquetas e campos de entrada */
        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #FF0000;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div style="padding:30px;">
    <form id="cadastroForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha"><br>
        <label for="nickname">Nickname:</label>
        <input type="text" id="nickname" name="nickname"><br>
        <input type="submit" value="Cadastre-se">
    </form>
</div>

<script>
    document.getElementById('cadastroForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        // Supondo que você tenha uma lógica de validação e envio aqui
        // Se a validação e o envio forem bem-sucedidos, redirecione para outra página
        window.location.href = 'index.php'; // Redireciona para a outra tela
    });
</script>

</body>
</html>
