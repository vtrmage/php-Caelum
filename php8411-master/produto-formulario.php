<?php 
include('cabecalho.php');
require_once('conecta.php');
require_once('categoria-banco.php');
$categorias= listaCategoria($conexao);

?>

<h1 class="display-4">Cadastro de Produto</h1>

<form action="adiciona-produto.php" method="post"> 
    <div class="form-group">
        <label>Nome: </label>
        <input type="text" name="nome"  class="form-control" />
    </div>

    <div class="form-group">
        <label>Preço: </label>
        <input type="text" name="preco" class="form-control"  />
    </div>

    <div class="form-group">
        <label>Categoria louca: </label>
        <select name="categoria_id" class="form-control" >
         <?php foreach($categorias as $pumba): ?>
          <option value="<?= $pumba['id'] ?>">
            <?= $pumba['nome'] ?>
          </option>
         <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>descricao: </label>
        <textarea name="descricao" class="form-control" ></textarea>
    </div>
    <div class="form-group">
        <label>Condicao do produto: </label>
        <select name="condicao">
          <option value="novo">Novo</option>
          <option value="usado">USADO</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php include('rodape.php') ?>