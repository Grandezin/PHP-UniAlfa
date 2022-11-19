<?php
  $id = (int)$id;
  
  $sqlProduto = "SELECT p.*, t.tipo FROM produto p inner join tipo t on (t.id = p.tipo_id) 
    WHERE p.id = {$id} limit 1";
  
  $consulta = mysqli_query($con, $sqlProduto);
  $dados = mysqli_fetch_array($consulta);
?>
<div class="row">
    <div class="col-12 col-md-4">
        <img src="imagens/<?=$dados["foto"]?>" alt="<?=$dados["produto"]?>" class="w-100">
    </div>
    <div class="col-12 col-md-8">
        <h2 class="text-center">
            <?=$dados["produto"]?>
        </h2>
        <p>Tipo: <?=$dados["tipo"]?></p>
        <p><?=number_format($dados["valor"],2,",",".")?></p>
        <p><?=$dados["descricao"]?></p>
    </div>
</div>