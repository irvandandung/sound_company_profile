<?php

class Controller {

    protected function view($view_path, $data = []){
        require_once '../app/views/'.$view_path.'.php';
    }

    protected function model($model_path){
        require_once '../app/models/'.$model_path.'.php';
        return new $model_path;
    }

    protected function indo_date($date){
        $day = date('D', strtotime($date));
        switch ($day) {
            case 'Sun':
             $day = "Minggu";
            break;
           
            case 'Mon':   
             $day = "Senin";
            break;
           
            case 'Tue':
             $day = "Selasa";
            break;
           
            case 'Wed':
             $day = "Rabu";
            break;
           
            case 'Thu':
             $day = "Kamis";
            break;
           
            case 'Fri':
             $day = "Jumat";
            break;
           
            case 'Sat':
             $day = "Sabtu";
            break;
            
            default:
             $day = "Tidak ada";  
            break;
        }

        $month = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
            );
            
            $slice = explode('-', $date);
            
            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun
             
            return $day.', '.$slice[2] . ' ' . $month[ (int)$slice[1] ] . ' ' . $slice[0];
    }
}