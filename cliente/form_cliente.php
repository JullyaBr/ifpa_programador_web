<div class="container">
  <?php
  if(isset($registro)){
    $acao = "crud_cliente.php?acao=atualizar&id="
    .$registro['id'];
  }else{
    $acao = "crud_cliente.php?acao=cadastrar";
  }
  ?>

  <h2>Cadastro de Cliente</h2>
  <form class="" action="<?= $acao; ?>" method="post">
    <div class="form-group">
      <label>Nome</label>
      <input class="form-control" type="text" name="nome"
      value="<?php if(isset($registro)) echo $registro['nome'];?>" required autofocus>
    </div>

    <div class="form-group">
      <label for="qtd">Email</label>
      <input id="qtd" class="form-control" type="text" name="email"
      value="<?php if(isset($registro)) echo $registro['email'];?>">
    </div>



    <div class="form-group">
      <label for="">telefone:</label>
      <input class="form-control" type="text" name="telefone"
      value="<?php if(isset($registro))
      echo $registro['telefone'];?>" required>
    </div>


    <button class="btn btn-light btn-lg"> Cadastrar</button>
    <a class="btn btn-light btn-lg" href="<?= BASE_URL . 'cliente/crud_cliente.php?acao=listar';?>">Voltar</a>
  </form>
</div>
