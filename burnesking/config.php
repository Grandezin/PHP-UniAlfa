<?php
 $servidor = "localhost";
 $banco = "bk";
 $usuario = "root";
 $senha = "";

 $con = mysqli_connect($servidor,$usuario,$senha,$banco) or die("Não foi possível estabelecer conecção com o baco");
