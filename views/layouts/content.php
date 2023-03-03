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
            <div class="col-5 col-lg-9 col-xl-7 text-right">
                <div class="zol-menu-wrapper">
                    <div
                        class="zol-menu-toggle d-inline-block d-lg-none"
                    >
                        <span class="zol-menu-open">
                            <i class="las la-bars"></i>
                        </span>
                        <span class="zol-menu-close">
                            <i class="las la-times"></i>
                        </span>
                    </div>
                    <ul class="t-list zol-menu">
                        <li class="zol-menu__list">
                            <a href="<?= Url::to(['site/buy-item']);?>" class="t-link zol-menu__link">Sotib olingan ashyolar</a>
                        </li>
                        <li class="zol-menu__list">
                            <a href="<?= Url::to(['site/contact']);?>" class="t-link zol-menu__link">Aloqa uchun</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 d-xl-block">
                <nav>
                <?php if(Yii::$app->user->isGuest):?>
                    <a href="<?= Url::to(['site/login']);?>" class="t-link bttn bttn-sm bttn-round bttn-primary">Kirish</a>
                    <a href="<?= Url::to(['site/signup']);?>" class="t-link bttn bttn-sm bttn-round bttn-gamma">Ro‘yxatdan o‘tish</a>
                <?php else:?>
                    <a href="<?= Url::to(['site/logout']);?>" data-method="post" class="t-link bttn bttn-sm bttn-round">Chiqish</a>
                <?php endif;?>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="zol-banner zol-banner--blog t-pt-150 t-pb-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="mt-0 t-text-light"><?= $this->title;?></h2>
                <?php if (!empty($this->params['breadcrumbs'])): ?>
                    <?= Breadcrumbs::widget([
                        'links' => $this->params['breadcrumbs'],
                        'itemTemplate' => '<li class="breadcrumbs__list">{link}</li>',
                        'activeItemTemplate' => '<li class="breadcrumbs_list text-white">{link}</li>',
                        'options' => [
                            'class' => 't-list breadcrumbs d-flex justify-content-center align-items-center',
                        ],
                        'homeLink' => [
                            'label' => Yii::t('yii', 'Home'),
                            'url' => Yii::$app->homeUrl,
                            'class' => 't-link breadcrumbs__link t-link--light-alpha'
                        ],
                    ]) ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

<div class="t-pt-120 t-pb-120">
    <div class="container">
        <?= $content;?>
    </div>
</div>

<div class="back-to-top">
    <span class="back-top">
        <i class="las la-angle-up"></i>
    </span>
</div>
<!-- Back To Top End -->

<?= \app\widgets\FooterWidget::widget();?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
