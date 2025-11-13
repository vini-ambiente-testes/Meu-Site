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
                include 'includes/rodape.php';
            break;
            case 'sobre':
                include 'includes/sobre.php';
            break;
            case 'servicos':
                include 'includes/servicos.php';
            break;
            case 'contato':
                include 'includes/contato.php';
            break;
        }
?>
</body>
</html>