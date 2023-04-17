<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>

    <link rel="stylesheet" href="styleResults.css">
</head>
<body>
    <div class="first-text text">

        <?php
            // ottengo il paragrafo
            $paragraph = $_POST['paragraph'];
            // ottenho la parola da censurare
            $badword = $_POST['badword'];
            // visualizzo il paragrafo senza censure
            echo $paragraph;

        ?>

        <br><br>

        <span>La lunghezza del testo è: <?php  echo strlen($paragraph) ?> lettere</span>

    </div>


    
    <div class="second-text text">

        <?php 
    
            $newparagraph = str_replace($badword, '(***)' , $paragraph);
    
            echo $newparagraph;
    
        ?>
    
        <br><br>
    
        <span>La lunghezza del testo è: <?php  echo strlen($newparagraph) ?> lettere</span>

    </div>
    
</body>
</html>