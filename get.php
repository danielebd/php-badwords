<?php
$bad_words = array(
    'Daniele' => '***',
    'Balestro' => '***'
);
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
    <div><?php echo $_GET['word'] ?> <?php echo strlen($_GET['word'])?></div>
    <div><?php echo strtr($_GET['word'], $bad_words)?>
    lunghezza frase <?php echo strlen($_GET['word'])?> </div>
</body>
</html>