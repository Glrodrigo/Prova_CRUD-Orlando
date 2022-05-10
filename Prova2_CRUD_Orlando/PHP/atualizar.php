<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Consulta</title>
    <link rel="stylesheet" href="../Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>   
</head>
<body class="cadastro">
    <header>
        <div id="title">
            <h1>State of Play</h1>
            <h1>Enjoy your journey</h1>
        </div>

        <ul>
            <a href="#"><li>Home</li></a>
            <a href="#"><li>Contato</li></a>
            <a href="#"><li>Novidades</li></a>
            <a href="#"><li>Serviços</li></a>
            <a href="#"><li>Sobre</li></a>
        </ul>
    </header>
    <main>
        <div class="imagem">
            <article>
                <img src="../Images/Moto.png" alt="Wallpaper">
            </article>
        </div>
        <aside>
            <div class="page-header2">
                <br>
                <h3>Atualizar registros</h3>
                <br>
                <h3>Informe o numero de cpf do registro que voce deseja atualizar</h3>
                <br>
            <p> 
                <form action="atualizar_update.php" method="POST">
                    <label>CPF:</label>
                    <input type="text" name="cpf" value="" required autofocus><br><br>                   
                    <h3>Informe a quantidade de horas atualizada de seu jogo</h2>
                    <br>
                    <label>Horas totais:</label>
                    <input type="text" name="horas" value="" required autofocus><br><br>
                    
                    <input type="submit" class=" btn-primary" value="Atualizar">
                </form>
                <br><br>
            </p>
            </div>
        <aside>           
        
    </main>
    <footer class='centro'>Developed by Rodrigo &copy; 2022</footer>
</body>
</html>