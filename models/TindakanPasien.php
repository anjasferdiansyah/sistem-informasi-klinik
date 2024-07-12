<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan_pasien".
 *
 * @property int $id
 * @property int $id_tindakan
 * @property int $id_pegawai
 * @property int $id_transaksi
 * @property int $biaya_tindakan
 *
 * @property Pegawai $pegawai
 * @property Tindakan $tindakan
 * @property TransaksiPasien $transaksi
 */
class TindakanPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tindakan', 'id_pegawai', 'id_transaksi', 'biaya_tindakan'], 'required'],
            [['id_tindakan', 'id_pegawai', 'id_transaksi', 'biaya_tindakan'], 'integer'],
            [['id_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id_pegawai' => 'id']],
            [['id_tindakan'], 'exist', 'skipOnError' => true, 'targetClass' => Tindakan::class, 'targetAttribute' => ['id_tindakan' => 'id']],
            [['id_transaksi'], 'exist', 'skipOnError' => true, 'targetClass' => TransaksiPasien::class, 'targetAttribute' => ['id_transaksi' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_tindakan' => 'Tindakan',
            'id_pegawai' => 'Pegawai',
            'id_transaksi' => 'No. Transaksi',
            'biaya_tindakan' => 'Biaya Tindakan',
        ];
    }

    /**
     * Gets query for [[Pegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::class, ['id' => 'id_pegawai']);
    }

    /**
     * Gets query for [[Tindakan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakan()
    {
        return $this->hasOne(Tindakan::class, ['id' => 'id_tindakan']);
    }

    /**
     * Gets query for [[Transaksi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksi()
    {
        return $this->hasOne(TransaksiPasien::class, ['id' => 'id_transaksi']);
    }
}
