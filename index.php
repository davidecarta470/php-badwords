<?php

$frase = 'Riportando il pensiero di persone vissute in diversi momenti storici e appartenti a diverse società, è inevitabile che ci siano anche dei punti di vista contrastanti. Ciò che unisce queste frasi sulla natura, però, è un sentimento di ammirazione condiviso.
';

$parolaDaCensurare =$_GET['parolaDaCensurare'];
$fraseCensurata=str_replace($parolaDaCensurare,'***',$frase);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>lunghezza :<?php echo strlen($frase)?> caratteri</p>
  <p><?php echo $fraseCensurata ?></p>
</body>
</html>