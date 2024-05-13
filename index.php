<?php
declare(strict_types=1);
require_once('./Perro.php');
$perro1 = new Perro;
$propiedades_perro = $perro1->getPropiedades();
list($raza, $peso, $color, $nombre) = explode(',',$propiedades_perro);



// Imprimiendo datos
echo "La raza del perro es $raza, su peso es $peso, su color $color y finalmente su nombre es $nombre";