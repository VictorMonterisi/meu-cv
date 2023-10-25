<?php

    $caminho_principal = '://'.$_SERVER['HTTP_HOST'];
    $url = 'https://meu-cv.vercel.app/';
    
    // Meus dados
    $informacoes_pessoais = [
        "primeiroNome" => "Victor",
        "ultimoNome" => "Monterisi",
        "nomeInteiro" => "Victor Augusto Bonaldi Monterisi",
        "email" => "victormonterisi@gmail.com",
        "celular" => "(11) 91355-2692",
        "dataNascimento" => "08/10/1991",
        "estadoCivil" => "Casado",
        "linkedin" => "https://www.linkedin.com/in/victor-a-b-monterisi/",
        "gitHub" => "https://github.com/VictorMonterisi",
        "codePen" => "https://codepen.io/victor-monterisi/pens/public", 
        "foto" => "assets/img/eu.jpg",
        // "sobre" => "Redator / Copywriter e Desenvolvedor Web focado na criação de soluções que proporcionem valor tanto à empresa contratante, quanto aos clientes.",
        "sobre" => "Desenvolvedor Web focado na criação de soluções que proporcionem valor tanto à empresa contratante, quanto aos clientes.",
        "objetivo" => "Busco consolidar e aplicar meus conhecimentos para oferecer soluções excepcionais, proporcionando sistemas / sites altamente eficazes. Estou comprometido em contribuir significativamente, seja na criação de funcionalidades que atendam às necessidades do projeto ou no desenvolvimento de experiências online inovadoras."
    ];

    $experiencias_profissionais = [
        // "cargo_4" => [
        //     "nome" => "Líder de Desenvolvimento",
        //     "tempo" => "11/2021 à 12/2022",
        //     "descricao" => "Gestão da equipe de desenvolvedores e auxílio na elaboração de soluções visando proporcionar valor à empresa e aos clientes."
        // ],
        "cargo_3" => [
            "nome" => "Desenvolvedor Web",
            "tempo" => "12/2018 à 12/2022",
            "descricao" => "Desenvolvimento de websites com foco no posicionamento orgânico (seguindo as boas práticas da web e recomendações do W3C), edição de imagens, gerenciamento de campanhas SEO, elaboração de orçamentos referente ao serviço de posicionamento orgânico, apontamento de websites, suporte ao cliente nas questões de atualizações do site, recolhimento de feedback do cliente sobre os serviços prestados, manejamento de hospedagem e suporte de e-mails (criação e configuração)."
        ],
        "cargo_2" => [
            "nome" => "Redator",
            "tempo" => "07/2017 à 11/2018",
            "descricao" => "Elaboração de conteúdo textual visando o posicionamento orgânico juntamente ao engajamento do público alvo."
        ],
        "cargo_1" => [
            "nome" => "Assistente de Marketing",
            "tempo" => "06/2016 à 06/2017",
            "descricao" => "Elaboração de orçamentos referente ao serviço de posicionamento orgânico, captação e gerenciamento de leads."
        ]
    ];

    $formacao_academica = [
        "curso_1" => [
            "instituicaoDeEnsino" => "Universidade Estácio de Sá", 
            "tipoDaGraducao" => "Tecnólogo", 
            "nomeDoCurso" => "Gestão da Tecnologia da Informação", 
            "dataDeInicio" => "01/07/2020",
            "dataDeConclusao" => "17/02/2023"
        ]
    ];

    $compentencias = [
        "Redação de Conteúdos Criativos e Cativantes;",
        "Desenvolvimento de Soluções Web;",
        "Hospedagem de Sites;",
        "Desenvolvimento de Sites e LPs Responsivos(as);",
        "SEO."
    ];

    $tecnologias_conhecidas = [
        "HTML 5" => "html5",
        "CSS 3" => "css3-alt",
        "Bootstrap" => "bootstrap",
        "PHP" => "php",
        "Laravel" => "laravel",
        "Python" => "python",
        "cPanel" => "cpanel",
        "WHM" => "whmcs",
        "Git" => "git",
        "GitHub" => "github",
        "GitLab" => "gitlab",
        // "Java" => "java",
        "JavaScript" => "js"
        // "NodeJs" => "node",
    ];

    $tecnologias_extras = [
        "JQuery" => "book",
        "MySQL" => "database"
    ];
    
    // Dados para Head
    $description = "CV de {$informacoes_pessoais['primeiroNome']} {$informacoes_pessoais['ultimoNome']}";
    $title = $description;
    $autor = "{$informacoes_pessoais['primeiroNome']} {$informacoes_pessoais['ultimoNome']}";