<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\IcdType;

/**
 * IcdTypeSearch represents the model behind the search form of `app\models\IcdType`.
 */
class IcdTypeSearch extends IcdType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icd_type_id'], 'integer'],
            [['icd_type_name'], 'safe'],
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
        $query = IcdType::find();

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
            'icd_type_id' => $this->icd_type_id,
        ]);

        $query->andFilterWhere(['like', 'icd_type_name', $this->icd_type_name]);

        return $dataProvider;
    }
}
