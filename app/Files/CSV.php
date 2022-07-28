<?php

declare(strict_types=1);

namespace App\Files;

class CSV
{
    /**
     * Interface para leitura de CSV's e retornar um array de dados
     * @param [type] $arquivo
     * @param boolean $cabecalho
     * @param string $delimitador
     * @return array
     */
    public static function lerArquivo($arquivo, bool $cabecalho = true, string $delimitador = ',')
    {
        if (!file_exists($arquivo)) {
            die('Arquivo não encontrado');
        }

        $dados = [];
        $csv = fopen($arquivo, 'r');
        $cabecalhoDados = $cabecalho ? fgetcsv($csv, 0, $delimitador) : [];

        while ($linha = fgetcsv($csv, 0, $delimitador)) {
            $dados[] = $cabecalho ? array_combine($cabecalhoDados, $linha) : $linha;
        }
        var_dump($dados);
        fclose($csv);
    }

    /**
     * Método responsável por salvar dados no CSV
     * @param string $arquivo
     * @param array $dados
     * @param string $delimitador
     * @return boolean
     */
    public static function criarArquivo($arquivo, $dados, $delimitador = ",")
    {
        $csv = fopen($arquivo, 'a+');

        foreach($dados as $linha) {
            fputcsv($csv, $linha, $delimitador);
        }
        fclose($csv);
    }
}