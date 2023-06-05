<?php

    $caminho_principal = '://'.$_SERVER['HTTP_HOST'];
    $url = 'https://meu-cv.vercel.app/';
    
    // Meus dados
    $informacoes_pessoais = [
        "primeiroNome" => "Victor",
        "ultimoNome" => "Monterisi",
        "nomeInteiro" => "Victor Augusto Bonaldi Monterisi",
        "email" => "victoraugustobm1@gmail.com",
        "dataNascimento" => "08/10/1991",
        "estadoCivil" => "Casado",
        "ddd" => "(11)",
        "celular" => "97831-1140",
        "linkedin" => "https://www.linkedin.com/in/victor-a-b-monterisi/",
        "gitHub" => "https://github.com/VictorMonterisi",
        "codePen" => "https://codepen.io/victor-monterisi/pens/public", 
        "foto" => "assets/img/eu.jpg",
        "sobre" => "Desenvolvedor front-end focado em soluções para SEO que atualmente visa o aprendizado de linguagens e tecnicas back-end,automação e tratamento de dados.",
        "objetivo" => " Consolidar os meus conhecimentos para encontrar as melhores soluções voltadas ao desenvolvimento aplicações web e para automação.",
    ];

    $experiencias_profissionais = [
        "cargo_4" => [
            "nome" => "Líder de Desenvolvimento",
            "tempo" => "11/2021 à 12/2022",
            "descricao" => "Gerir a equipe de desenvolvedores para proporcionar valor à empresa e aos clientes."
        ],
        "cargo_3" => [
            "nome" => "Web Designer - Desenvolvedor Web",
            "tempo" => "12/2018 à 11/2021",
            "descricao" => "Desenvolvimento de websites com foco no posicionamento orgânico (seguindo as boas práticas da web e recomendações do W3C), edição de imagens, gerenciamento de campanhas SEO, elaboração de orçamentos referente ao serviço de posicionamento orgânico, apontamento de websites, suporte ao cliente nas questões de atualizações do site, recolhimento de feedback do cliente sobre os serviços prestados, manejamento de hospedagem e suporte de e-mails (criação e configuração)."
        ],
        "cargo_2" => [
            "nome" => "Redator",
            "tempo" => "07/2017 à 11/2018",
            "descricao" => "Elaboração de conteúdo textual visando o posicionamento orgânico."
        ],
        "cargo_1" => [
            "nome" => "Assistente de Marketing",
            "tempo" => "06/2016 à 07/2017",
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
        "Kanban",
        "Scrum",
        "Hospedagem de Sites",
        "Desenvolvimento de Sites e LPs Responsivos(as)",
        "SEO"
    ];

    $tecnologias_conhecidas = [
        "HTML 5" => "html5",
        "CSS 3" => "css3-alt",
        "Bootstrap" => "bootstrap",
        "PHP" => "php",
        "JavaScript" => "js",
        "NodeJs" => "node",
        "Python" => "python",
        "cPanel" => "cpanel",
        "WHMCS" => "whmcs",
        "Git" => "git",
        "GitHub" => "github",
        "GitLab" => "gitlab"
    ];
    
    // Dados para Head
    $description = "CV de {$informacoes_pessoais['primeiroNome']} {$informacoes_pessoais['ultimoNome']}";
    $title = $description;
    $autor = "{$informacoes_pessoais['primeiroNome']} {$informacoes_pessoais['ultimoNome']}";