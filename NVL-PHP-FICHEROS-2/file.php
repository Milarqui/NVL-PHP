<?php
function reemplazar($read,$write,$word1,$word2)
{
  $fIn = fopen($read,"r"); \\Abre el archivo a leer
  $fOut = fopen($write,"w"); \\Abre o crea el archivo donde se escribe
  while(($lIn = fgets($fIn)) !== false) \\Lee cada línea del archivo de entrada
  {
    $lOut = str_replace($word1,$word2,$lIn); \\Para cada línea, reemplaza la palabra a buscar por la palabra a reemplazar
    fwrite($fOut,$lOut); \\Escribe la nueva línea en el archivo de salida
  }
  fclose($fIn); \\Cierra el archivo de entrada
  fclose($fOut); \\Cierra el archivo de salida
}

$routeIn = "https://gist.githubusercontent.com/jsdario/6d6c69398cb0c73111e49f1218960f79/raw/8d4fc4548d437e2a7203a5aeeace5477f598827d/el_quijote.txt";
$routeOut = "quijote_morty.txt";
$wordIn = "Sancho";
$wordOut = "Morty";
reemplazar($routeIn,$routeOut,$wordIn,$wordOut);
?>
