<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>

    <link rel="stylesheet" href="styleIndex.css">
</head>
<body>
    <div class="container">

        <form id="form" action="results.php" method="POST">
    
            <textarea name="paragraph" placeholder="Inserisci un testo"  cols="30" rows="10"></textarea> <br>
            
            <input type="text" placeholder="Inserisci la parola da censurare" name="badword">
    
            <input type="submit" >
    
        </form>

    </div>

</body>
</html>