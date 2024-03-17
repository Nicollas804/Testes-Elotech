<?php
function calcularTroco($valor, $notas) {
    if ($valor == 0) {
        return;
    }

    foreach ($notas as $nota) {
        if ($valor >= $nota) {
            $quantidade = floor($valor / $nota);
            echo "Notas de R$ $nota: $quantidade\n";
            $novo_valor = $valor - ($quantidade * $nota);
            calcularTroco($novo_valor, $notas);
            return;
        }
    }
}

$notas_disponiveis = array(100, 50, 20, 10, 5, 2, 1);
$valor_troco = 378;

echo "Troco para R$ $valor_troco:\n";
calcularTroco($valor_troco, $notas_disponiveis);
?>
