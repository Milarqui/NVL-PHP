<?php
  $username = _POST['username'];
  $password1 = _POST['password1'];
  $password2 = _POST['password2'];
  if(($password1 !== $password2) or (strlen($password1) < 8) or (strlen($password2) < 8))
  {
    echo "Error en el formulario\n";
  }
  else
  {
    echo "Datos procesados correctamente\n";
  }
?>
