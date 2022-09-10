<div class="container">
    <h1>Nossos Veículos</h1>
    <div class="grid">
    <?php

foreach($carros as $carro){
    ?>
    <div class="grid-coluna">
        <img src="<?=$carro['foto']?>" alt="foto de carro">
        <p><strong><?=$carro['modelo']?></strong></p>
        <p>
            <a href="index.php?pagina=detalhes&id=<?=$carro['id']?>" class="grid-btn">
                Detalhes    
            </a>
        </p>       
    </div>

    <?php
}
        ?>
    </div>
</div>