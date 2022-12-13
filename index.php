<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $textString = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laborum laboriosam tenetur ad recusandae sapiente ipsum, eligendi, nostrum sint corrupti nesciunt soluta repellendus voluptas cum quibusdam? Velit porro quasi optio? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laborum laboriosam tenetur ad recusandae sapiente ipsum, eligendi, nostrum sint corrupti nesciunt soluta repellendus voluptas cum quibusdam? Velit porro quasi optio? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laborum laboriosam tenetur ad recusandae sapiente ipsum, eligendi, nostrum sint corrupti nesciunt soluta repellendus voluptas cum quibusdam? Velit porro quasi optio?';
        $badWord = $_GET['badword'];
        $replacedText = str_ireplace($badWord, '***', $textString);
    ?>

    <div> <?php echo "Stringa di testo: ${textString}" ?></div> 
    <br>
    <div>Lunghezza del testo: <?php echo strlen($textString) ?> </div>
    <br>
    <form action="" method="GET">
        <label for="badword">Scrivi una parola da censurare:</label>
        <input type="text" name="badword" id="badword">
        <button>Censura</button>
    </form>
    <br>
    <div> <?php echo "Stringa di testo censurata: ${replacedText}" ?></div>
    <br>
    <div> Lunghezza del testo censurata: <?php echo strlen($replacedText) ?></div>
</body>
</html>