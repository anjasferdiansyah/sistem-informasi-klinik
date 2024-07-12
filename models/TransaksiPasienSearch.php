<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TransaksiPasien;

/**
 * TransaksiPasienSearch represents the model behind the search form of `app\models\TransaksiPasien`.
 */
class TransaksiPasienSearch extends TransaksiPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_pasien', 'id_pegawai'], 'integer'],
            [['tanggal_pendaftaran'], 'safe'],
            [['biaya_pendaftaran'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TransaksiPasien::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_pasien' => $this->id_pasien,
            'id_pegawai' => $this->id_pegawai,
            'tanggal_pendaftaran' => $this->tanggal_pendaftaran,
            'biaya_pendaftaran' => $this->biaya_pendaftaran,
        ]);

        return $dataProvider;
    }
}
