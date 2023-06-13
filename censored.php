<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>badword</title>
</head>
<body>
    <?php
    $badWord = $_GET["badWord"];
    $paragraph = $_GET["paragraph"];
    $censored = "***";
    $censoredParagraph = str_ireplace($badWord, $censored, $paragraph );
    ?>
    <h2>Parola da censurare: <span id="censored"><?php echo $badWord; ?></span> </h2>
    <h2>Testo censurato:</h2> 
    <div id="censoredParagraph"><?php echo $censoredParagraph; ?> </div>
</body>
</html>