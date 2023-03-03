<?php

namespace app\components;

use yii\base\Component;


class HelperComponent extends Component
{
    public static function phone_cleaner($phone){
        $trash = ['(', ')', ' ', '-'];
        $phone = str_replace($trash, '', $phone);
        $phone = '998'.$phone;
        return $phone;
    }
}