<?php
function copia_diaria($file)
{
  date_default_timezone_set("Europe/Madrid");
  $nuevodir = date('Y-m-d G:i');
  mkdir($nuevodir);
  $nuevofile = "./$nuevodir/$file.modificado";
  copy($file,$nuevofile);
}
?>
