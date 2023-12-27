<?php 
    require "vendor/autoload.php";
    use Stichoza\GoogleTranslate\GoogleTranslate;

    include "includes/base-de-dados.php";

    $texto = "http://localhost/meu-cv/api/index.php";

    $tr = new GoogleTranslate('en');

    echo $tr->translate($informacoes_pessoais["sobre"]);