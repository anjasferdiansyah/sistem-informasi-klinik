<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TindakanPasien;

/**
 * TindakanPasienSearch represents the model behind the search form of `app\models\TindakanPasien`.
 */
class TindakanPasienSearch extends TindakanPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_tindakan', 'id_pegawai', 'id_transaksi', 'biaya_tindakan'], 'integer'],
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
        $query = TindakanPasien::find();

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
            'id_tindakan' => $this->id_tindakan,
            'id_pegawai' => $this->id_pegawai,
            'id_transaksi' => $this->id_transaksi,
            'biaya_tindakan' => $this->biaya_tindakan,
        ]);

        return $dataProvider;
    }
}
