<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Obat $model */

$this->title = 'Tambahkan Obat';
$this->params['breadcrumbs'][] = ['label' => 'Tambahkan Obat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>