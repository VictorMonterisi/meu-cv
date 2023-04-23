<?php

    // Função para calcular a idade
    $data = $informacoes_pessoais["dataNascimento"]; // Colhe a data de nascimento informada no arquivo base-de-dados.php
    
    function calculaIdade($data) {
        $dataDeNacimento = date('Y-m-d', strtotime($data)); // Converte a data para o formado Y-m-d
        list($anoNascimento, $mesNascimento, $diaNascimento) = explode('-', $dataDeNacimento); // Remove "-" e cria um array com o ano, mês e dia separados
        $idade = date('Y') - $anoNascimento; // Substrai o ano atual com o ano de nascimento
        if(date('m') < $mesNascimento) {
            $idade--; // Caso a data atual não coincidir com o mês de nascimento, remove uma unidade
        } elseif ((date('m') == $mesNascimento) && (date('d') < $diaNascimento)) {
            $idade--; // Caso a data atual coincidir com o mês de nascimento, mas o dia for antes do aniversário, remove uma unidade
        }
        echo $idade; // Exibe a idade
    }