<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\TransaksiPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $dataPasien = ArrayHelper::map(\app\models\Pasien::find()->all(), 'id', 'nama');
    echo $form->field($model, 'id_pasien')->dropDownList($dataPasien, ['label' => 'Pasien']);
    ?>

    <?php
    $dataPegawai = ArrayHelper::map(\app\models\Pegawai::find()->all(), 'id', 'nama_lengkap');
    echo $form->field($model, 'id_pegawai')->dropDownList($dataPegawai, ['label' => 'Pegawai']);
    ?>

    <?= $form->field($model, 'tanggal_pendaftaran')->widget(DatePicker::class, [
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['class' => 'form-control'],
    ]) ?>

    <?= $form->field($model, 'biaya_pendaftaran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>