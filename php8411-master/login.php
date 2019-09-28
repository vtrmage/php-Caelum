<?php 
include('cabecalho.php');
require_once('conecta.php');
require_once('usuario-banco.php');
require_once('usuario-sessao.php');

$maribele= buscaUsuario($conexao, $email);


var_dump($maribele);
?>

<h1 class="display-4">Login</h1>

<form method="post" > 
    <div class="form-group">
        <label>usuario </label>
        <input type="text" name="email"  class="form-control" />
    </div>

    <div class="form-group">
        <label>senha </label>
        <input type="text" name="senha" class="form-control"  />
    </div>

    <button type="submit" class="btn btn-primary">logar</button>
</form>

<?php include('rodape.php') ?>