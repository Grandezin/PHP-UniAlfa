<?php
    $id = $_GET["id"] ?? null;

    if(empty($id)){
        echo"<h1 class='center'>Veículo não está no sistema</h1>";
    }else{
        ?>
        <div class="grid-2">
            <div class="grid-coluna">
                <img src="<?=$carros[$id]['foto']?>" alt="foto de um carro">
            </div>
            <div class="grid-2-coluna">
                <h2 class="center"><?=$carros[$id]["modelo"]?></h2>
                <p class="center">
                    <Strong>Acessórios:</Strong>
                    <br>
                    <?=$carros[$id]["acessorios"]?>
                </p>
                <p class="center">
                    <strong>Valor:</strong>
                    <br>
                    R$
                    <?php
                        $valor = $carros[$id]["valor"];
                        echo number_format($valor,2,",",".");
                    ?>
                    <br>
                    
                </p>
                <a href="https://www.youtube.com/watch?v=LLFhKaqnWwk" target="_blank" class="center">
                    <button class="btn-comprar" >Comprar</button>
                </a>
            </div>
        </div>
        <?php
    }