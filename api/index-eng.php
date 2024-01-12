<?php
    require "vendor/autoload.php";

    use Stichoza\GoogleTranslate\GoogleTranslate;

    $tr = new GoogleTranslate('en');

    include "includes/base-de-dados.php";
    include "includes/calculador-idade.php";
    include "includes/head.php";
?>
</head>

<body>
    <?php include "includes/header-eng.php"; ?>
    <main class="main-content">
        <div class="container">
            <div class="area-sobre">
                <h2>Professional Overview</h2>
                <p><?php echo $tr->translate($informacoes_pessoais["sobre"]); ?></p>
            </div>
            <div class="area-objetivo">
                <h2>Career Objectives</h2>
                <p><?php echo $tr->translate($informacoes_pessoais["objetivo"]); ?></p>
            </div>
            <div class="area-formacao">
                <h2>Academic Background</h2>
                <div class="formacao">
                    <?php
                        foreach($formacao_academica as $key => $value) { 
                    ?>
                    <h3><?php echo $tr->translate($value["nomeDoCurso"]); ?></h3>
                    <div class="curso">
                        <h4><?php echo $value["instituicaoDeEnsino"]; ?></h4>
                        <p><?php echo $tr->translate($value["tipoDaGraducao"]); ?></p>
                        <p><?php echo "Start: {$value['dataDeInicio']} | End: {$value['dataDeConclusao']}"; ?>
                        </p>
                    </div>
                    <?php }; ?>
                </div>
            </div>
            <div class="area-cursos-complementares">
                <h2>Professional Training and Skills</h2>
                <div class="formacao">
                    <?php
                        foreach($cursos as $curso => $value) {
                    ?>
                    <h3><?php echo $tr->translate($curso); ?></h3>
                    <div class="curso">
                        <h4><?php echo $value["instituicaoDeEnsino"]; ?></h4>
                        <p><?php echo $value["dataDeEmissao"]; ?></p>
                        <p><?php echo $tr->translate($value["cargaHoraria"]); ?></p>
                        <p><a href="<?php echo $value["certificado"]; ?>" title="<?php echo "Certificado {$curso}"; ?>"
                                target="_blank">View Certificate <i class="fa-solid fa-file-pdf"></i></a></p>
                    </div>
                    <?php }; ?>
                </div>
            </div>
            <div class="area-experiencia">
                <h2>Work Experience</h2>
                <div class="experiencia">
                    <?php
                        foreach($experiencias_profissionais as $key => $value) {
                    ?>
                    <h3><?php echo $key; ?></h3>
                    <div class="area-funcao">
                        <div class="area-nome-tempo-funcao">
                            <h4><?php echo $tr->translate($value["nome"]); ?></h4>
                            <p><?php echo $tr->translate($value["tempo"]); ?></p>
                        </div>
                        <div class="area-descricao-funcao">
                            <p><?php echo $tr->translate($value["descricao"]); ?></p>
                        </div>
                    </div>
                    <?php }; ?>
                </div>
            </div>
            <div class="area-competencias">
                <h2>Skills and Competencies</h2>
                <ul class="competencias">
                    <?php
                        $max = sizeof($compentencias);
                        for($i = 0; $i<$max; $i++){
                    ?>
                    <li><?php echo $tr->translate($compentencias[$i]); ?></li>
                    <?php }; ?>
                </ul>
            </div>
            <div class="area-tecnologias">
                <h2>Technical Proficiencies</h2>
                <ul class="tecnologias">
                    <?php
                        foreach($tecnologias_conhecidas as $key => $value) {
                    ?>
                    <li><i class="fa-brands fa-<?php echo $value; ?>"
                            title="<?php echo $key; ?>"></i><br><span><?php echo $key; ?></span></li>
                    <?php }; ?>
                    <?php
                        foreach($tecnologias_extras as $key => $value) {
                    ?>
                    <li><i class="fa-solid fa-<?php echo $value; ?>"
                            title="<?php echo $key; ?>"></i><br><span><?php echo $key; ?></span></li>
                    <?php }; ?>
                </ul>
            </div>
            <?php include "includes/footer.php"; ?>
        </div>
    </main>
</body>

</html>