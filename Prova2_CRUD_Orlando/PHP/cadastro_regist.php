<?php
include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nomejogo = $_POST['nomejogo'];
$descricao = $_POST['descricao'];
$horas = $_POST['horas'];




//Inserir dados do formulário
$sql = "INSERT INTO jogador ( `nome`, `cpf`, `nomejogo`, `descricao`, `horas`) ";
$sql = $sql."VALUES ('".$nome."', ".$cpf.", '".$nomejogo."', '".$descricao ."', ".$horas.")";


//Verifica se foi feito a conexão com o banco
if(!mysqli_query($conexao,$sql)){
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
} 

//Mostra valor atualizado
$result = mysqli_query($conexao, "SELECT * FROM jogador;");

// Fechar a conexão
mysqli_close($conexao);

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
                <img src="../Images/Light.png" alt="Wallpaper">
            </article>
        </div>
        <aside>
            <div class="page-header2">
            <br>
                <h3>Consulta de alterações</h3>
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