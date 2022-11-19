<h1 class="text-center">Todos o lanches</h1>

<div class="row">
    <?php
        $sqlProdutos = "SELECT * FROM produto";
        $consultaProduto = mysqli_query($con,$sqlProdutos);

        while($dados = mysqli_fetch_array($consultaProduto)){
            $id = $dados["id"];
            $produto = $dados["produto"];
            $foto = $dados["foto"]
            ?>
            <div class="col-12 col-md-4 text-center">
                <div class="card">
                        <img src="imagens/<?=$foto?>" alt="<?=$produto?>">
                    <p>
                        <strong><?=$produto?></strong>
                    </p>
                    <p>
                        <a href="produto/<?=$id?>" class="btn btn-danger">Detalhes</a>
                    </p>
                </div>
            </div>
            <?php
        }
    ?>
</div>