<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id
 * @property string $nama_lengkap
 * @property string $jabatan
 * @property string $NIP
 * @property int|null $id_wilayah
 *
 * @property TransaksiPasien[] $transaksiPasiens
 * @property User[] $users
 * @property Wilayah $wilayah
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'jabatan', 'NIP'], 'required'],
            [['id_wilayah'], 'integer'],
            [['nama_lengkap', 'jabatan', 'NIP'], 'string', 'max' => 255],
            [['id_wilayah'], 'exist', 'skipOnError' => true, 'targetClass' => Wilayah::class, 'targetAttribute' => ['id_wilayah' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_lengkap' => 'Nama Lengkap',
            'jabatan' => 'Jabatan',
            'NIP' => 'NIP',
            'id_wilayah' => 'Wilayah',
        ];
    }

    /**
     * Gets query for [[TransaksiPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiPasiens()
    {
        return $this->hasMany(TransaksiPasien::class, ['id_pegawai' => 'id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::class, ['id_pegawai' => 'id']);
    }

    /**
     * Gets query for [[Wilayah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWilayah()
    {
        return $this->hasOne(Wilayah::class, ['id' => 'id_wilayah']);
    }
}
