<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require './services/DisplayService.php';

    $displayService = new DisplayService();

    $displayService->offsetSet('candidateName', 'Tanjed Atono');
    $displayService->offsetSet('candidateAge', 27);
    $displayService->offsetSet('callback', function (){return 'This is a callback';}); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field Nation Display Service</title>
    <link rel="stylesheet" href="./resources/css/style.css">
</head>
<body>
    <?php echo $displayService->displayAsTable(); ?>
</body>
</html>