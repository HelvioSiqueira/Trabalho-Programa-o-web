<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style-login.css">
    <link rel="stylesheet" href="../css/style-home.css">

    <title>Login</title>
    
</head>

<body>

    <header>
        <ul>
            <li><a href="../index.html"><b>Início</b></a></li>
            <li><a href="#"><b>Social</b></a></li>
            <li><a href="#"><b>Parceiros</b></a></li>
            <li style="float:right"><a class="active" href="#"> <strong>Quem Somos</strong></a></li>
        </ul>
    </header>

    <div class="login">
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
            <input type="text" placeholder="email" name="email">
            <br><br>
            <input type="password" placeholder="senha" name="senha">
            <br><br>
            <input class="inputSumit" type="submit" name="submit" value="enviar">
            <br><br>
        </form>
    </div>
    <footer>
        <div class="bar">
            Profissionais de desenvolvimento de conteúdo Web © 2022. <br> Todos os direitos reservados.
        </div>
    </footer>
</body>

</html>