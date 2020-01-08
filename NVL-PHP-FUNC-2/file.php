<?php
function cuentaLetras($palabra, $letra)
{
  $n = 0;
  $l = strlen($palabra);
  $low = strtolower($letra);
  $upp = strtoupper($letra);
  for($i = 0; $i < $l; $i++)
  {
    if($palabra[$i] == $low or $palabra[$i] == $upp)
    {
      $n++;
    }
  }
  return $n;
}
?>
