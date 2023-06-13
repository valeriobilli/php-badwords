<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badword</title>
    <link rel="stylesheet" href="./style/style.css">
    <title>form</title>
</head>
<body>
    <?php 
    $badWord = $_GET["badWord"];
    $paragraph = $_GET["paragraph"];
    ?>
    <div>La parola da censurare è: <?php echo $badWord; ?> </div>
    <div> <?php echo $paragraph; ?> </div>
    <h1>Censuratore</h1>
    <form action="censored.php" method="GET">
        
        <div> 
            <label for="badWord">Parola da censurare</label>
            <input type="text" name="badWord" id="badWord" placeholder="Inserisci una parola">
        </div>
        
        <div>
            <label for="paragraph">Testo da censurare</label>
            <textarea name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Inserisci del testo"></textarea>
        </div>
        <button type="submit">Invia</button>
        <button type="reset">Pulisci</button>
    </form> 
</body>
</html>