<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calendario Dinamico EPA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="modal.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="script.js" defer></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
  </head>
  <body>
    <?php
  include 'cors_policy.php';
  include 'conexao.php';


    ?>





    <div class="wrapper">
      <header>
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded">chevron_left</span>
          <span id="next" class="material-symbols-rounded">chevron_right</span>
        </div>
        <a href="javascript:exibirModal()">
          <i class="ph ph-plus"></i>
      </a>
      </header>
      <div class="calendar">
        <ul class="weeks">
          <li>Dom</li>
          <li>Seg</li>
          <li>Ter</li>
          <li>Qua</li>
          <li>Qui</li>
          <li>Sex</li>
          <li>Sab</li>
        </ul>
      <div class="dias">
        <ul class="days"></ul>
      </div>
      </div>
      
    </div>

    

    <footer>
      
    </footer>
    <div class="modal">
      
      <a href="javascript:exibirModal()" id="x">
        <i class="ph ph-x" style="color: white;">
        </i>  
      </a> 
      <a href = "http://localhost/epa2k23/home/index.html" >
      <img src="logo.png" alt="logo"> 
      </a>
        <?php
    echo "<center>";
    echo "<br>";
    echo "Nome do Remédio: ";
    echo $_SESSION['nome'];
    echo "<br>";
    echo "Quantos dias de medicação: ";
    echo $_SESSION['date'];
    echo "<br>";
    echo "Quantas Vezes por dias: ";
    echo $_SESSION['horas'];
    echo "</center>";
     ?>
    
    </div>

    
  </body>
 
</html>