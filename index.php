<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require './src/Service/Output.php';


    $query = isset($_GET['assessment']) ? $_GET['assessment'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field Nation Assessment</title>
    <!-- CUSTOM STYLE SHEETS -->
    <link rel="stylesheet" href="./resources/css/style.css">
</head>
<body>

    <?php
        switch($query) {

            case 1:  
                $output = new Output();

                $output->offsetSet('candidateName', 'Tanjed Atono');
                $output->offsetSet('candidateAge', 27);
                $output->offsetSet('callback', function (){return 'This is a callback';}); 
                echo $output->displayAsTable();
                break; 

            case 2:
                echo '<div id="square"></div>';
                break; 

            default:  
                echo '<h1>Welcome to FN assessment solution</h1>';
                break; 

        }
    ?>

    <!-- SCRIPTS -->
    <script src="resources/js/script.js"></script>
</body>
</html>