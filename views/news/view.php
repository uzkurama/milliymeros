<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\News $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Yangiliklar', 'url' => ['#']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="t-pt-120 t-pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 t-mb-50 mb-lg-0">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-post border">
                            <div class="blog-post__img">
                                <a href="#" class="t-link blog-post__img-link w-100">
                                    <img src="<?= $model->img;?>" alt="" class="w-100 img-fluid"/>
                                </a>
                                <span><?= date('d-m-Y', $model->created_at);?></span>
                            </div>
                            <div class="blog-post__body pb-3 pt-3">
                                <?= $model->content;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

