<div class="container">
  <?php if(isset($_GET['erro'])){ ?>
    <div class="alert alert-danger" role="alert">
      Este dado não pode ser removido,
      pois está atrelado em outras tabelas
    </div>
  <?php } ?>

  <br>

  <h1>Laptops Cadastrados</h1>
  <a class="btn btn-secondary align-right"
  href="relatorio_laptop.php" >
  <span data-feather="printer"></span></a>

  <a class="btn btn-secondary"
  href="crud_laptop.php?acao=novo">
  <span data-feather="plus-square"></span> Adicionar</a>

  <br/><br/>

  <table class="table table-bordered table-hover">
   <thead class="">
    <th>#</th>
    <th>Fabricante</th>
    <th>Processador</th>
    <th>Quantidade</th>
    <th>Memória RAM</th>
    <th>Armazenamento HD</th>
    <th>Tela</th>
    <th>Preço</th>
    <th>Editar</th>
    <th>Excluir</th>
  </thead>
  <tbody>
    <?php foreach($lista_laptop as $item):
      $id = $item['id']; ?>
      <tr>
        <td><?= $item['id']; ?></td>
        <td><?= $item['fabricante']; ?></td>
        <td><?= $item['cpu']; ?></td>
        <td><?= $item['qtd']; ?></td>
        <td><?= $item['ram']; ?></td>
        <td><?= $item['hd']; ?></td>
        <td><?= $item['tela']; ?></td>
        <td><?= $item['preco']; ?></td>
        <td><a class="btn btn-secondary" href="crud_laptop.php?acao=buscar&id=<?= $id; ?>">
          <span data-feather="edit"></span></a>
        </td>
        <td>
          <a class="btn btn-secondary" href="crud_laptop.php?acao=deletar&id=<?= $id; ?>">
            <span data-feather="delete"></span>
          </a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div> <!-- Div Container-->
