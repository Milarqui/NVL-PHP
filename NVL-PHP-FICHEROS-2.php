function reemplazar($read,$write,$word1,$word2)
{
  $fIn = fopen($read,"r");
  $fOut = fopen($write,"w");
  while(($lIn = fgets($fIn)) !== false)
  {
    $lOut = str_replace($word1,$word2,$lIn);
    fwrite($fOut,$lOut);
  }
  fclose($fIn);
  fclose($fOut);
}

$routeIn = "https://gist.githubusercontent.com/jsdario/6d6c69398cb0c73111e49f1218960f79/raw/8d4fc4548d437e2a7203a5aeeace5477f598827d/el_quijote.txt";
$routeOut = "quijote_morty.txt";
$wordIn = "Sancho";
$wordOut = "Morty";
reemplazar($routeIn,$routeOut,$wordIn,$wordOut);
