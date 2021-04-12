<?php

declare(strict_types=1);

namespace App;

class NumerosPrimos
{
    public function calcular(int $limite): array
    {
        $sequencia = range(2, $limite);
        $numerosPrimos = array_filter(
            $sequencia,
            function ($numero) {
                return $this->isPrimo($numero, --$numero);
            }
        );

        return array_values($numerosPrimos);
    }

    private function isPrimo(
        int $numero,
        int $divisor
    ): bool {
        if ($divisor < 2) {
            return true;
        }

        if ($numero % $divisor === 0) {
            return false;
        }

        return $this->isPrimo($numero, --$divisor);
    }
}
