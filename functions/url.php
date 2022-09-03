<?php

function url_redirect($values = []) {
    $buildQueryString = http_build_query($values);
    header('Location: http://localhost/Exemplos/exercicios/A_MINHA_PRIMEIRA_APLICAÇÃO/?' . $buildQueryString);
    exit; 
}


