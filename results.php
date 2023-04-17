<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <?php 
        $paragrafo = $_POST['paragraph'];

        $badword = $_POST['badword'];

        echo $paragrafo;

    
    ?>
    <br>
    <span>La lunghezza del testo è: <?php  echo strlen($paragrafo) ?> lettere</span>

    <hr>

    <?php 

        $newparagraph = str_replace($badword, '(***)' , $paragrafo);

        echo $newparagraph;

    ?>

    <span>La lunghezza del testo è: <?php  echo strlen($newparagraph) ?> lettere</span>
    
</body>
</html>