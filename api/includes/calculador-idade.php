<?php

    // Função para calcular a idade
    $data = $informacoes_pessoais["dataNascimento"]; // Colhe a data de nascimento informada no arquivo base-de-dados.php
    
    function calculaIdade($data) {
        $dataDeNascimento = date('d-m-Y', strtotime($data)); // Converte a data para o formado m-d-Y

        list($mesNascimento, $diaNascimento, $anoNascimento) = explode('-', $dataDeNascimento); // Remove "-" e cria um array com o mês, dia e ano separados

        $idade = date('Y') - $anoNascimento; // Substrai o ano atual com o ano de nascimento

        if (date('m') < $mesNascimento) {
            $idade--; // Caso a data atual não coincidir com o mês de nascimento, remove uma unidade
        } elseif (date('m') == $mesNascimento && date('d') < $diaNascimento) {
            $idade--; //Caso a data atual coincidir com o mês de nascimento, mas o dia for antes do aniversário, remove uma unidade
        }
    }
    calculaIdade($data);