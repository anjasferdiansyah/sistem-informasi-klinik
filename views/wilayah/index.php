<?php

use app\models\Wilayah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\WilayahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Wilayah Klinik';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wilayah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <button>
        <?= Html::a('Create Wilayah', ['create'], ['class' => 'btn btn-success']) ?>
    </button>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_wilayah',
            'kode_pos',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Wilayah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>