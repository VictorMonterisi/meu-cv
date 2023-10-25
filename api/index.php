<?php
    include "includes/base-de-dados.php";
    include "includes/calculador-idade.php";
    include "includes/head.php";
?>
</head>
<body>
    <?php include "includes/header.php"; ?>
    <main class="main-content">
        <div class="container">
            <div class="area-sobre">
                <h2>Sobre</h2>
                <p><?php echo $informacoes_pessoais["sobre"]; ?></p>
            </div>
            <div class="area-objetivo">
                <h2>Objetivo</h2>
                <p><?php echo $informacoes_pessoais["objetivo"]; ?></p>
            </div>
            <div class="area-formacao">
                <h2>Formação Acadêmica</h2>
                <div class="formacao">
                    <?php
                        foreach($formacao_academica as $key => $value) { 
                    ?>
                        <h3><?php echo $value["nomeDoCurso"]; ?></h3>
                        <div class="curso">
                            <h4><?php echo $value["instituicaoDeEnsino"]; ?></h4>
                            <p><?php echo $value["tipoDaGraducao"]; ?></p>
                            <p><?php echo "Início: {$value['dataDeInicio']} | Conclusão: {$value['dataDeConclusao']}"; ?></p>
                        </div>
                    <?php }; ?>
                </div>
            </div>
            <div class="area-cursos-complementares">
                <h2>Cursos e Habilidades Complementares</h2>
                <div class="formacao">
                    <?php
                        foreach($cursos as $curso => $value) {
                    ?>
                        <div class="curso">
                            <h3><?php echo $curso; ?></h3>
                            <p><?php echo $value["instituicaoDeEnsino"]; ?></p>
                            <p><?php echo $value["dataDeEmissao"]; ?></p>
                            <p><?php echo $value["cargaHoraria"]; ?></p>
                        </div>
                    <?php }; ?>
                </div>
            </div>
            <div class="area-experiencia">
                <h2>Experiências</h2>
                <div class="experiencia">
                    <h3>Quality SMI</h3>
                    <?php
                        foreach($experiencias_profissionais as $key => $value) {
                    ?>
                    <div class="area-funcao">
                        <div class="area-nome-tempo-funcao">
                            <h4><?php echo $value["nome"]; ?></h4>
                            <p><?php echo $value["tempo"]; ?></p>
                        </div>
                        <div class="area-descricao-funcao">
                            <p><?php echo $value["descricao"]; ?></p>
                        </div>
                    </div>
                    <?php }; ?>
                </div>
            </div>
            <div class="area-competencias">
                <h2>Competências</h2>
                <ul class="competencias">
                    <?php
                        $max = sizeof($compentencias);
                        for($i = 0; $i<$max; $i++){
                    ?>
                    <li><?php echo $compentencias[$i]; ?></li>
                    <?php }; ?>
                </ul>
            </div>
            <div class="area-tecnologias">
                <h2>Tecnologias</h2>
                <ul class="tecnologias">
                    <?php
                        foreach($tecnologias_conhecidas as $key => $value) {
                    ?>
                    <li><i class="fa-brands fa-<?php echo $value; ?>" title="<?php echo $key; ?>"></i><br><span><?php echo $key; ?></span></li>
                    <?php }; ?>
                    <?php
                        foreach($tecnologias_extras as $key => $value) {
                    ?>
                    <li><i class="fa-solid fa-<?php echo $value; ?>" title="<?php echo $key; ?>"></i><br><span><?php echo $key; ?></span></li>
                    <?php }; ?>
                </ul>
            </div>
            <?php include "includes/footer.php"; ?>
        </div>
    </main>
</body>
</html>