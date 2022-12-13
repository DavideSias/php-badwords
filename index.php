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
        $textString = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laborum laboriosam tenetur ad recusandae sapiente ipsum, eligendi, nostrum sint corrupti nesciunt soluta repellendus voluptas cum quibusdam? Velit porro quasi optio?';
    ?>

    <div>Stringa di testo: <?php echo "${textString}" ?></div>
    <div>Lunghezza del testo: <?php echo strlen($textString) ?> </div>
</body>
</html>