<?php

namespace app\modules\admin;

/**
 * admin module definition class
 */
class admin extends \yii\base\Module
{
    public $defaultRoute = 'default/index';

    public $layoutPath = 'app\modules\admin\views\layouts';

    public $layout = 'main';

    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
    }
}
