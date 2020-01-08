function cuentaLetraA($palabra)
{
  $n = 0;
  $l = strlen($palabra);
  for($i = 0; $i < $l; $i++)
  {
    if($palabra[$i] == "a" or $palabra[$i] == "A")
    {
      $n++;
    }
  }
  return $n;
}
