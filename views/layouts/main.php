<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use matejch\yii2sidebar\Sidebar;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="https://kit.fontawesome.com/3f514dfbf4.js" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header id="header">
        <?php Sidebar::begin([

            'collapseText' => 'Collapse', // Optional text in button, defaults to Collapse
            'top' => '0px', //Optional Fixed top, where sidebar begins, defaults to 0px
            'left' => '0px', //Optional Fixed left, where sidebar begins on letf side, defaults to 0px
            //'sidebarCacheName' => 'test', //Optional Name for saving state in localstorage
            'widthOpen' => '256px', //Optional size when sidebar is opened
            'widthCollapsed' => '70px', //Optional size when sidebar is colapsed
            'topMobile' => '0px', //Optional
            'leftMobile' => '0px', //Optional
            'position' => 'block', //Optional
            'positionMobile' => 'fixed', //Optional
        ]) ?>
        <div class="mb-4 d-flex justify-content-center align-items-center text-light gap-4">
            <i class="fa-solid fa-bars"></i>
            <span data-sidebar-hide="1">Sistem Informasi Klinik</span>
        </div>

        <div class="d-flex flex-column justify-content-between h-100 gap-2">
            <div class="d-flex flex-column gap-2">
                <div>
                    <?= Html::a('<i class="fa-solid fa-home"></i> <span data-sidebar-hide="1">Dashboard</span>', '/sistem-informasi-klinik/web', ['class' => "btn btn-light w-100"]) ?>
                </div>

                <div>
                    <?= Html::a('<i class="fa-solid fa-user"></i> <span data-sidebar-hide="1">Data User</span> ', 'index.php?r=user', ['class' => "btn btn-light w-100"]) ?>
                </div>

                <div>
                    <?= Html::a('<i class="fa-solid fa-hospital-user"></i> <span data-sidebar-hide="1">Data pasien</span>', 'index.php?r=pasien', ['class' => "btn btn-light w-100"]) ?>
                </div>
                <div>
                    <?= Html::a('<i class="fa-solid fa-user-tie"></i> <span data-sidebar-hide="1">Data pegawai</span>', 'index.php?r=pegawai', ['class' => "btn btn-light w-100"]) ?>
                </div>

                <div>
                    <?= Html::a('<i class="fa-solid fa-user-tie"></i> <span data-sidebar-hide="1">Tindakan Pasien</span>', 'index.php?r=tindakan', ['class' => "btn btn-light w-100"]) ?>
                </div>

                <div>
                    <?= Html::a('<i class="fa-solid fa-user-tie"></i> <span data-sidebar-hide="1">Data obat</span>', 'index.php?r=obat', ['class' => "btn btn-light w-100"]) ?>
                </div>

                <div>
                    <?= Html::a('<i class="fa-solid fa-building"></i> <span data-sidebar-hide="1">Wilayah</span>', 'index.php?r=wilayah', ['class' => "btn btn-light w-100"]) ?>
                </div>

                <div>
                    <?= Html::a('<i class="fa-solid fa-building"></i> <span data-sidebar-hide="1">Transaksi Pasien</span>', 'index.php?r=transaksi-pasien', ['class' => "btn btn-light w-100"]) ?>
                </div>

                <div>
                    <?= Html::a('<i class="fa-solid fa-building"></i> <span data-sidebar-hide="1">Tindakan Pasien</span>', 'index.php?r=tindakan-pasien', ['class' => "btn btn-light w-100"]) ?>
                </div>



            </div>
            <div>
                <?php
                if (Yii::$app->user->isGuest) {
                    echo Html::a('<i class="fa-solid fa-right-from-bracket"></i> <span data-sidebar-hide="1">Login</span>', ['site/login'], ['data-method' => 'post', 'class' => "btn btn-light w-100"]);
                } else {
                    echo Html::a('<i class="fa-solid fa-right-from-bracket"></i> <span data-sidebar-hide="1">Logout (' . Yii::$app->user->identity->username . ')</span>', ['site/logout'], ['data-method' => 'post', 'class' => "btn btn-light w-100"]);
                }
                ?>
            </div>
        </div>



        <?php Sidebar::end() ?>

    </header>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">
            <?php if (!empty($this->params['breadcrumbs'])) : ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer id="footer" class="mt-auto py-3 bg-light">
        <div class="container">
            <div class="row text-muted">
                <div class="col-md-6 text-center text-md-start">&copy; My Company <?= date('Y') ?></div>
                <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>