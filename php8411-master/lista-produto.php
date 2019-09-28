<?php 
include('cabecalho.php');
include('conecta.php'); 
include('produto-banco.php');

function cortaDescricao(){
    return strlen($descr);
}
?>

<div class="jumbotron text-center">
    <h1 class="display-4">Lista de Produtos</h1>
    <p>Compre um e leve 2, só hoje!</p>
</div>

<?php  
   if (array_key_exists('removido', $_GET) && $_GET['removido'] == true) : ?>
   <p class="alert alert-success">Master Leve</p>
<?php endif; ?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>descricao</th>
            <th>Categoria</th>
            <th>Condicao</th>
            <th>Remocao</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $listaDeProdutos = listaProdutos($conexao);
    foreach($listaDeProdutos as $produto): ?>
        <tr>
            <td><?= $produto['id'] ?></td>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td>
            <td><?= $produto['descricao'] ?></td>
            <td><?= $produto['condicao'] ?></td>
            <td><?= $produto['categoria'] ?></td>
            <td>
            <form action="remove-produto.php" method="post">
            <input type="hidden" name="id" value="<?= $produto['id']; ?>"/>
            <button class="btn btn-danger"  type="submit" >Deleta produto</button>
          
            </form>
            </td>
        </tr>
    <?php 
    endforeach; ?>
    </tbody>
</table>




<?php 

include('rodape.php'); ?>