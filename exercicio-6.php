<?php
abstract class TCalculo {
    abstract public function Calcular($valor1, $valor2);
}

class TCalculoValor extends TCalculo {
    public $Valor1;
    public $Valor2;

    public function __construct($valor1, $valor2) {
        $this->Valor1 = $valor1;
        $this->Valor2 = $valor2;
    }

    public function Calcular($valor1, $valor2) {
    }
}

class TCalculoSoma extends TCalculoValor {
    public function Calcular($valor1, $valor2) {
        if ($valor1 == "" || $valor2 == "") {
            return "Erro: Valores não podem ser vazios.";
        }

        return $valor1 + $valor2;
    }
}

class TCalculoMultiplicacao extends TCalculoValor {
    public function Calcular($valor1, $valor2) {
        if ($valor1 == "" || $valor2 == "") {
            return "Erro: Valores não podem ser vazios.";
        }

        return $valor1 * $valor2;
    }
}

class TCalculoFatorial extends TCalculoValor {
    public function Calcular($valor1, $valor2) {
        if ($valor1 < 0 || $valor1 > 10 || $valor2 < 0 || $valor2 > 10) {
            return "Erro: Valores devem estar entre 0 e 10.";
        }

        return $this->fatorial($valor1) . ", " . $this->fatorial($valor2);
    }

    private function fatorial($numero) {
        if ($numero == 0) {
            return 1;
        }
        return $numero * $this->fatorial($numero - 1);
    }
}

// Exemplo de uso
$calculo_soma = new TCalculoSoma();
$resultado_soma = $calculo_soma->Calcular(5, 3);
echo "Resultado da soma: " . $resultado_soma . "\n";

$calculo_multiplicacao = new TCalculoMultiplicacao();
$resultado_multiplicacao = $calculo_multiplicacao->Calcular(5, 3);
echo "Resultado da multiplicação: " . $resultado_multiplicacao . "\n";

$calculo_fatorial = new TCalculoFatorial();
$resultado_fatorial = $calculo_fatorial->Calcular(3, 4);
echo "Resultado do fatorial: " . $resultado_fatorial . "\n";
?>
