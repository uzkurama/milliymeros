<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;

?>

<div class="t-pb-120 t-pt-120 t-bg-light-grad">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-capitalize t-mt-15 mb-0">
                    So'nggi yangiliklar
                </h2>
            </div>
        </div>
        <div class="row t-mt-70">
            <?php foreach($models as $model):?>
            <div class="col-md-4">
                <div class="price-card t-bg-light">
                    <div class="t-pl-30 t-pr-30 text-center mx-auto">
                        <a href="#" class="t-link">
                            <img src="<?= $model->img;?>" alt="" class="img-fluid w-100"/>
                        </a>
                    </div>
                    <div class="t-pl-30 t-pr-30 t-mt-30">
                        <a href="#" class="t-link t-link-primary xsm-text">
                            <i class="las la-calendar-alt"></i>
                            <?= date('d-m-Y', $model->created_at);?>
                        </a>
                        <h4 class="text-capitalize t-mt-10">
                            <a href="<?= Url::to(['news/view', 'id' => $model->id]);?>" class="t-link t-link--alpha">
                                <?= $model->title;?>
                            </a>
                        </h4>

                    </div>

                    <div class="t-pl-30 t-pr-30 t-mt-30">
                    <a href="<?= Url::to(['news/view', 'id' => $model->id]);?>" class="t-link t-link--alpha">
                        <span class="cards__footer-icon">
                            <i class="las la-plus-circle"></i>
                        </span>
                        <span class="text-capitalize font-weight-bold">
                            Batafsil
                        </span>
                    </a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
