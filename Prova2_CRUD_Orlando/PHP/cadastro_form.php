<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
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
                <img src="../Images/Light.png" alt="Wallpaper">
            </article>
        </div>
        <aside>
            <div class="page-header3">
                <h3>Cadastro de Jogador</h3>
                <br>
        
            <p> 
                <form action="cadastro_regist.php" method="POST">
                    <label>Digite seu nome:</label>
                    <input type="text" name="nome" value="" required autofocus><br><br>
                    
                    <label>Digite seu cpf:</label>
                    <input type="text" name="cpf" value="" required autofocus><br><br>
                    
                    <label>Informe o nome do jogo:</label>
                    <input type="text" name="nomejogo" value="" required autofocus><br><br>
                    
                    <label>Categoria ou breve descrição:</label>
                    <input type="text" name="descricao" value="" required autofocus><br><br>

                    <label>Quantas horas jogadas:</label>
                    <input type="text" name="horas" value="" required autofocus><br><br>
                    
                    <input type="submit" class=" btn-primary" value="Cadastrar">
                </form>
                <br>
            </p>
            </div>
        <aside>           
        
    </main>
    <footer class='centro'>Developed by Rodrigo &copy; 2022</footer>
</body>
</html>