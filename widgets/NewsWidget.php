<?php

namespace app\widgets;

use yii\base\Widget;
use Yii;
use app\models\News;

class NewsWidget extends Widget
{
    public function run()
    {
        $models = News::find()->orderBy('created_at DESC')->all();
        return $this->render('news', [
            'models' => $models,
        ]);
    }
}