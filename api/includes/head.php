<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="http://schema.org/WebPage">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="<?php echo $url; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="robots" content="noindex,nofollow">
	<meta name="author" content="<?php echo "Desenvolvido por {$autor} - Todos os direitos reservados, " . date("Y") ;?>">
	<meta property="og:description" content="<?php echo $description; ?>">
	<meta property="og:site_name" content="<?php echo "Curriculum Vitae de {$autor}"; ?>">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>assets/css/main-style.css">
	<link rel="shortcut icon" href="<?php echo $url; ?>assets/img/favicon.png">
	<script src="https://kit.fontawesome.com/d1ab779ca2.js" crossorigin="anonymous"></script>
	<script src="<?php echo $url; ?>assets/js/efeito-scroll-top.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="<?php echo $url; ?>assets/js/parametros-download-pdf.js"></script>
	<script src="<?php echo $url; ?>assets/js/parametros-imprimir-documento.js"></script>
