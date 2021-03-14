<?php

namespace App\Http\Controllers;

use App\Generic;
use Illuminate\Http\Request;

class ClothesController extends Controller
{
    CONST link = '_home';
    /**
     *
     */
    public function index($status)
    {
        if(isset($status) && !empty($status)) {
            if(str_ends_with($status, self::link)) {
                $stringName = str_replace(self::link, '', $status);
                $arrGenericsName = Generic::all()->keyBy('name_eng')->toArray();
                $arrKeysGenerics = array_keys($arrGenericsName);
                if (in_array($stringName, $arrKeysGenerics)) {
                    echo "Вывести все возможные фасоны для " . $stringName;
                }
            } else {
                return redirect('/');
            }
        }
    }
}
