<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/img/icons/favicon.png')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Preloader -->
<div class="content preloader">
    <div id="inTurnFadingTextG">
        <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">M</div>
        <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">I</div>
        <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">L</div>
        <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">L</div>
        <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">I</div>
        <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">Y</div>
        <div id="inTurnFadingTextG_1" class="inTurnFadingTextG"> </div>
        <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">M</div>
        <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">E</div>
        <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">R</div>
        <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">O</div>
        <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">S</div>
    </div>
</div>
<!-- Preloader -->

<!-- Header  -->
<header class="l-header active t-bg-light border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-7 col-lg-3 col-xl-2">
                <div class="brand">
                    <a href="<?= Url::home();?>" class="t-link">
                        <img
                            src="/img/mm_logo.png"
                            alt=""
                            class="img-fluid w-100"
                        />
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="t-pt-120 t-pb-175">
    <div class="container">
        <?= $content;?>
    </div>
</div>


<?= \app\widgets\FooterWidget::widget();?>
<?php \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]); ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
