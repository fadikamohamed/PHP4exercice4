<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php
        function comparateur($firstNumber, $secondNumber) {

          if ($firstNumber > $secondNumber) {
              echo 'Le premier nombre est plus grand';
          } elseif ($firstNumber < $secondNumber) {
              echo 'Le premier nombre est plus petit';
          } elseif ($firstNumber == $secondNumber) {
              echo 'Les deux nombres sont identiques';
          } else {

          }
        }
        comparateur(79, 78);
       ?>
    </p>
  </body>
</html>
