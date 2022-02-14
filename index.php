<?php 

$string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$word = $_GET['word'];

$stringReplace = str_replace($word, '***', $string);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Replace a Word with PHP</title>
</head>
<body>
  <div class='vanilla-container'>
    <h3>Paragrafo Originale:</h3>
    <p>
      <?php echo($string); ?>
    </p>

    <h4>Lunghezza del paragrafo:</h4>
    <div> <?php echo(strlen($string)) ?> caratteri</div>
  </div>
  <br>
  <hr>

  <div class='replace-container'>
    <h3>Paragrafo Rimpiazzato:</h3>
    <p>
      <?php echo($stringReplace); ?>
    </p>

    <h4>Lunghezza del paragrafo:</h4>
    <div> <?php echo(strlen($stringReplace)) ?> caratteri</div>
  </div>
</body>
</html>