<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\TindakanPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tindakan-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $dataTindakan = ArrayHelper::map(\app\models\Tindakan::find()->all(), 'id', 'nama_tindakan');
    echo $form->field($model, 'id_tindakan')->dropDownList($dataTindakan);
    ?>

    <?php
    $dataPegawai = ArrayHelper::map(\app\models\Pegawai::find()->all(), 'id', 'nama_lengkap');
    echo $form->field($model, 'id_pegawai')->dropDownList($dataPegawai);
    ?>

    <?php
    $dataTransaksiPasien = ArrayHelper::map(\app\models\TransaksiPasien::find()->all(), 'id', 'id');
    echo $form->field($model, 'id_tindakan')->dropDownList($dataTransaksiPasien);
    ?>

    <?= $form->field($model, 'biaya_tindakan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>