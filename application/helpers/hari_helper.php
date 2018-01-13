<?php


if (!function_exists('hari')) {
    function hari(){
        $hari = Date('D');
        switch ($hari) {
        	case "Sun":
                $hari = "Minggu, ";
                break;

            case "Mon":
                $hari = "Senin, ";
                break;

            case "Tue":
                $hari = "Selasa, ";
                break; 

            case "Wed":
                $hari = "Rabu, ";
                break;

            case "Thu":
                $hari = "Kamis, ";
                break;

            case "Fri":
                $hari = "Jumat, ";
                break;

            case "Sat":
                $hari = "Sabtu ";
                break;

            default:
                $hari = Date('D');
                break;
        }
        
        return $hari;
    }
}
