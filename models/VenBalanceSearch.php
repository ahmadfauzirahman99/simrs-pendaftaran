<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VenBalance;

/**
 * VenBalanceSearch represents the model behind the search form of `app\models\VenBalance`.
 */
class VenBalanceSearch extends VenBalance
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vendor_id', 'currency_id'], 'integer'],
            [['balance'], 'number'],
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
        $query = VenBalance::find();

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
            'vendor_id' => $this->vendor_id,
            'currency_id' => $this->currency_id,
            'balance' => $this->balance,
        ]);

        return $dataProvider;
    }
}
