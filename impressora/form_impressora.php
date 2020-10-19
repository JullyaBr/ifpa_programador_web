<div class="container">
  <?php
  if(isset($registro)){
    $acao = "crud_impressora.php?acao=atualizar&id="
    .$registro['id'];
  }else{
    $acao = "crud_impressora.php?acao=cadastrar";
  }
  ?>

  <h2>Cadastro de impressora</h2>
  <form class="" action="<?= $acao; ?>" method="post">
    <div class="form-group">
      <label>abastecimento</label>
      <input class="form-control" type="text" name="abastecimento"
      value="<?php if(isset($registro)) echo $registro['abastecimento'];?>" required autofocus>
    </div>

    <div class="form-group">
      <label for="qtd">Quantidade</label>
      <input id="qtd" class="form-control" type="text" name="qtd"
      value="<?php if(isset($registro)) echo $registro['qtd'];?>">
    </div>

    <div class="form-group">
      <label for="">Categoria:</label>
      <input class="form-control" type="text" name="categoria"
      value="<?php if(isset($registro))
      echo $registro['categoria'];?>" required>
    </div>

   
    <div class="form-group">
      <label for="">Preço</label>
      <input class="form-control" type="text" name="preco"
      value="<?php if(isset($registro))
      echo $registro['preco'];?>" required>
    </div>

    <button class="btn btn-light btn-lg"> Cadastrar</button>
    <a class="btn btn-light btn-lg" href="<?= BASE_URL . 'impressora/crud_impressora.php?acao=listar';?>">Voltar</a>
  </form>
</div>
