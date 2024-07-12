<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi_pasien".
 *
 * @property int $id
 * @property int $id_pasien
 * @property int $id_pegawai
 * @property string $tanggal_pendaftaran
 * @property float $biaya_pendaftaran
 *
 * @property Pasien $pasien
 * @property Pegawai $pegawai
 */
class TransaksiPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_pegawai', 'tanggal_pendaftaran', 'biaya_pendaftaran'], 'required'],
            [['id_pasien', 'id_pegawai'], 'integer'],
            [['tanggal_pendaftaran'], 'safe'],
            [['biaya_pendaftaran'], 'number'],
            [['id_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['id_pasien' => 'id']],
            [['id_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id_pegawai' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pasien' => 'Id Pasien',
            'id_pegawai' => 'Id Pegawai',
            'tanggal_pendaftaran' => 'Tanggal Pendaftaran',
            'biaya_pendaftaran' => 'Biaya Pendaftaran',
        ];
    }

    /**
     * Gets query for [[Pasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasien()
    {
        return $this->hasOne(Pasien::class, ['id' => 'id_pasien']);
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
}
