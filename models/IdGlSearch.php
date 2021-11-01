<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\IdGl;

/**
 * IdGlSearch represents the model behind the search form of `app\models\IdGl`.
 */
class IdGlSearch extends IdGl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_name'], 'safe'],
            [['next_id'], 'integer'],
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
        $query = IdGl::find();

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
            'next_id' => $this->next_id,
        ]);

        $query->andFilterWhere(['like', 'id_name', $this->id_name]);

        return $dataProvider;
    }
}
