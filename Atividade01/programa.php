<?php

    include "Usuario.php";
    include "dados/Usuario.php";

    use Atividade01\Usuario as UsuarioRaiz;
    use Atividade01\dados\Usuario as UsuarioDados;

    $obj = new UsuarioRaiz();
    var_dump($obj);
    $obj2 = new UsuarioDados();
