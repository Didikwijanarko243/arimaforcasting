<?php

namespace App\arima;
use MathPHP\Statistics\Average;

class MovingAverage
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public static function movingAverage($errors, $q)
    {
        // dd($q);
        $latest_errors = array_slice($errors, -$q);
        return Average::mean($latest_errors);
    }
}
