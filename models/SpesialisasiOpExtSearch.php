<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SpesialisasiOpExt;

/**
 * SpesialisasiOpExtSearch represents the model behind the search form of `app\models\SpesialisasiOpExt`.
 */
class SpesialisasiOpExtSearch extends SpesialisasiOpExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['spes_id', 'disabled', 'created_user_id'], 'integer'],
            [['spes_name', 'created_time'], 'safe'],
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
        $query = SpesialisasiOpExt::find();

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
            'spes_id' => $this->spes_id,
            'disabled' => $this->disabled,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
        ]);

        $query->andFilterWhere(['like', 'spes_name', $this->spes_name]);

        return $dataProvider;
    }
}
