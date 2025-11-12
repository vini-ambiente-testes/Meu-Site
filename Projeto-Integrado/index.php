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
            include 'includes/head.php';
            include 'includes/carrossel.php';
            include 'includes/secao.php';
            include 'includes/cards.php';
            include 'includes/footer.php';
        break;
  
        case 'about':
            include 'pages/about.php';
            break;
      /*default:
            include 'pages/404.php';*/
    }
?>
</body>
</html>