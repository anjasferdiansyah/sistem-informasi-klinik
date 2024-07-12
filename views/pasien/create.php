<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pasien $model */

$this->title = 'Buat Pasien Baru';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>