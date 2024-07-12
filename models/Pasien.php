<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id
 * @property string $nama
 * @property string $jenis_identitas
 * @property string $no_identitas
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $no_handphone
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jenis_identitas', 'no_identitas', 'jenis_kelamin', 'alamat', 'no_handphone'], 'required'],
            [['nama', 'jenis_identitas', 'no_identitas', 'jenis_kelamin', 'alamat', 'no_handphone'], 'string', 'max' => 255],
            [['no_identitas'], 'unique'],
            [['no_handphone'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jenis_identitas' => 'Jenis Identitas',
            'no_identitas' => 'No Identitas',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'no_handphone' => 'No Handphone',
        ];
    }
}
