<?php
    if ( ! function_exists('tgl_indo'))
    {
        function date_indo($tgl)
        {
            $ubah = gmdate($tgl);
            $pecah = explode(" ",$ubah);
            $pecah2 = explode("-",$pecah[0]);
            $tanggal = $pecah2[2];
            $bulan = bulan($pecah2[1]);
            $tahun = $pecah2[0];
            return $tanggal.' '.$bulan.' '.$tahun;
        }
    }


    if ( ! function_exists('bln_singkat'))
    {
        function bln_singkat($tgl1)
        {
            $ubah = gmdate($tgl1);
            $pecah = explode(" ",$ubah);
            $pecah2 = explode("-",$pecah[0]);
            $tanggal = $pecah2[2];
            $bulan = bln($pecah2[1]);
            $tahun = $pecah2[0];
            return $bulan;
        }
    }
      
    if ( ! function_exists('bulan'))
    {
        function bulan($bln)
        {
            switch ($bln)
            {
                case 1:
                    return "Januari";
                    break;
                case 2:
                    return "Februari";
                    break;
                case 3:
                    return "Maret";
                    break;
                case 4:
                    return "April";
                    break;
                case 5:
                    return "Mei";
                    break;
                case 6:
                    return "Juni";
                    break;
                case 7:
                    return "Juli";
                    break;
                case 8:
                    return "Agustus";
                    break;
                case 9:
                    return "September";
                    break;
                case 10:
                    return "Oktober";
                    break;
                case 11:
                    return "November";
                    break;
                case 12:
                    return "Desember";
                    break;
            }
        }
    }
      
    if ( ! function_exists('bln'))
    {
        function bln($bulan)
        {
            switch ($bulan)
            {
                case 1:
                    return "Jan";
                    break;
                case 2:
                    return "Feb";
                    break;
                case 3:
                    return "Mar";
                    break;
                case 4:
                    return "Apr";
                    break;
                case 5:
                    return "Mei";
                    break;
                case 6:
                    return "Jun";
                    break;
                case 7:
                    return "Jul";
                    break;
                case 8:
                    return "Agust";
                    break;
                case 9:
                    return "Sep";
                    break;
                case 10:
                    return "Okt";
                    break;
                case 11:
                    return "Nov";
                    break;
                case 12:
                    return "Des";
                    break;
            }
        }
    }