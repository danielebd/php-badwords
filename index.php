<?php


var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bad Words</title>
</head>

<body>
   <form action="get.php" method="GET">
      <label for="badwords">badwords</label>
      <input type="text" name='badwords' id="badwords">
      <label for="paragraph">paragraph</label>
      <input type="text" name='paragraph' id="paragraph">
      <button>invia</button>
   </form>
</body>

</html>