<?php

namespace App\Helpers;


class GlobalHelper
{

    public static function formatRupiah($number): string
    {
        $format_rupiah = "Rp " . number_format($number, 0, ',', '.');
        return $format_rupiah;
    }
}
