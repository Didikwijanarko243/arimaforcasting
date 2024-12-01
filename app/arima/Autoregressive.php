<?php

namespace App\arima;

class Autoregressive
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public static function linearRegression(array $x, array $y)
    {
        $n = count($x);

        // Hitung rata-rata x dan y
        $meanX = array_sum($x) / $n;
        $meanY = array_sum($y) / $n;

        // Hitung slope (m) dan intercept (b)
        $numerator = 0;
        $denominator = 0;

        for ($i = 0; $i < $n; $i++) {
            $numerator += ($x[$i] - $meanX) * ($y[$i] - $meanY);
            $denominator += ($x[$i] - $meanX) ** 2;
        }

        $slope = $numerator / $denominator;
        $intercept = $meanY - ($slope * $meanX);

        return [$slope, $intercept];
    }

    public static function autoregressive($data, $p)
    {
        $x = [];
        $y = [];

        // Formatkan data untuk regresi (lagged values)
        for ($i = $p; $i < count($data); $i++) {
            $x[] = $i; // Indeks waktu
            $y[] = $data[$i];
        }

        // Hitung regresi linier
        [$slope, $intercept] = Autoregressive::linearRegression($x, $y);

        // Prediksi nilai berikutnya
        $nextIndex = count($data);
        $prediction = ($slope * $nextIndex) + $intercept;

        return $prediction;
    }
}
