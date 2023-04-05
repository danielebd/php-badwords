<?php
var_dump($_GET);


$bad_words = $_GET['badwords'];
$text = $_GET['paragraph'];

$text_clean = str_replace($bad_words, '***', $text);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>preso</title>
</head>
<body>
    <div>Testo: <?php echo $text?>. Lunghezza: <?php echo strlen($text)?></div>
    <div>Testo: <?php echo $text_clean?>. Lunghezza: <?php echo strlen($text_clean)?></div>

</body>
</html>