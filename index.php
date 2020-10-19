<?php
session_start();
if(!isset($_SESSION['autenticado'])){
  header('Location: login.php');
}
print_r($_SESSION);
?>
<?php require_once "./cabecalho.php";?>

<style media="screen"> h4{ text-align: center;} </style>

<div class="container">
  <p style="text-align: right;">
    Sessão iniciada como: <?= $_SESSION['autenticado']; ?></p>
    <div class="jumbotron">
      <h4>Controle de Estoque
        <a class="nav-link"href="<?= BASE_URL.'corrida/crud_corrida.php?acao=listar';?>"> acesse aqui!</a></h4>
      </div>

    </div>
  </div>
  <?php require_once "./rodape.php"; ?>
