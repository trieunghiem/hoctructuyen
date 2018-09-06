<?php

namespace App\Lib;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LibSupportViewController extends Controller
{
    public static function viewPercentPrice($price, $oldPrice)
    {

        if($price == null || $price == 0 || $oldPrice == null || $oldPrice == 0){
            return '';
        }
        $priceMinus = abs($oldPrice - $price);

        $percent = (int)(($priceMinus / $oldPrice) * 100);

        $ht = '<span class="discount person">- ' . $percent . '%</span>';

        return $ht;
    }
}