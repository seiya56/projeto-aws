<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecall- Redefinir Senha</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/media/Icons/favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- Inclui Header -->
    <?php include('./estrutura/header.php')?>

    <section class="container-redefinir">
        <div class="conteudo-redefinir2">
            <h1>Confime seus dados</h1>
            <p>Responda abaixo para confirmar sua identidade</p>

            <form>
                <label for="nome-mat">Nome da Mãe</label>
                <input type="text" id="nome-mat" name="nome-mat" required>

                <label for="data-nasc">Data de Nascimento</label>
                <input type="date" id="data-nasc" name="data-nasc" required>
                <br>
                <!--Definir botão para submit-->
                <div class="enviar">
                    <button class="btn-primario" onclick="" class="botao" >Enviar</button>
                </div>
            </form>
        </div>
    </section>

</body>

<!-- Inclui Footer -->
<?php include('./estrutura/footer.php')?>

</html>