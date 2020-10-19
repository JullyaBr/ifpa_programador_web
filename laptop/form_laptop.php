<div class="container">
  <?php
  if(isset($registro)){
    $acao = "crud_laptop.php?acao=atualizar&id="
    .$registro['id'];
  }else{
    $acao = "crud_laptop.php?acao=cadastrar";
  }
  ?>

  <h2>Cadastro de Laptop</h2>
  <form class="" action="<?= $acao; ?>" method="post">
    <div class="form-group">
      <label>Fabricante</label>
      <input class="form-control" type="text" name="fabricante"
      value="<?php if(isset($registro)) echo $registro['fabricante'];?>" required autofocus>
    </div>

    <div class="form-group">
      <label for="qtd">Processador</label>
      <input id="qtd" class="form-control" type="text" name="cpu"
      value="<?php if(isset($registro)) echo $registro['cpu'];?>">
    </div>

    <div class="form-group">
      <label for="qtd">Quantidade</label>
      <input id="qtd" class="form-control" type="text" name="qtd"
      value="<?php if(isset($registro)) echo $registro['qtd'];?>">
    </div>

    <div class="form-group">
      <label for="">Memória RAM:</label>
      <input class="form-control" type="text" name="ram"
      value="<?php if(isset($registro))
      echo $registro['ram'];?>" required>
    </div>

    <div class="form-group">
      <label for="">Armazenamento HD:</label>
      <input class="form-control" type="text" name="hd"
      value="<?php if(isset($registro))
      echo $registro['hd'];?>" required>
    </div>

    <div class="form-group">
      <label for="">Polegadas Tela:</label>
      <input class="form-control" type="text" name="tela"
      value="<?php if(isset($registro))
      echo $registro['tela'];?>" required>
    </div>

    <div class="form-group">
      <label for="">Preço</label>
      <input class="form-control" type="text" name="preco"
      value="<?php if(isset($registro))
      echo $registro['preco'];?>" required>
    </div>

    <button class="btn btn-light btn-lg"> Cadastrar</button>
    <a class="btn btn-light btn-lg" href="<?= BASE_URL . 'laptop/crud_laptop.php?acao=listar';?>">Voltar</a>
  </form>
</div>
