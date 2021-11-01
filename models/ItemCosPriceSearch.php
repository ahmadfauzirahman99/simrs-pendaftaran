<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItemCosPrice;

/**
 * ItemCosPriceSearch represents the model behind the search form of `app\models\ItemCosPrice`.
 */
class ItemCosPriceSearch extends ItemCosPrice
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'cos_id'], 'integer'],
            [['price', 'discount'], 'number'],
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
        $query = ItemCosPrice::find();

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
            'item_id' => $this->item_id,
            'cos_id' => $this->cos_id,
            'price' => $this->price,
            'discount' => $this->discount,
        ]);

        return $dataProvider;
    }
}
