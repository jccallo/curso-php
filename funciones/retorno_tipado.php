<?php declare(strict_types=1);

// retorno tipado
// se usa la funcion declare(strict_types=1) al inicio
function suma(float $numero1, float $numero2) : int {
    return (int)($numero1 + $numero2);
}

echo suma(1.2, 5.2);

?>

