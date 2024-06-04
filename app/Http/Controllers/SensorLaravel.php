<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MSensor;

class SensorLaravel extends Controller
{
    public function bacakelembaban()
    {
        //baca nilai/isi tabel tb_sensor dan ambil nilai kelembaban
        $sensor = MSensor::select('*')->get();
        //Kirim ke tampilan baca kelembaban (buat view bacakelembaban)
        return view('bacakelembaban', [ 'nilaisensor' => $sensor]);
    }

    public function bacavolume()
    {
        //baca nilai/isi tabel tb_sensor dan ambil nilai kelembaban
        $sensor = MSensor::select('*')->get();
        //Kirim ke tampilan baca kelembaban (buat view bacakelembaban)
        return view('bacavolume', [ 'nilaisensor' => $sensor]);
    }

    public function simpansensor()
    {
        MSensor::where('id', '1')->update(['kelembaban' => request()->nilaikelembaban, 'volume' => request()->nilaivolume]);
        
    }
}
