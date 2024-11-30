<?php

namespace App\arima;

use MathPHP\Statistics\Average;

class Differencing
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    

    function difference($data, $interval = 1)
    {
        $diff = [];
        for ($i = $interval; $i < count($data); $i++) {
            $diff[] = $data[$i] - $data[$i - $interval];
        }
        return $diff;
    }
}
