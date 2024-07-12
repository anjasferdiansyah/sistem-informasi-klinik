<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property int $id
 * @property int $nama_tindakan
 * @property int $deskripsi
 * @property int $biaya
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tindakan', 'deskripsi', 'biaya'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_tindakan' => 'Nama Tindakan',
            'deskripsi' => 'Deskripsi',
            'biaya' => 'Biaya',
        ];
    }
}
