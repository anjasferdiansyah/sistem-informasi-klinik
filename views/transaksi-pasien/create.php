<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TransaksiPasien $model */

$this->title = 'Create Transaksi Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
