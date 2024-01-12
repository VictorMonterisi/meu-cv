<?php

    if($_SERVER['HTTP_HOST'] == 'localhost') {
        $url = 'http://localhost/meu-cv/';
    } else if ($_SERVER['HTTP_HOST'] == 'meu-cv.vercel.app') {
        $url = 'https://meu-cv.vercel.app/';
    }
    
    // Meus dados
    $informacoes_pessoais = [
        "primeiroNome" => "Victor",
        "ultimoNome" => "Monterisi",
        "nomeInteiro" => "Victor Augusto Bonaldi Monterisi",
        "email" => "victormonterisi@gmail.com",
        //"celular" => "",
        "dataNascimento" => "08/10/1991",
        "estadoCivil" => "Casado",
        "linkedin" => "https://www.linkedin.com/in/victor-a-b-monterisi/",
        "gitHub" => "https://github.com/VictorMonterisi",
        "codePen" => "https://codepen.io/victor-monterisi/pens/public", 
        "foto" => "assets/img/eu.jpg",
        "sobre" => "Desenvolvedor Web focado na criação de soluções que proporcionem valor tanto à empresa contratante, quanto aos clientes.",
        "objetivo" => "Busco consolidar e aplicar meus conhecimentos para oferecer soluções excepcionais, proporcionando sistemas / sites altamente eficazes. Estou comprometido em contribuir significativamente, seja na criação de funcionalidades que atendam às necessidades do projeto ou no desenvolvimento de experiências online inovadoras."
    ];

    $experiencias_profissionais = [
        "Gokei Tecnologia" => [
            "nome" => "Desenvolvedor Full Stack",
            "tempo" => "12/2023 até o momento",
            "descricao" => "Desenvolvimento e manutenção de sistemas web."
        ],
        "Quality SMI" => [
            "nome" => "Desenvolvedor Web",
            "tempo" => "11/2018 à 12/2022",
            "descricao" => "Desenvolvimento de websites, edição de imagens, gerenciamento de campanhas SEO, apontamento de websites, suporte ao cliente e funcionários internos, administração de hospedagem e suporte de e-mails (criação e configuração)."
        ]
        // "cargo_2" => [
        //     "nome" => "Redator",
        //     "tempo" => "07/2017 à 11/2018",
        //     "descricao" => "Construção de conteúdos para fomentar o engajamento, desenvolvimento de material destinado a e-mail marketing e revisão."
        // ],
        // "cargo_1" => [
        //     "nome" => "Assistente de Marketing",
        //     "tempo" => "06/2016 à 06/2017",
        //     "descricao" => "Atendimento ao cliente, elaboração de orçamentos referente aos serviços de marketing digital, captação e gerenciamento de leads."
        // ]
    ];

    $cursos = [
        "Santander Bootcamp 2023 - Ciência de Dados com
        Python" => [
            "instituicaoDeEnsino" => "Santander Universidades",
            "dataDeEmissao" => "22/10/2023",
            "cargaHoraria" => "89 horas",
            "certificado" => "https://drive.google.com/file/d/1GMxM8qh0YnyKnhhBzgxyGM0nz05pNJ8B/view?usp=sharing"
        ],
        "Projetos Ágeis com Scrum" => [
            "instituicaoDeEnsino" => "DIO",
            "dataDeEmissao" => "06/12/2021",
            "cargaHoraria" => "2 horas",
            "certificado" => "https://drive.google.com/file/d/19AmIQUK51sX2ieDwrWCpWCHTe1AdtWvN/view?usp=sharing"
        ],
        "Introdução a Linguagem de Programação: HTML, CSS, JavaScript e PHP" => [
            "instituicaoDeEnsino" => "Estácio Cursos Livres",
            "dataDeEmissao" => "17/08/2021",
            "cargaHoraria" => "170 horas",
            "certificado" => "https://drive.google.com/file/d/1JwFydif8U8XSOz1pJlZzb32G4qjulmV9/view?usp=sharing"
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
        "Desenvolvimento de Sites e LPs Responsivos(as);",
        "Conexões com Banco de Dados;",
        "Hospedagem de Sites;",
        "Inglês Técnico;",
        "SEO."
    ];

    $tecnologias_conhecidas = [
        "HTML 5" => "html5",
        "CSS 3" => "css3-alt",
        "Sass" => "sass",
        "Bootstrap" => "bootstrap",
        "PHP" => "php",
        // "Laravel" => "laravel",
        "Python" => "python",
        // "cPanel" => "cpanel",
        // "WHM" => "whmcs",
        "Git" => "git",
        "GitHub" => "github",
        "JavaScript" => "js"
    ];

    $tecnologias_extras = [
        "JQuery" => "book",
        "MySQL" => "database"
    ];
    
    // Dados para Head
    $description = "CV de {$informacoes_pessoais['primeiroNome']} {$informacoes_pessoais['ultimoNome']}";
    $title = $description;
    $autor = "{$informacoes_pessoais['primeiroNome']} {$informacoes_pessoais['ultimoNome']}";