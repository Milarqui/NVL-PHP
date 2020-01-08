<?php
function vocales($Frase) {
  $vals = ["a","e","i","o","u"];
  $esta = True;
  $frase = strtolower($Frase);
  $l = strlen($frase);
  for($i = 0; $i < 5; $i++)
  {
    if(substr_count($frase,$vals[$i]) == 0)
    {
      $esta = False;
      break;
    }
  }
  if($esta){
    return "LA PALABRA CONTIENE LAS 5 VOCALES";
      
  }
  else {
    return "NO CONTIENE TODAS LAS VOCALES";
  }
}

$P = "Hoy es un nuevo dia";
echo vocales($P);
?>
