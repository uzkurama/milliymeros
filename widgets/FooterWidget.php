<?php

namespace app\widgets;

use yii\base\Widget;
use Yii;

class FooterWidget extends Widget
{
    public function run()
    {
        return $this->render('footer');
    }
}