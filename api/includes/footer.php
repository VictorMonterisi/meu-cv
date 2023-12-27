<footer>
    <div class="btn-idioma">

        <?php
            if($_SERVER['REQUEST_URI'] == '/api/index.php') {
                $url_idioma = "{$url}api/index-eng.php";
                $img_idioma = "{$url}assets/img/usa.png";
                $title = 'ENG';
                $txt = 'Click to translate';
            } else if ($_SERVER['REQUEST_URI'] == '/api/index-eng.php') {
                $url_idioma = "{$url}api/index.php";
                $img_idioma = "{$url}assets/img/br.png";
                $title = 'PT-BR';
                $txt = 'Clique para traduzir';
            }
        ?>

        <div>
            <a href="<?php echo $url_idioma; ?>" title="<?php echo $title; ?>">
                <img src="<?php echo $img_idioma; ?>" alt="<?php echo $title; ?>">
                <p><?php echo $txt; ?></p>
            </a>
        </div>
    </div>
    <div class=" btn-imprimir" onclick="imprimirDocumento()">
        <i class="fa-solid fa-print"></i>
    </div>
    <div class="btn-baixar-pdf" onclick="downloadPDF()">
        <i class="fa-regular fa-file-pdf"></i>
    </div>
    <div class="btn-scroll-top" onclick="levaParaTopo()">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
</footer>