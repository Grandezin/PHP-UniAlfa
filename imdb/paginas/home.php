<h1 class="text-center">
    Últimos filmes
</h1>

<?php
    $link = file_get_contents("https://api.themoviedb.org/3/movie/now_playing?api_key={$key}&language=pt-br&page=1");
    $dados = json_decode($link);

    foreach($dados->results as $filme){
        echo $filme->title."<br>";
    }