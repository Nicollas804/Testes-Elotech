<?php
function calcularJurosCompostos($capital, $taxa_juros, $meses) {
    $taxa_juros_decimal = $taxa_juros / 100;
    $montante = $capital * pow((1 + $taxa_juros_decimal), $meses);
    $juros_total = $montante - $capital;
    return array($montante, $juros_total);
}

$capital = 1000;
$taxa_juros = 5;
$meses = 12;

$resultado = calcularJurosCompostos($capital, $taxa_juros, $meses);
$montante_total = $resultado[0];
$juros_total = $resultado[1];

echo "Montante total após $meses meses: R$ " . number_format($montante_total, 2) . "\n";
echo "Juros totais ganhos: R$ " . number_format($juros_total, 2) . "\n";
?>
