<?php
    include 'conexao.php';
    //Verifica se tem valor no formulário
    if(isset($_POST['quantidade'])){
        $qtde = $_POST['quantidade'];
        //Comando chama a procedure
        $result = mysqli_query($conexao, "CALL Selecionar_jogador('".$qtde."');");  
    }
?>



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
                <img src="../Images/Grupo.png" alt="Wallpaper">
            </article>
        </div>
        <aside>
            <div class="page-header2">
            <br>
                <h3>Consulta da quantidade escolhida</h3>
                <br>
                <h3>Resultados</h3>
                <br>
            <p> 
                <table>
                    <tr>
                        <td>Cpf</td>
                        <td>Nome</td>
                        <td>Jogo</td>
                        <td>Horas</td>
                    </tr>
                    <?php while($linha = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td> <?php echo $linha["cpf"]; ?> </td> 
                        <td> <?php echo $linha["nome"]; ?> </td>
                        <td> <?php echo $linha["nomejogo"]; ?> </td>
                        <td> <?php echo $linha["horas"]; ?> </td>
                        
                    </tr>
                    <?php } ?>  
                    <tr >
                         <a href="../index.php">Sair</a>
                    </tr>
                        
                    
                <br><br>
            </p>
            </div>
        <aside>           
        
    </main>
    
</body>
</html>