<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TransaksiPasien $model */

$this->title = 'Update Transaksi Pasien: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
