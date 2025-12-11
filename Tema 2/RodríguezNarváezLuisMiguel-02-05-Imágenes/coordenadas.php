<?php
$query = $_SERVER['QUERY_STRING'];
// "valor1,valor2,valor3"

// Convertirla en un array manualmente
$parametros = explode(',', $query);

echo "Pulso en x=";
echo $parametros[0];
echo " px y en y= ";
echo $parametros[1];
echo " px  ";
echo " <br> <a href='RodríguezNarváezLuisMiguel-02-05-Imágenes.html'> Volver</a>";
