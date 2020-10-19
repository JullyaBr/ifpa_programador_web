<?php
session_start();
if(!isset($_SESSION['autenticado'])){
  header('Location: ../login.php');
}
print_r($_SESSION);
require_once('../conexao.php');

$acao = $_GET['acao'];

    //Ação para listar os dados
if($acao=='listar'){
  $sql  = "SELECT * FROM impressora;";
  $query = $con->query($sql);
  $lista_impressora = $query->fetchAll();
  require_once('../cabecalho.php');
  require('lista_impressora.php');
  require_once('../rodape.php');
}

    //***AÇÃO NOVO, MOSTRA O FORMULARIO PARA CADASTO
else if($acao=="novo"){

  require_once('../cabecalho.php');
  require('form_impressora.php');
  require_once('../rodape.php');
}

    //**Ação para Cadastro
else if($acao=="cadastrar"){
  $registro = $_POST;
  $sql = "INSERT INTO impressora (abastecimento, qtd, categoria, preco)
  VALUES (:abastecimento, :qtd, :categoria, :preco);";
  $query = $con->prepare($sql);
  $r   = $query->execute($registro);
  
  if($r==true) {
    header('Location: crud_impressora.php?acao=listar');
  }else{
    echo "Erro ao tentar cadastrar os dados";
    print_r($registro);
  }
}
    

    //**AÇÃO PARA EXCLUIR ITEM
else if($acao=="deletar"){
  $id = $_GET['id'];
      //verificando se não esta atrelado ha nenhum dado
  $sql   = "SELECT COUNT(*) as qtd
  FROM impressora WHERE id=:id";
  $query = $con->prepare($sql);
  $r     = $query->execute(array('id'=>$id));
  $qtd   = $query->fetch();
  if($qtd >= 1) {
    header('Location: crud_impressora.php?acao=listar&erro=true');
  }

  $sql = "DELETE FROM impressora WHERE id= :id";
  $query = $con->prepare($sql);
  $r = $query->execute(array('id'=>$id));
  if($r==true){
    header('Location: crud_impressora.php?acao=listar');
  }else{
    echo "Erro ao tentar excluir o registro";
  }
}
    
    //**AÇÃO PARA BUSCAR OS DADOS
else if($acao=="buscar"){
  $sql  = "SELECT * FROM impressora WHERE id=:id";
  $query = $con->prepare($sql);
  $pacategorias = array('id'=>$_GET['id']);
  $r = $query->execute($pacategorias);

  if($r==false){
    echo "Erro ao tentar recuperar os dados";
    die();
  }

  $registro = $query->fetch();
  $lista_impressora = getimpressoras($con);
  require_once('../cabecalho.php');
  require "./form_impressora.php";
  require_once('../rodape.php');
}

    //**AÇÃO PARA ATUALIZAR OS DADOS
else if($acao=="atualizar"){
  $sql = "UPDATE impressora
  SET  id=:id,
      abastecimento=:abastecimento,  
      qtd=:qtd,
      categoria=:categoria,      
      preco=:preco
  WHERE id=:id";
  $query = $con->prepare($sql);
  $registro = $_POST;
  $registro['id'] = $_GET['id'];

  $r   = $query->execute($registro);
  if($r==true) {
    header('Location: crud_impressora.php?acao=listar');
  }else{
    echo "Erro ao tentar atualizar os dados";
    print_r($registro);
  }
}

//funções em PHP
function getimpressoras($con){
  $sql  = "SELECT * FROM impressora;";
  $query = $con->query($sql);
  $lista_impressora = $query->fetchAll();
  return $lista_impressora;
}

?>
