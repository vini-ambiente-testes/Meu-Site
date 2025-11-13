<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Integrado</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<?php
    $page = $_GET['page'] ?? 'home';
        switch($page){
            case 'home':
                include 'includes/cabecalho.php';
                include 'includes/inicial.php';
                include 'includes/rodape.php';
            break;
            case 'sobre':
                include 'includes/cabecalho.php';
                include 'includes/sobre.php';
                include 'includes/rodape.php';
                
            break;
            case 'servicos':
                include 'includes/cabecalho.php';
                include 'includes/servicos.php';
                include 'includes/rodape.php';
                
            break;
            case 'contato':
                include 'includes/cabecalho.php';
                include 'includes/contato.php';
                include 'includes/rodape.php';  
            break;
        }
?>
</body>
</html>