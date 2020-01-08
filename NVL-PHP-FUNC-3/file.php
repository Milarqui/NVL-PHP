<?php
function vocales($Frase) {
  $vals = ["a","e","i","o","u"];
  $esta = [False,False,False,False,False];
  $frase = strtolower($Frase);
  $l = strlen($frase);
  for($i = 0; $i < 5; $i++)
  {
    if(strpos($frase,$vals[$i]) !== False)
    {
      $esta[$i] = True;
    }
  }
  if(in_array(False, $esta)){
      return "NO CONTIENE TODAS LAS VOCALES";
  }
  else {
     return "LA PALABRA CONTIENE LAS 5 VOCALES";
  }
}

$P = "Hoy es un nuevo dia";
echo vocales($P);
?>
