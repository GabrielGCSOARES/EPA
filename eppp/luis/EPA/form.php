<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulário em PHP</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="botao.css">

</head>

<body>

    <?php
    include 'conexao.php';
    include 'cors_policy.php';
    ?>
    
    <form method="GET" action="form.php">
        <label for="nome">Nome do Remédio:</label>
        <input type="text" name="nome" id="nome" ><br><br>

        <label for="date">Quantos dias:</label>
        <input type="text" name="date" id="date" ><br><br>
        <label for="horas">Quantas vezes ao dia:</label>
        <input type="text" name="horas" id="horas"></input><br><br>

    <div class="botoes">
        <input type="submit" name="acao" value="enviar">
       
        <button class="botaoCalendario" type="submit" > <a href="http://localhost/epa2k23/eppp/luis/EPA/index.php">Calendario</a></button>
        </div>
        
    </form>

    <?php
    $date = isset($_GET['date']) ? $_GET['date'] : null;
    $nome = isset($_GET['nome']) ? $_GET['nome'] : null;
    $horas = isset($_GET['horas']) ? $_GET['horas'] : null;
    $acao = isset($_GET['acao']) ? $_GET['acao'] : null;
    
    if ($acao == "enviar") {	
        $sql = "INSERT INTO pharmaon VALUES (0, '$nome', '$date', '$horas');";
        if ($conn->query($sql) === TRUE) {
            
            echo "<h3 class='confirmation'>Dados inseridos com sucesso</h3>";
        } else {
            echo "<h3 class='erro'>Erro ao inserir dados:</h3> " . $conn->error;
        }
        
        $conn->close();
            
    }
    $_SESSION['nome'] = $nome;
    $_SESSION['date'] = $date;
    $_SESSION['horas'] = $horas;
    // echo $_SESSION['nome'];
    // echo $_SESSION['date'];
    // echo $_SESSION['horas'];
    ?>
    
</body>
</html>
