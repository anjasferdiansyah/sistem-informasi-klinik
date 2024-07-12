<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TindakanPasien $model */

$this->title = 'Create Tindakan Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Tindakan Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
