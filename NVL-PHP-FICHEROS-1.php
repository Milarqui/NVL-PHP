function palabras($file,$word)
{
  $num = 0; //Se inicia el contador
  while(($line = fgets($file)) !== false) //Lee cada línea del archivo de texto
  {
    $l = strtolower($line); //Transforma el texto para que sea todo minúsculas
    if(strpos($l,$word) !== false) //Determina si la palabra está en la línea
    {
        $c = substr_count($l,$word); //Cuenta cuantas veces está la palabra en la línea
        $num = $num + $c; //Añade el valor al contador total
    }
  }
  return $num; //Devuelve el resultado final
}
//Declaramos los inputs de la función: el archivo y la palabra
$quijote = fopen("https://gist.githubusercontent.com/jsdario/6d6c69398cb0c73111e49f1218960f79/raw/8d4fc4548d437e2a7203a5aeeace5477f598827d/el_quijote.txt","r");
$palabra = "molino";

echo palabras($quijote,$palabra);
