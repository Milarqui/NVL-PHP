<?php
  $username = _POST['username'];
  $password1 = _POST['password1'];
  $password2 = _POST['password2'];
  if($password1 == $password2)
  {
    echo "Datos procesados correctamente\n";
  }
  else
  {
    echo "Error en el formulario\n";
  }
?>
