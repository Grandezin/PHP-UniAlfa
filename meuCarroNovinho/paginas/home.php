<div class="container">
    <h1>veiculos em destaque</h1>
    <div class="grid">
    <?php
        //print_r($carros)
        $i = 1;
        foreach( $carros as $carro){
            //echo $i. $carro["modelo"];
            //echo "<br>";
            
            ?>
            
            <div class="grid-coluna">
                <img src="<?=$carro['foto']?>" alt="<?=$carro["modelo"]?>">
                <p><strong><?=$carro["modelo"]?></strong></p>
                <p>
                    <a href="index.php?pagina=detalhes&id=<?=$carro["id"]?>" class="grid-btn" >
                    Detalhes
                    </a>
                </p>
            </div>

            <?php
            $i++;
            if( $i > 3){
                break;
            }
            
        }
    ?>
    </div>
</div>