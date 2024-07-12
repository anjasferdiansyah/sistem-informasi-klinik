<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Sistem Informasi Klinik';
?>
<div>
    <?php
    if (!Yii::$app->user->isGuest) :
    ?>
        <h1>Selamat Datang <?= Html::encode(Yii::$app->user->identity->username) ?></h1>
    <?php endif; ?>
</div>
<div class="site-index row">
    <div class="col">
        <div class="card text-bg-info mb-3 w-100">
            <div class="card-body">
                <h1 class="card-title text-center">
                    <i class="fa-solid fa-hospital-user"></i>
                </h1>
                <h3 class="card-text text-center">Jumlah Pasien</h3>
                <p class="card-text text-center fs-1"><?= Yii::$app->db->createCommand('SELECT COUNT(*) FROM pasien')->queryScalar(); ?></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-bg-info mb-3">
            <div class="card-body">
                <h1 class="card-title text-center">
                    <i class="fa-solid fa-building"></i>
                </h1>
                <h3 class="card-text text-center">Jumlah Wilayah</h3>
                <p class="card-text text-center fs-1"><?= Yii::$app->db->createCommand('SELECT COUNT(*) FROM wilayah')->queryScalar(); ?></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-bg-info mb-3">
            <div class="card-body">
                <h1 class="card-title text-center">
                    <i class="fa-solid fa-user-doctor"></i>
                </h1>
                <h3 class="card-text text-center">Jumlah Obat</h3>
                <p class="card-text text-center fs-1"><?= Yii::$app->db->createCommand('SELECT COUNT(*) FROM obat')->queryScalar(); ?></p>
            </div>
        </div>
    </div>

</div>

</div>