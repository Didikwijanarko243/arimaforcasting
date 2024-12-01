<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\arima\Arima; 

class arimaController extends Controller
{

    public function inputForm()
    {
        return view('pages/input');
    }

    public function proses(Request $request)
    {
        // dd($request->all());
        // Validasi input
        $request->validate([
            'data' => 'required|string', // Data dalam format angka dipisahkan koma
            'p' => 'required|integer|min:0',
            'd' => 'required|integer|min:0',
            'q' => 'required|integer|min:0',
            'steps' => 'required|integer|min:1',
        ]);

        // Ambil input dari form
        $data = explode(',', $request->input('data'));
        $data = array_map('floatval', $data); // Konversi ke float
        $p = (int) $request->input('p');
        $d = (int) $request->input('d');
        $q = (int) $request->input('q');
        $steps = (int) $request->input('steps');

        
        $forecast = Arima::ramal($data, $p, $d, $q, $steps);

        
        
        $kembali = Arima::convertDif($data, $forecast, $d);
       
        return view('pages/input', [
            'data_asli' => $data,
            'data_forcast' => $kembali,
            'p' => $p,
            'd' => $d,
            'q' => $q,
            'steps' => $steps,
        ]);
    }

    
}
