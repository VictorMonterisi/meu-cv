
<header>
    <div class="container-header">
        <div class="area-informacoes-pessoais">
            <div class="area-foto">
                <figure>
                    <img src="<?php echo $url . $informacoes_pessoais["foto"]; ?>" alt="<?php echo $informacoes_pessoais["nomeInteiro"]; ?>" class="">
                </figure>
            </div>
        </div>
        <div class="area-identificacao-contato">
            <h1><?php echo $informacoes_pessoais["nomeInteiro"]; ?></h1>
            <ul>
                <li><i class="fa-solid fa-ring"></i> <?php echo $informacoes_pessoais["estadoCivil"]; ?></li>
                <li><i class="fa-solid fa-sun"></i> <?php calculaIdade($data); ?> anos</li>
                <li><i class="fa-brands fa-whatsapp"></i> <a href="tel:<?php echo $informacoes_pessoais["ddd"] . $informacoes_pessoais["celular"]; ?>" title="<?php echo "{$informacoes_pessoais["ddd"]} {$informacoes_pessoais["celular"]}"; ?>"><?php echo "{$informacoes_pessoais["ddd"]} {$informacoes_pessoais["celular"]}"; ?></a></li>
                <li><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo $informacoes_pessoais["email"]; ?>" title="<?php echo $informacoes_pessoais["email"]; ?>"><?php echo $informacoes_pessoais["email"]; ?></a></li>
                <li><i class="fa-brands fa-linkedin-in"></i> <a href="<?php echo $informacoes_pessoais["linkedin"]; ?>" target="_blank" title="<?php echo $informacoes_pessoais["linkedin"]; ?>"><?php echo $informacoes_pessoais["linkedin"]; ?></a></li>
                <li><i class="fa-brands fa-github"></i> <a href="<?php echo $informacoes_pessoais["gitHub"]; ?>" target="_blank" title="<?php echo $informacoes_pessoais["gitHub"]; ?>"><?php echo $informacoes_pessoais["gitHub"]; ?></a></li>
            </ul>
        </div>
    </div>
</header>
