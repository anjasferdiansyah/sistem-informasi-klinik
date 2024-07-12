<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id
 * @property string $nama_obat
 * @property string $jenis_obat
 * @property string $harga
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'jenis_obat', 'harga'], 'required'],
            [['nama_obat', 'jenis_obat', 'harga'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_obat' => 'Nama Obat',
            'jenis_obat' => 'Jenis Obat',
            'harga' => 'Harga',
        ];
    }
}
