<?php
class Pessoa {
    private $pessoas = [];

    public function adicionarPessoa($id, $nome, $data_nascimento) {
        $this->pessoas[] = [
            'id' => $id,
            'nome' => $nome,
            'data_nascimento' => $data_nascimento
        ];
    }

    public function formatarLista() {
        foreach ($this->pessoas as $pessoa) {
            echo $pessoa['id'] . " - " . $pessoa['nome'] . " - " . date_format(date_create($pessoa['data_nascimento']), 'd/m/Y') . "\n";
        }
    }
}

$pessoa = new Pessoa();
$pessoa->adicionarPessoa(1, "Pessoa Um", "1990-01-01");
$pessoa->adicionarPessoa(2, "Pessoa Dois", "1992-02-02");


$pessoa->formatarLista();
?>
