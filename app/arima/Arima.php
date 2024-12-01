<?php

namespace App\arima;
use App\arima\Differencing;
use App\arima\Autoregressive;
use App\arima\MovingAverage;

class Arima
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public static function ramal($data, $p, $d, $q, $steps = 1)
    {
        
        // Differencing
        $differenced = Differencing::difference($data, $d);

       
        $errors = [0];

        // Prediksi
        $forecast = [];
        for ($i = 0; $i < $steps; $i++) {
            // AR 
            $ar = Autoregressive::autoregressive($differenced, $p);
           
            // MA 
            $ma = MovingAverage::movingAverage($errors, $q);
            
            // Gabungkan AR dan MA
            $arma = $ar + $ma;

            // Simpan hasil
            $forecast[] = $arma;

            // Update differenced dan errors
            $differenced[] = $arma;
            $errors[] = $arma - $ar;

            // dd($errors);
        }

        return $forecast;
    }

    public static function convertDif($original, $forecast, $interval = 1)
    {
        $inverted = [];
        $last = $original[count($original) - $interval];
        foreach ($forecast as $f) {
            $value = $f + $last;
            $inverted[] = $value;
            $last = $value;
        }
        return $inverted;
    }
}
