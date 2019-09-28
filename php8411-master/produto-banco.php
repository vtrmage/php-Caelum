<?php

function insereProduto($conexao, $nome, $preco,$descricao, $categoria_id, $condicao){
    echo $consulta = "INSERT INTO produtos(nome, preco, descricao, categoria_id, condicao) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, '{$condicao}')";
    return mysqli_query($conexao, $consulta);
}

function listaProdutos($conexao){
  $listaDeProdutos =[];
  $consulta = 'SELECT p.*, c.nome AS categoria FROM produtos AS p LEFT JOIN
              categorias AS c ON p.id = c.id';
  $resultado = mysqli_query($conexao, $consulta);

  while($produto = mysqli_fetch_assoc($resultado)){
      array_push($listaDeProdutos, $produto);
  }
  return $listaDeProdutos;
}


function removeProduto($conexao, $id){
  $query = "DELETE FROM produtos where id = {$id}";
  return mysqli_query($conexao, $query);
}