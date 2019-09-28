<?php
 include('cabecalho.php'); 
 include('conecta.php');
 include('produto-banco.php'); 
 $nome = $_POST['nome'];
 $preco = $_POST['preco'];
 $descricao = $_POST['descricao'];
 $categoria_id = $_POST['categoria_id'];
 $condicao = $_POST['condicao'];


?>

<?php if( insereProduto($conexao, $nome, $preco,$descricao, $categoria_id, $condicao )) : ?>
    <p class="alert alert-success">
        O produto <?= $nome; ?>, <?= $preco ?> foi salvo com sucesso.
    </p>
<?php else: ?>
    <p class="alert alert-danger">
        O produto <?= $nome; ?> não foi salvo!! Tá doidão!? <?= mysqli_error($conexao); ?>
    </p>
<?php endif; ?>

<?php include('rodape.php') ?>




<?php
    include ('header.php');
    require_once('conecta.php');         
?>
